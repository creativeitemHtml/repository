<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmailWithPassword;
use App\Models\Article;
use App\Models\Documentation;
use App\Models\PricingPackage;
use App\Models\Product;
use App\Models\SaasCompany;
use App\Models\SaasProduct;
use App\Models\SaasSubscription;
use App\Models\Topic;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use mysqli;
use PDO;
use Stripe;

class LmsController extends Controller
{
    public function index()
    {
        return view('frontend.growup_lms.home');
    }

    public function features()
    {
        return view('frontend.growup_lms.features');
    }

    public function solutions()
    {
        return view('frontend.growup_lms.solutions');
    }

    public function pricing()
    {
        $lms_id                = SaasProduct::where('slug', 'creative-lms')->value('id');
        $page_data['packages'] = PricingPackage::where('product_id', $lms_id)->get();
        return view('frontend.growup_lms.pricing', $page_data);
    }

    public function signup(Request $request)
    {
        $page_data['email'] = htmlspecialchars($request->email);
        return view('frontend.growup_lms.signup', $page_data);
    }

    public function help($topic = "", $article = "")
    {
        $query = Topic::where('product_id', 1)->where('visibility', 1)
            ->where('is_saas', 1);

        // this is for only https://creativeitem/product-slug/help
        // $search = request()->query('search');
        // if ($search) {
        //     $query->where('topic', 'like', "%{$search}%");
        // }

        if (! empty($topic)) {
            $query->where('slug', $topic);
            $product              = str_replace('/', '', request()->route()->getPrefix());
            $page_data['product'] = SaasProduct::where('slug', $product)->first();

            if (! $query->exists()) {
                return redirect()->back()->with('error', get_phrase('Data not found.'));
            }

            $searched_topic = $query->first();
            $first_article  = Article::where('topic_id', $searched_topic->id)->orderBy('order', 'asc')->first();

            if (empty($article)) {
                return redirect()->route('lms.help', [$topic, $first_article->slug]);
            }
        }

        $path = 'frontend.growup_lms.help';
        $view = $topic ? "{$path}_details" : $path;

        $topic
        ? $page_data['topic']  = $query->first()
        : $page_data['topics'] = $query->orderBy('order', 'asc')->paginate(15);

        return view($view, $page_data);
    }

    public function register_company_lms(Request $request)
    {
        die();
        if (! empty($request->all())) {

            if (auth()->user()) {
                $user = User::find(auth()->user()->id);
            } else {
                $this->validate($request, [
                    'email' => 'required|email',
                ]);

                $name = strstr($request->email, '@', true);

                $check_email = User::where('email', $request->email)->first();

                if (! empty($check_email)) {
                    // $user = $check_email;
                    return redirect()->route('login')->with('info', 'This email already exists. Please login or provide new email address');
                } else {
                    $password = random(8);

                    $user = User::create([
                        'name'     => $name,
                        'email'    => $request->email,
                        'role_id'  => '6',
                        'password' => Hash::make($password),
                    ]);

                    $pin = rand(10000, 99999);

                    DB::table('password_resets')
                        ->insert(
                            [
                                'email' => $request->email,
                                'token' => $pin,
                            ]
                        );

                    Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

                    // $token = $user->createToken('myapptoken')->plainTextToken;
                }
                relogin_user($user->id);
            }

            $company = $request->company_name;

            $company_check = SaasCompany::where('company_name', $company)->first();

            if (! empty($company_check)) {
                // $user = $check_email;
                return redirect()->back()->with('info', 'This company name already in use. Try different name.');
            } else {

                $data = [
                    'company_name'   => $company,
                    'company_slug'   => company_slugify($company),
                    'admin_name'     => $user->name,
                    'admin_email'    => $user->email,
                    'admin_password' => $request->input('password'),
                    'action'         => 'create_company',
                ];

                // Create a new Guzzle client
                $client = new Client();

                // Make a POST request to the API
                $response = $client->post('http://192.168.10.199/pollob/academy-laravel/api/register_company', [
                    'form_params' => $data,
                ]);

                // Get the response body
                $responseBody = $response->getBody()->getContents();

                // Decode the JSON response if needed
                $responseData = json_decode($responseBody, true);

                // Print the response for debugging purposes
                // echo '<pre>';
                // print_r($responseData);
                // echo '</pre>';

                // die();

                // Check if the response status is 200
                if ($responseData['status'] == 200) {
                    // $responseData = $response->json(); // Decode the JSON response

                    $data1 = SaasCompany::create([
                        'user_id'      => $user->id,
                        'saas_id'      => 1,
                        'company_name' => $company,
                        'company_slug' => company_slugify($company),
                    ]);

                    // Redirect to the specified URL with the company slug
                    // return redirect()->to('https://lms.creativeitem.com/' . $data1->company_slug);
                    return redirect()->back()->with('message', 'Company created successfully.');
                } else {
                    return back()->with('error', 'Failed to register the company. Please try again.');
                }
            }

        } else {
            return redirect()->back()->with('error', 'Please fill up the form first.');
        }
    }

