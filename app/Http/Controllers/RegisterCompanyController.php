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

    public function create(Request $request, $saas_product)
    {
        $view = '';
        if ($saas_product == 'growup-lms') {
            $view = 'frontend.growup_lms.signup';
            $url  = 'lms.home';
        }

        if (Auth::check()) {
            return to_route($url)->with('warning', 'You are already logged in');
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

        // handle existing and guest user request
        $user_data = $this->handleUserRequest($request);

        // company name
        $this->company_name = $request->company_name;

        // get the current saas product
        $this->saas_product = SaasProduct::where('slug', $saas_product)->first();
        if (! $this->saas_product) {
            return redirect()->back()->with('error', 'Product not found');
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
            Mail::to($user_data['email'])->send(new VerifyEmailWithPassword($user_data['pin'], auth()->user(), $user_data['password']));
        }

        return view('frontend.growup_lms.' . auth()->user()->email_verified_at ? 'company_create_success' : 'company_email_verify');
    }

    public function handleUserRequest($request)
    {
        $user = Auth::user();

        // common data for user and password reset
        $data['email']     = $request->email;
        $data['pin']       = rand(10000, 99999);
        $data['password']  = $request->password;
        $data['send_mail'] = true;

        if ($user) {

            // handle auth existing user
            if (! $user->email_verified_at) {
                $reset_password   = DB::table('password_resets')->where('email', $user->email)->first();
                $data['email']    = $user->email;
                $data['password'] = $user->password;
                $data['pin']      = $reset_password ? $reset_password->token : $data['pin'];

                if (! $reset_password) {
                    DB::table('password_resets')->insert($data);
                }
            }
            $data['send_mail'] = false;
        } else {

            // handle guest user registration and login to system
            $username = strstr($data['email'], '@', true);
            $user     = User::create([
                'name'     => $username,
                'email'    => $data['email'],
                'role_id'  => '6',
                'password' => Hash::make($data['password']),
            ]);

            event(new Registered($user));
            Auth::login($user);
        }

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

}
