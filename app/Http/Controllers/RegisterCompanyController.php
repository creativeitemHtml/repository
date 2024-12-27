<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmailWithPassword;
use App\Models\PricingPackage;
use App\Models\SaasCompany;
use App\Models\SaasProduct;
use App\Models\SaasSubscription;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use PDOException;

class RegisterCompanyController extends Controller
{
    public $saas_product;
    public $company_name;
    public $company_db_name;
    public $company_db_host;
    public $company_db_user;
    public $company_db_pass;
    public $product_slug;

    public function __construct()
    {
        $this->product_slug = request()->route()->parameter('saas_product');
    }

    public function create(Request $request, $saas_product)
    {
        $product_id = SaasProduct::where('slug', $saas_product)->value('id');
        $view       = '';
        if ($saas_product == 'growup-lms') {
            $view = 'frontend.growup_lms.signup';
        }

        if (Auth::check()) {
            $subscription = SaasSubscription::where('user_id', auth()->id())
                ->where('status', 1)
                ->whereDate('expiry', '>', now()->toDateTimeString())
                ->whereHas('package', function ($query) use ($product_id) {
                    $query->where('id', $product_id);
                })
                ->exists();

            if ($subscription) {
                return redirect()->back()->with('warning', 'You have already subscribed to this product');
            }
        }

        $page_data['email'] = htmlspecialchars($request->email);
        return view($view, $page_data);
    }