    public function company_lms_register(Request $request)
    {
        // validate the user input data
        $rules['company_name'] = 'required|string|max:255|unique:saas_companies,company_name';
        $msg['company_name']   = 'Company name is required and must be unique. Try another name.';

        if (! Auth::check()) {
            $rules['email']    = 'required|string|lowercase|email|max:255|unique:' . User::class;
            $rules['password'] = ['required', Password::defaults()];

            $msg['email.required']    = 'Please enter your email address.';
            $msg['email.unique']      = 'This email is already in use. Log in if it’s yours.';
            $msg['password.required'] = 'Password is required. Create one to proceed.';
        }

        $validator = Validator::make($request->all(), $rules, $msg);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // handle existing user
        if (Auth::check()) {
            $user = Auth::user();

            if (! $user->email_verified_at) {
                $reset_password = DB::table('password_resets')->where('email', $request->email)->first();

                $data['email'] = $request->email;
                $data['pin']   = $reset_password ? $reset_password : rand(10000, 99999);

                if (! $reset_password) {
                    DB::table('password_resets')->insert($data);
                }

                Mail::to($request->email)->send(new VerifyEmailWithPassword($data['pin'], $user, $request->password));
            }
        }

        if (auth()->user()) {
            $user = User::find(auth()->user()->id);

            $check_verification = auth()->user()->email_verified_at;

            if (is_null($check_verification)) {

                $passwordReset = DB::table('password_resets')->where('email', $request->email)->first();

                if (empty($passwordReset)) {

                    $pin = rand(10000, 99999);

                    DB::table('password_resets')
                        ->insert(
                            [
                                'email' => $request->email,
                                'token' => $pin,
                            ]
                        );

                    Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $request->password));
                } else {
                    Mail::to($request->email)->send(new VerifyEmailWithPassword($passwordReset->token, $user, $request->password));
                }

            }

        } else {
            // Define a stricter regex pattern for email validation
            $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

            // Use the regex pattern in the validator
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'regex:' . $emailRegex],
            ]);

            if ($validator->fails()) {
                // Get the error messages as a string
                $errorMessages = $validator->messages()->all();
                $errorString   = implode(' ', $errorMessages);

                // Pass the error messages to the session
                $response = [
                    'status'  => '500',
                    'message' => 'Check your email Address',
                ];

                $response = json_encode($response);

                return $response;
            }

            $name = strstr($request->email, '@', true);

            $check_email = User::where('email', $request->email)->first();

            if (! empty($check_email)) {
                // $user = $check_email;
                return redirect()->route('login')->with('info', 'This email already exists. Please login or provide new email address');
            } else {
                $password = random(8);

                $user = User::create([
                    'name'     => $name,
                    'email'    => $request->email,
                    'role_id'  => '6',
                    'password' => Hash::make($password),
                ]);

                $pin = rand(10000, 99999);

                DB::table('password_resets')
                    ->insert(
                        [
                            'email' => $request->email,
                            'token' => $pin,
                        ]
                    );

                Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

                // $token = $user->createToken('myapptoken')->plainTextToken;
            }
            relogin_user($user->id);
        }

        $company = $request->company_name;

        $company_data = [
            'admin_name'     => $user->name,
            'admin_email'    => $user->email,
            'admin_password' => $request->password,
            'company_name'   => $company,
            'user_id'        => $user->id,
        ];

        $company_data = json_encode($company_data);

        $data = $this->create_db($company_data);

        $data1 = json_decode($data, true);

        if (is_array($data1) && $data1['status'] == 200) {

            $check_verification = auth()->user()->email_verified_at;

            // subscription to a free package
            $package = PricingPackage::where('is_free', 1)->first();
            $expiry  = strtotime("+ {$package->interval_period} {$package->interval}");

            $subscription['user_id']        = auth()->user()->id;
            $subscription['package_id']     = $package->id;
            $subscription['price']          = $package->is_free ? null : (($package->discount ?? $package->price) * 100);
            $subscription['expiry']         = isset($time_diff) ? $expiry - $time_diff : $expiry;
            $subscription['expiry']         = date('Y-m-d H:i:s', $subscription['expiry']);
            $subscription['payment_method'] = 'free';
            $subscription['status']         = 1;

            $subscription_id = SaasSubscription::insertGetId($subscription);
            $this->updateGrowUpSubscription($subscription_id);

            if (is_null($check_verification)) {
                return view('frontend.growup_lms.company_email_verify');
            } else {
                return view('frontend.growup_lms.company_create_success');
            }

            // Step 4: Set the appropriate header
            header('Content-Type: application/json');

            return $data;

        } else {
            // Step 4: Set the appropriate header
            header('Content-Type: application/json');

            $response = [
                'status'  => '500',
                'message' => 'Failed to create company',
            ];

            $response = json_encode($response);

            return $response;
        }
    }

    public function company_email_verify(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'verification_code' => 'required|digits:5',
        ]);

        $verificationCode = $request->input('verification_code');
        $userEmail        = Auth::user()->email; // Assuming the user is logged in

        // Check the code from the password_resets table
        $passwordResetEntry = DB::table('password_resets')->where([
            ['email', $userEmail],
        ]);

        if ($passwordResetEntry->exists()) {

            $passwordResetEntry->delete();

            // Update the email_verified_at column in the users table
            DB::table('users')
                ->where('email', $userEmail)
                ->update(['email_verified_at' => now()]);

            // Return the success view
            return view('frontend.growup_lms.company_create_success');
        } else {
            // Return an error response if the code is incorrect
            return response()->json(['message' => 'Invalid verification code.'], 400);
        }

    }

    public function create_db($company_data)
    {

        // Root Database credentials
        $servername = "localhost";
        $username   = "root";
        $password   = "VEz1Pi%#@cKL";

        // New DB name
        $dbname = 'ctmacademy_saas_' . random(9);

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database
        $sql = "CREATE DATABASE $dbname";
        if ($conn->query($sql) === true) {
            // echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        // SQL statements to grant privileges and flush privileges
        // This is cpanel phpmyadmin root user name: cpses_ctt4t58hgx
        $sql1 = "GRANT ALL PRIVILEGES ON $dbname.* TO '$username'@'localhost'";
        // Execute SQL statements
        if ($conn->query($sql1) === true) {
            // echo "Privileges granted successfully<br>";
        } else {
            echo "Error granting privileges: " . $conn->error;
        }

        $sql2 = "FLUSH PRIVILEGES";
        if ($conn->query($sql2) === true) {
            // echo "Privileges flushed successfully<br>";
            return $this->create_blank_sql($dbname, $username, $password, $servername, $company_data);
        } else {
            echo "Error flushing privileges: " . $conn->error;
        }

        // Close connection
        $conn->close();

    }

    public function create_blank_sql($db_name, $db_user, $db_pass, $db_host, $company_data)
    {

        // Create a new PDO instance
        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }

        // Path to the SQL file
        $sqlFilePath = 'public/assets/install.sql';

        // Read the file into an array of lines
        $lines = file($sqlFilePath);

        // Initialize templine variable
        $templine = '';

        // Loop through each line
        foreach ($lines as $line) {
            // Skip it if it's a comment
            if (substr(trim($line), 0, 2) == '--' || $line == '') {
                continue;
            }

            // Add this line to the current templine we are creating
            $templine .= $line;

            // If it has a semicolon at the end, it's the end of the query, so can process this templine
            if (substr(trim($line), -1, 1) == ';') {
                // Perform the query
                try {
                    $pdo->exec($templine);
                    // Reset temp variable to empty
                    $templine = '';
                } catch (PDOException $e) {
                    echo "Error executing query: " . $e->getMessage();
                }
            }
        }

        return $this->insert_db_config($db_name, $db_user, $db_pass, $db_host, $company_data);

    }

    public function insert_db_config($db_name, $db_user, $db_pass, $db_host, $company_data)
    {

        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }

        $admin = json_decode($company_data, true);

        // Sample data (in a real scenario, this would come from a form or another source)
        $data = [
            'admin_name'     => $admin['admin_name'],
            'admin_email'    => $admin['admin_email'],
            'admin_password' => $admin['admin_password'],
            'admin_address'  => '123 Admin St',
            'admin_phone'    => '123-456-7890',
        ];

        // Admin data
        $admin_data = [
            'name'              => $data['admin_name'],
            'email'             => $data['admin_email'],
            'status'            => 1,
            'skills'            => json_encode([]),
            'password'          => password_hash($data['admin_password'], PASSWORD_BCRYPT),
            'role'              => 'admin',
            'address'           => $data['admin_address'],
            'phone'             => $data['admin_phone'],
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at'        => date('Y-m-d H:i:s')
        ];

        // Insert data into database
        try {
            $sql = "INSERT INTO users (name, email, status, skills, password, role, address, phone, email_verified_at, created_at)
                    VALUES (:name, :email, :status, :skills, :password, :role, :address, :phone, :email_verified_at, :created_at)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($admin_data);

            return $this->insert_db_config_to_main_db($db_name, $company_data);

            // return json_encode($response);
        } catch (PDOException $e) {
            echo "Error inserting data: " . $e->getMessage();
        }

        // return json_encode($response);

    }

    public function insert_db_config_to_main_db($db_name, $company_data)
    {

        $company_data = json_decode($company_data, true);

        // Ensure slugify method is accessible
        $company_slug = company_slugify($company_data['company_name']);

        $companyInfo = SaasCompany::create([
            'user_id'      => $company_data['user_id'],
            'saas_id'      => 1,
            'company_name' => $company_data['company_name'],
            'company_slug' => $company_slug,
            'db_name'      => $db_name,
        ]);

        if (! empty($companyInfo)) {

            $response = array(
                'status'  => '200',
                'message' => 'Company created successfully',
            );

            return json_encode($response);

        } else {

            $response = array(
                'status'  => '500',
                'message' => 'Failed to create company!',
            );

            return json_encode($response);
        }

    }

    public function check_subscription($email, $product)
    {
        $user = User::where('email', $email)->first();
        if (! $user) {
            return response()->json([
                'err' => 'User not found',
            ]);
        }

        $subscription = SaasSubscription::where('user_id', $user->id)
            ->whereHas('package', function ($query) use ($product) {
                $query->where('product_id', $product);
            })
            ->first();

        if ($subscription) {
            return response()->json([
                'data' => [
                    'subscription_info' => $subscription,
                    'package_info'      => $subscription->package,
                ],
            ]);
        } else {
            $starter = PricingPackage::where('type', 'starter')->where('product_id', $product)->first();
            return response()->json([
                'data' => [
                    'package_info' => $starter,
                ],
            ]);
        }
    }

    public function subscription(Request $request)
    {
        // package info
        $package = PricingPackage::find($request->package_id);

        $subscription = SaasSubscription::where('user_id', auth()->id())
            ->where('expiry', '>', now())
            ->where('status', 1)
            ->latest('id')
            ->first();

        // check user plan
        if ($subscription) {
            if ($subscription->package->priority == $package->priority) {
                return redirect()->back()->with('error', 'You are on this plan.');
            } elseif ($subscription->package->priority > $package->priority) {
                return redirect()->back()->with('error', 'You have a higher plan.');
            }
        }

        // retrieve system currency and stripe settings
        $currency        = get_settings('system_currency');
        $stripe_settings = json_decode(get_settings('stripe'));

        // Set Stripe keys based on mode
        $stripe_key    = $stripe_settings->mode === 'test' ? $stripe_settings->test_key : $stripe_settings->public_live_key;
        $stripe_secret = $stripe_settings->mode === 'test' ? $stripe_settings->test_secret_key : $stripe_settings->secret_live_key;

        $description = "Subscription for GrowUpLMS.";
        if ($subscription) {
            $issue_date    = strtotime($subscription->created_at);
            $time_diff     = time() - $issue_date;
            $expiry        = strtotime($subscription->expiry);
            $period        = $expiry - $issue_date;
            $deduct_amount = ($subscription->package->price / $period) * $time_diff;
            $amount_return = ($subscription->package->discount ?? $subscription->package->price) - $deduct_amount;
            $description   = "Upgrading GrowUpLMS subscription plan.";
        }

        // prepare subscription data
        $expiry                          = strtotime("+ {$package->interval_period} {$package->interval}");
        $purchase_data['has_plan']       = $subscription ? $subscription->id : null;
        $purchase_data['discount']       = isset($amount_return) ? $amount_return : null;
        $purchase_data['user_id']        = auth()->user()->id;
        $purchase_data['package_id']     = $package->id;
        $purchase_data['price']          = $package->is_free ? null : (($package->discount ?? $package->price) * 100);
        $purchase_data['expiry']         = isset($time_diff) ? $expiry - $time_diff : $expiry;
        $purchase_data['payment_method'] = 'stripe';
        $purchase_data['success_url']    = 'lms.subscription.success';
        $purchase_data['cancel_url']     = 'lms.pricing';

        // subscription to free package
        if ($package->is_free) {
            $subscription                   = array_splice($purchase_data, 2, 5);
            $subscription['expiry']         = date('Y-m-d H:i:s', $subscription['expiry']);
            $subscription['status']         = 1;
            $subscription['payment_method'] = 'free';

            $subscription_id = SaasSubscription::insertGetId($subscription);
            $this->updateGrowUpSubscription($subscription_id);

            // return to subscription details page
            return redirect()->route('customer.growup.lms.subscription')->with('success', 'Subscription completed successfully.');
        }

        // payable amount
        $payable_amount = round($purchase_data['price']);

        // process stripe data
        $purchase_data = implode(' ', array_map(function ($key, $value) {
            return "$key:$value";
        }, array_keys($purchase_data), $purchase_data));

        // stipe api payment
        try {
            Stripe\Stripe::setApiKey($stripe_secret);
            $session = \Stripe\Checkout\Session::create([
                'line_items'  => [[
                    'price_data' => [
                        'currency'     => $currency,
                        'product_data' => [
                            'name'        => $package->title,
                            'description' => $description,
                        ],
                        'unit_amount'  => $payable_amount,
                    ],
                    'quantity'   => 1,
                ]],
                'mode'        => 'payment',
                'success_url' => route('lms.subscription.success', ['purchase_data' => $purchase_data, 'response' => 'check $service_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url'  => route('lms.pricing', ['purchase_data' => $purchase_data, 'response' => 'check $service_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
            ]);
            return redirect($session->url);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function subscription_success(Request $request, $purchase, $response)
    {
        $purchase = $this->string_to_array($purchase);

        if ($purchase['payment_method'] == 'stripe') {
            // retrieve system currency and stripe settings
            $currency        = get_settings('system_currency');
            $stripe_settings = json_decode(get_settings('stripe'));

            // set Stripe keys based on mode
            $stripe_key    = $stripe_settings->mode === 'test' ? $stripe_settings->test_key : $stripe_settings->public_live_key;
            $stripe_secret = $stripe_settings->mode === 'test' ? $stripe_settings->test_secret_key : $stripe_settings->secret_live_key;

            // stripe response
            $stripe_api_response_session_id = $request->all();
            $stripe                         = new \Stripe\StripeClient($stripe_secret);
            $session_response               = $stripe->checkout->sessions->retrieve($stripe_api_response_session_id['session_id'], []);

            // retrieve session data
            $stripe_payment_intent = $session_response['payment_intent'];
            $stripe_session_id     = $stripe_api_response_session_id['session_id'];

            $stripe_transaction_keys           = array();
            $stripe_response['payment_intent'] = $stripe_payment_intent;
            $stripe_response['session_id']     = $stripe_session_id;
            $stripe_transaction_keys           = $stripe_response;
            $stripe_payment_response           = json_encode($stripe_transaction_keys);

            // prepare subscription data
            $subscription['user_id']          = $purchase['user_id'];
            $subscription['package_id']       = $purchase['package_id'];
            $subscription['price']            = number_format($purchase['price'] / 100, 2);
            $subscription['payment_method']   = 'stripe';
            $subscription['transaction_keys'] = $stripe_payment_response;
            $subscription['expiry']           = date('Y-m-d H:i:s', $purchase['expiry']);
            $subscription['status']           = 1;

            $purchase['has_plan'] ? $subscription['upgrade_from_package_id'] = $purchase['has_plan'] : null;

            // check if use has any plan
            if ($purchase['has_plan']) {
                SaasSubscription::where('id', $purchase['has_plan'])->update(['status' => 2]);
            }

            $subscription_id = SaasSubscription::insertGetId($subscription);

            $this->updateGrowUpSubscription($subscription_id);

            // Mail::to(auth()->user()->email)->send(new ServiceInvoice($payment_details, $user));
            // Mail::to('project@creativeitem.com')->send(new ServiceInvoice($payment_details, $user));

            // return redirect('customer/project_details/' . $payment_details->project_id)->with('success', 'Service Payment successful');
            $msg = $purchase['has_plan'] ? 'Your plan has been upgraded!' : 'Subscription completed successfully!';
            return redirect()->route('customer.growup.lms.subscription')->with('success', $msg);
        }
    }

    public function updateGrowUpSubscription($subscription_id)
    {
        $subscription = SaasSubscription::with('package')->findOrFail($subscription_id);
        $company      = SaasCompany::where('user_id', auth()->user()->id)->where('saas_id', 1)->value('company_slug');

        // live server testing
        $api_response = Http::post("https://lms.creativeitem.com/{$company}/update/user-subscription", [
            'payload' => $subscription,
        ]);

        // localhost testing
        // $api_response = Http::post("http://localhost/saas/academy/{$company}/update/user-subscription", [
        //     'payload' => $subscription,
        // ]);

        if ($api_response->successful()) {
            return response()->json([
                'message' => 'Subscription request sent successfully.',
                'data'    => $api_response->json(),
            ]);
        } else {
            return response()->json([
                'message' => 'Failed to send subscription request.',
                'error'   => $api_response->body(),
            ], $api_response->status());
        }
    }

    public function service_purchase_fail_payment(Request $request, $purchase, $response)
    {
        $purchase = $this->string_to_array($purchase);
        return redirect()->route('services')->with('warning', 'Service Purchase failed.');
    }

    public function string_to_array($user_data)
    {
        $user_data         = explode(' ', $user_data);
        $recover_user_data = array();
        foreach ($user_data as $key => $value) {
            $length                        = strlen($value);
            $position                      = strpos($value, ':');
            $array_key                     = substr($value, 0, $position);
            $array_value                   = substr($value, $position + 1, $length);
            $recover_user_data[$array_key] = $array_value;
        }

        return $recover_user_data;
    }

    public function page($path)
    {
        return view('frontend.growup_lms.' . $path);
    }

}