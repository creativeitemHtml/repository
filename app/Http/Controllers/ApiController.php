<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use App\Mail\VerifyEmailWithPassword;
use App\Models\ElementCategory;
use App\Models\ElementProduct;
use App\Models\Product;
use App\Models\SaasCompany;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\User;use DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function category_wise_elements($slug = "")
    {
        $element_category = ElementCategory::where('slug', $slug)->first();

        $elements = ElementProduct::where('element_category_id', $element_category->id)->orderBy('id', 'desc')->take(16)->get();

        foreach ($elements as $key => $element) {
            $res[$key]['id']                  = $element->id;
            $res[$key]['product_id']          = $element->product_id;
            $res[$key]['element_category_id'] = $element->element_category_id;
            $res[$key]['title']               = $element->title;
            $res[$key]['price_type']          = $element->price_type;
            $res[$key]['price']               = $element->price;
            $res[$key]['like']                = $element->like;
            $res[$key]['thumbnail']           = element_server_url($element->product_id, $element->product_to_elementCategory->slug) . $element->thumbnail;

        }

        $elements = $res;

        if (empty($elements)) {
            return response()->json(['status' => 'failed', 'message' => 'No data found'], 404);
        }

        return new JsonResponse(['status' => 'success', 'data' => $elements], 200);
    }

    public function product_wise_packages($slug = "")
    {
        $product          = Product::where('slug', $slug)->first();
        $service_packages = ServicePackage::where('product_id', $product->id)->get();

        foreach ($service_packages as $key => $service) {
            $res[$key]['id']                = $service->id;
            $res[$key]['name']              = $service->name;
            $active_package['product_id']   = $service->product_id;
            $active_package['product_slug'] = $service->servicePackage_to_product->slug;
            $res[$key]['price']             = $service->price;
            $res[$key]['discounted_price']  = $service->discounted_price != null ? $service->discounted_price : 0;

            $service_features              = json_decode($service->services);
            $res[$key]['service_features'] = $service_features;

            $res[$key]['int_val']              = 'one time';
            $res[$key]['interval_period_text'] = 'You will get the following';

        }

        $service_packages = $res;

        if (empty($service_packages)) {
            return response()->json(['status' => 'failed', 'message' => 'No data found'], 404);
        }

        $services = Service::where('product_id', $service->product_id)->get();

        // $oddServices = $services->filter(function ($value, $key) {
        //     $key = $key +1;
        //     return $key % 2 !== 0;
        // });

        // $evenServices = $services->filter(function ($value, $key) {
        //     $key = $key +1;
        //     return $key % 2 === 0;
        // });

        return new JsonResponse(['status' => 'success', 'data' => $service_packages, 'services' => $services], 200);
    }

    public function saas_company_check($slug = "")
    {
        $company_details = SaasCompany::where('company_slug', $slug)->first();

        $data['id']           = $company_details->id;
        $data['user_id']      = $company_details->user_id;
        $data['saas_id']      = $company_details->saas_id;
        $data['company_name'] = $company_details->company_name;
        $data['company_slug'] = $company_details->company_slug;
        $data['config']       = $company_details->config;
        $data['created_at']   = $company_details->created_at;
        $data['updated_at']   = $company_details->updated_at;

        if (empty($company_details)) {
            return response()->json(['status' => 'failed', 'message' => 'Company not found'], 404);
        }

        return new JsonResponse(['status' => 'success', 'data' => $data], 200);
    }

    public function company_lms_register(Request $request)
    {
        // Check if required fields are present
        if (! empty($request->company_name) && ! empty($request->email) && ! empty($request->password)) {

            // Define a stricter regex pattern for email validation
            $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

            // Use the regex pattern in the validator
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'regex:' . $emailRegex],
            ]);

            if ($validator->fails()) {
                // Return validation errors in JSON format
                return response()->json([
                    'status'  => '500',
                    'message' => 'Check your email address',
                ], 500);
            }

            // Check if the company name already exists
            $company       = $request->company_name;
            $company_check = SaasCompany::where('company_name', $company)->first();

            if (! empty($company_check)) {
                // Return company name already in use message
                return response()->json([
                    'status'  => '500',
                    'message' => 'This company name is already in use. Try a different name',
                ], 500);
            }

            // Check if the email already exists
            $check_email = User::where('email', $request->email)->first();

            if (! empty($check_email)) {
                // Return email already exists message
                return response()->json([
                    'status'  => '500',
                    'message' => 'This email already exists. Please provide a new email address',
                ], 500);
            }

            // Create the user
            $name     = strstr($request->email, '@', true);
            $password = $request->password;

            $user = User::create([
                'name'     => $name,
                'email'    => $request->email,
                'role_id'  => '6',
                'password' => Hash::make($password),
            ]);

            // Generate and insert password reset token
            $pin = rand(10000, 99999);
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $pin,
            ]);

            // Send email verification with the generated password
            Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

            // Now create the company after the user has been created
            $company_data = [
                'admin_name'     => $user->name,
                'admin_email'    => $user->email,
                'admin_password' => $request->password,
                'company_name'   => $company,
                'user_id'        => $user->id,
            ];

            // Convert company data to JSON
            $company_data_json = json_encode($company_data);

            // Instantiate the LmsController to access create_db method
            $lmsController = new LmsController();

            // Call the create_db method
            $data  = $lmsController->create_db($company_data_json);
            $data1 = json_decode($data, true);

            // Check the response from create_db API
            if (is_array($data1) && $data1['status'] == 200) {
                // Return success message
                return response()->json([
                    'status'  => '200',
                    'message' => 'Company and user created successfully',
                ], 200);
            } else {
                // Return failure message if the company creation failed
                return response()->json([
                    'status'  => '500',
                    'message' => 'Failed to create company',
                ], 500);
            }

        } else {
            // Return missing fields message
            return response()->json([
                'status'  => '500',
                'message' => 'Required fields are missing',
            ], 500);
        }
    }

    public function list()
    {
        $element_htmls = ElementProduct::where('element_category_id', 9)->get();

        if (count($element_htmls) > 0) {
            // Build the JSON response structure
            $response = [
                'creativeelement' => [
                    'title'       => 'Creative Elements',
                    'description' => 'No description No description No description No description No description No description No description No description No description',
                    'products'    => [],
                ],
            ];

            // Populate the 'products' array
            foreach ($element_htmls as $elementHtml) {
                $response['creativeelement']['products'][$elementHtml->product_id] = [
                    'framework'     => 'laravel',
                    'demo_url'      => $elementHtml->previewUrl,
                    'title'         => $elementHtml->title,
                    'description'   => $elementHtml->summary,
                    'thumbnail'     => element_server_url($elementHtml->product_id, $elementHtml->product_to_elementCategory->slug) . $elementHtml->thumbnail,
                    'documentation' => 'https://creativeitem.com/docs/elements/what-is-creative-elements-videos',
                    'youtube'       => 'https://www.youtube.com/playlist?list=PLR1GrQCi5Zqvhh7wgtt-ShMAM1RROYJgE',
                    'buy_now'       => url('elements/product/' . $elementHtml->id),
                ];
            }

            // Return the JSON response
            return response()->json($response, 200);
        } else {
            return response()->json([
                'message' => 'No html product found!',
            ], 400);
        }
    }

}