    public function store(Request $request, $saas_product)
    {
        $rules = [
            'company_name' => 'required|string|max:255|unique:saas_companies,company_name',
            'policy'       => 'accepted',
        ];

        $msg = [
            'company_name.required' => 'Company name is required and must be unique',
            'company_name.unique'   => 'Company name must be unique',
            'policy'                => 'You must agree to the Terms of Service and Privacy Policy.',
        ];

        if (! Auth::check()) {
            $rules['email']    = 'required|string|lowercase|email|max:255|unique:' . User::class;
            $rules['password'] = ['required', Password::defaults()];

            $msg['email.required']    = 'Please enter your email address.';
            $msg['email.unique']      = 'This email is already in use. Log in if it’s yours.';
            $msg['password.required'] = 'Password is required. Create one to proceed.';
        }

        // Validate request
        $validator = Validator::make($request->all(), $rules, $msg);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // company name
        $this->company_name = $request->company_name;

        // get the current saas product
        $this->saas_product = SaasProduct::where('slug', $saas_product)->first();
        if (! $this->saas_product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // handle existing and guest user request
        $user_data = $this->handleUserRequest($request);

        // check user has any company
        $has_company = SaasCompany::where('user_id', auth()->id())->first();
        if ($has_company) {
            return redirect()->back()->with('warning', 'You have already created a company');
        }

        // check user has already subscribed to the selected saas product
        $product_id   = $this->saas_product->id;
        $subscription = SaasSubscription::where('user_id', auth()->id())
            ->where('status', 1)
            ->whereHas('package', function ($query) use ($product_id) {
                $query->where('id', $product_id);
            })
            ->exists();

        if ($subscription) {
            return redirect()->back()->with('warning', 'You have already subscribed to this product');
        }

        // create the company database
        $create_company = $this->createNewCompany();
        if (! $create_company['status']) {
            return redirect()->back()->with('error', $create_company['msg']);
        }

        // import the company sql file
        $import = $this->importDatabase();
        if (! $import['status']) {
            return redirect()->back()->with('error', $import['msg']);
        }

        // free subscription to the selected saas product
        $subscription = $this->freeSubscriptionToSaasProduct();
        if (! $subscription['status']) {
            return redirect()->back()->with('error', $subscription['msg']);
        }

        // set company initial data
        $set_company_data = $this->setCompanyInitialData($subscription['data']);
        if (! $set_company_data['status']) {
            return redirect()->back()->with('error', $set_company_data['msg']);
        }

        // send email verification
        if ($user_data['send_mail']) {
            Mail::to($user_data['email'])->send(new VerifyEmailWithPassword($user_data['token'], auth()->user(), $user_data['password']));
        }

        $url = auth()->user()->email_verified_at ? 'signup.success' : 'email.verification.process';
        $msg = auth()->user()->email_verified_at ? 'Company created successfully' : 'Please verify your email to continue';

        session(['company_registration_success' => true]);
        session(['email_verification' => true]);

        return to_route($url, $saas_product)->with('success', $msg);
    }

    public function handleUserRequest($request)
    {
        $user = Auth::user();

        // common data for user and password reset
        $data['email']      = $request->email;
        $data['token']      = rand(10000, 99999);
        $data['created_at'] = date('Y-m-d H:i:s');

        // if user not exists then insert user and make login
        if (! $user) {
            $username = strstr($data['email'], '@', true);

            $user = User::create([
                'name'     => $username,
                'email'    => $data['email'],
                'role_id'  => '6',
                'password' => Hash::make($request->password),
            ]);

            DB::table('password_resets')->insert($data);

            event(new Registered($user));
            Auth::login($user);

            $user = Auth::user();
        }

        // check email has been verified or not
        $send_mail = false;
        if (! $user->email_verified_at) {
            $send_mail      = true;
            $reset_password = DB::table('password_resets')->where('email', $user->email)->first();

            $data['email'] = $user->email;
            $data['token'] = $reset_password ? $reset_password->token : $data['token'];

            if (! $reset_password) {
                DB::table('password_resets')->insert($data);
            }
        }

        $data['password']  = $user->password;
        $data['send_mail'] = $send_mail;

        return $data;
    }

    private function createNewCompany()
    {
        $this->company_db_name = 'ctmacademy_saas_' . Str::random(9);
        $this->company_db_host = "localhost";
        $this->company_db_user = "root";
        $this->company_db_pass = "";

        try {
            DB::statement("CREATE DATABASE IF NOT EXISTS $this->company_db_name");

            $grant_privileges = "GRANT ALL PRIVILEGES ON $this->company_db_name.* TO '{$this->company_db_user}'@'{$this->company_db_host}';";
            DB::statement($grant_privileges);

            $flush_privileges = "FLUSH PRIVILEGES;";
            DB::statement($flush_privileges);

        } catch (\Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }

        return ['status' => true, 'msg' => 'Company created successfully'];
    }

    private function importDatabase()
    {
        $sql_file_path = $this->getSaasProductSqlFile();
        if (! $sql_file_path) {
            return ['status' => false, 'msg' => 'SQL file not found'];
        }

        try {
            config([
                'database.connections.company_mysql.database' => $this->company_db_name,
                'database.connections.company_mysql.username' => $this->company_db_user,
                'database.connections.company_mysql.password' => $this->company_db_pass,
            ]);

            $connection = DB::connection('company_mysql');
            $connection->getPdo();

            $this->executeSqlFile($sql_file_path, $connection);
        } catch (PDOException $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }

        // add new company to saas_companies table
        $company_info['user_id']      = auth()->user()->id;
        $company_info['saas_id']      = $this->saas_product->id;
        $company_info['company_name'] = $this->company_name;
        $company_info['company_slug'] = Str::slug($this->company_name);
        $company_info['db_name']      = $this->company_db_name;

        SaasCompany::insertGetId($company_info);

        return ['status' => true, 'msg' => 'Database imported successfully'];
    }

    private function executeSqlFile($sql_file_path, $connection)
    {
        $temp_line = '';
        foreach (file($sql_file_path) as $line) {
            if (preg_match('/^\s*(--|#|$)/', $line)) {
                continue;
            }

            $temp_line .= $line;

            if (str_ends_with(trim($line), ';')) {
                $connection->statement($temp_line);
                $temp_line = '';
            }
        }
    }

    private function getSaasProductSqlFile()
    {
        $file_path = public_path("assets/saas_product_sql/{$this->saas_product->slug}.sql");
        return file_exists($file_path) ? $file_path : null;
    }

    private function freeSubscriptionToSaasProduct()
    {
        $package = PricingPackage::where('is_free', $this->saas_product->id)->first();
        if (! $package) {
            return ['status' => false, 'msg' => 'Pricing package not found'];
        }

        $expiry = strtotime("+ {$package->interval_period} {$package->interval}");

        $subscription['user_id']        = auth()->user()->id;
        $subscription['package_id']     = $package->id;
        $subscription['price']          = $package->is_free ? null : (($package->discount ?? $package->price) * 100);
        $subscription['expiry']         = isset($time_diff) ? $expiry - $time_diff : $expiry;
        $subscription['expiry']         = date('Y-m-d H:i:s', $subscription['expiry']);
        $subscription['payment_method'] = 'free';
        $subscription['status']         = 1;

        $subscription_id = SaasSubscription::insertGetId($subscription);

        return ['status' => true, 'msg' => 'Subscription added successfully', 'data' => $subscription_id];
    }

    private function setCompanyInitialData($subscription_id)
    {
        $connection = DB::connection('company_mysql');
        $connection->getPdo();

        $admin = [
            'name'              => auth()->user()->name,
            'email'             => auth()->user()->email,
            'status'            => 1,
            'skills'            => json_encode([]),
            'password'          => auth()->user()->password,
            'role'              => 'admin',
            'address'           => '123 Admin St',
            'phone'             => '123-456-7890',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ];
        $connection->table('users')->insert($admin);

        // insert subscription data into $product _subscriptions table
        $subscription                 = SaasSubscription::where('id', $subscription_id)->first();
        $package                      = $subscription->package;
        $subscription_data['payload'] = json_encode(['subscription' => $subscription, 'package' => $package]);

        $connection->table('company_subscriptions')->insert($subscription_data);
        return ['status' => true, 'msg' => 'Company data has been saved'];
    }

    public function verification_form()
    {
        if (! session()->has('email_verification')) {
            return redirect()->route('register.company.form', $this->product_slug)->with('error', 'Invalid request');
        }

        if (auth()->user()->email_verified_at) {
            return redirect()->route('home')->with('warning', 'Email already verified');
        }

        return view('frontend.growup_lms.company_email_verify');
    }

    public function process_verification(Request $request)
    {
        $request->validate([
            'pin' => 'required|digits:5',
        ]);

        $user = Auth::user();

        if ($user->email_verified_at) {
            return redirect()->route('home')->with('warning', 'Email already verified');
        }

        $password_reset = DB::table('password_resets')->where('email', $user->email)->first();

        if (! $password_reset || $password_reset->token != $request->pin) {
            return redirect()->back()->with('error', 'Invalid token');
        }

        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();

        session()->forget('email_verification');

        return redirect()->route('signup.success', $this->product_slug)->with('success', 'Email verified successfully');
    }

    public function resend_verification(Request $request)
    {
        $user = Auth::user();
        $pin  = rand(10000, 99999);

        DB::table('password_resets')->where('email', $user->email)->update(['token' => $pin]);
        Mail::to($user->email)->send(new VerifyEmailWithPassword($pin, $user, $user->password));

        return to_route('email.verification.process', $this->product_slug)->with('success', 'Verification email sent successfully');
    }

    public function signup_success()
    {
        if (! session()->has('company_registration_success')) {
            return redirect()->route('register.company.form', $this->product_slug)->with('error', 'Invalid request');
        }

        session()->forget('company_registration_success');
        $page_data['product'] = SaasProduct::where('slug', $this->product_slug)->first();
        return view('frontend.growup_lms.company_create_success', $page_data);
    }

}