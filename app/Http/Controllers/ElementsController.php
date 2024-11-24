<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, RolesAndPermission, ElementFileType, ElementCategory, ElementProduct, Package, ElementProductComment, Subscription, Tag, Blog, ElementProductPayment};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmailWithPassword;
use Illuminate\Support\Facades\Validator;
use DB;

class ElementsController extends Controller
{
    public function index()
    {

        $page_data = array();
        $page_data['packages'] = Package::where('visibility', 1)->get();
        $page_data['element_categories'] = ElementCategory::where('parent_id', NULL)->where('status', 1)->orderBy('order', 'asc')->get();
        $page_data['latest_blogs'] = Blog::orderBy('id', 'desc')->take(3)->get();
        $page_data['page_title'] = 'Creativeitem - Elements Home';
        $page_data['seo'] = seo();
        
        return view('frontend.elements.home', $page_data);
    }

    public function elements_package_pricing() 
    {
        $page_data = array();
        $page_data['page_title'] = 'Creativeitem - Subscription packages';
        $page_data['packages'] = Package::where('visibility', 1)->orderBy('order', 'asc')->get();
        $page_data['seo'] = seo();
        return view('frontend.elements.pricing', $page_data);
    }

    public function elements_special_pricing($param1 = "") 
    {
        $strArray = explode('-',$param1);
        $lastElement = end($strArray);

        if(is_numeric($lastElement)) {
            $package = Package::where('id', $lastElement)->where('visibility', 0)->first();
        }

        $seo = seo();

        $res['id'] = $package->id;
        $res['name'] = $package->name;
        $res['price'] = $package->price;
        $res['discounted_price'] = $package->discounted_price != null ? $package->discounted_price : 0;
        $res['interval'] = $package->interval;
        $res['interval_period'] = $package->interval_period;

        $package_features = json_decode($package->services); 
        $res['package_features'] = $package_features;


        if($package->interval == 'monthly'){
            $res['int_val'] = 'month';
    
            if($package->interval_period == 6){
                $interval_period_text = 'Billed 1/2 yearly';
            } else if($package->interval_period == 12){
                $interval_period_text = 'Billed yearly';
            } else {
                $interval_period_text = 'Access for'.' '.$package->interval_period.' '.$interval;
            }

            $res['interval_period_text'] = $interval_period_text;
        } else {
            $res['int_val'] = 'one time';
            $res['interval_period_text'] = 'Lifetime access';
        }

        $package = $res;

        return Inertia::render('Frontend/Elements/PricingSpecial', [
            'package' => $package,
            'seo' => $seo,
        ])->withViewData(['seo' => $seo]);
    }


    public function search_element_products(Request $request, $slug = "", $tag = "")
    {
        $page_data = array();
        $page_data['searched_word'] = "";
        $page_data['selected_sub_category'] = "";
        $page_data['selected_category'] = "";
        $page_data['selected_license'] = "";
        $page_data['selected_file_type'] = "";
        $page_data['selected_tag'] = "";

        $filter = $request->all();

        $query = ElementProduct::query();

        if(!empty($slug) && $slug != 'free-items'){
            if($slug == 'components-package') {
                $slug = 'components';
            }
            $page_data['selected_category_details'] = ElementCategory::where('slug', $slug)->first();

            $query->where('element_category_id', $page_data['selected_category_details']->id);

            $page_data['selected_category'] = $slug;
        } 
        else if(!empty($slug) && $slug == 'free-items')
        {
            $page_data['selected_category_details']['name'] = 'Free Items';
            $page_data['selected_category'] =  'free-items';
            $query->where('price_type', 'free');
            
            $page_data['selected_license'] = 'free';
        }

        if(isset($filter['search']))
        {
            $query->where(function($query) use ($filter){
                $query->where('title', 'LIKE', "%{$filter['search']}%")
                ->orWhere('summary', 'LIKE', "%{$filter['search']}%")
                ->orWhere('description', 'LIKE', "%{$filter['search']}%");
            });
            

            $page_data['searched_word'] = $filter['search'];
        }

        if(!empty($tag)) 
        {
            $page_data['selected_tag_details'] = Tag::where('slug', $tag)->first();
            $query->whereRaw("FIND_IN_SET(?, tag_ids)", [$page_data['selected_tag_details']->id]);

            $page_data['selected_tag'] = $tag;
        }

        if(isset($filter['license']))
        {

            $query->where('price_type', $filter['license']);
            
            $page_data['selected_license'] = $filter['license'];
        }

        if(isset($filter['file_type']))
        {

            $query->where('file_types', 'LIKE', "%{$filter['file_type']}%");
            
            $page_data['selected_file_type'] = $filter['file_type'];
        }

        $element_products = $query->paginate(12);

        if(!empty($slug) && $slug != 'free-items'){
            if($slug == 'figma-components') {
                $slug = 'components';
            }
            $page_data['seo'] = seo($slug, 'slug');
        } else {
            $page_data['seo'] = seo();
        }

        $page_data['element_products'] = $element_products;
        $page_data['element_categories'] = ElementCategory::where('parent_id', NULL)->where('status', 1)->orderBy('order', 'asc')->get();
        $page_data['tags'] = Tag::orderBy('id', 'asc')->get();
        $page_data['file_types'] = ElementFileType::all();

        return view('frontend.elements.filter', $page_data);
    }

    public function element_product_details($title="")
    {
        $page_data = array();

        $strArray = explode('-',$title);
        $lastElement = end($strArray);

        if(is_numeric($lastElement)) {
            $page_data['selected_product'] = ElementProduct::find($lastElement);
        }
        if(empty($page_data['selected_product'])) {
            return view('errors.404');
        }
        $page_data['selected_category'] = ElementCategory::find($page_data['selected_product']->element_category_id);
        $page_data['more_products'] = ElementProduct::where('element_category_id', $page_data['selected_product']->element_category_id)->inRandomOrder()->limit(4)->get();

        $page_data['product_comments'] = ElementProductComment::where('element_product_id', $page_data['selected_product']->id)->orderBy('id', 'desc')->get();

        $page_data['seo'] = seo($page_data['selected_product'], 'element');

        return view('frontend.elements.element_details', $page_data);
    }

    public function element_checkout($id="")
    {
        $page_data = array();

        $today = strtotime('now');

        if(Auth::check()) {
            $current_subscription = Subscription::where('user_id', auth()->user()->id)->latest()->first();

            if(isset($current_subscription) && $current_subscription->expire_date > $today) {

                // return redirect()->route('customer.subscription_details');

                $page_data['current_subscription'] = Subscription::where('user_id', auth()->user()->id)->latest()->first();
                return view('frontend.elements.already_subscribed', $page_data);
            }
        }

        $page_data['page_title'] = 'Creativeitem - Element checkout';
        $page_data['selected_package'] = Package::find($id);
        $page_data['packages'] =  Package::where('visibility', 1)->orderBy('order', 'asc')->get();
        return view('frontend.elements.element_checkout', $page_data);
    }

    public function purchase_subscription(Request $request, $package_id="")
    {

        if(auth()->user()) {
            return redirect()->route('customer.subscription_purchase',
            [
                'package_id' => $package_id,
                'payment_method' => $request->input('payment_method'),
                'requestData' => $request->all()
            ]);
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
                $errorString = implode(' ', $errorMessages);
                
                // Pass the error messages to the session
                return redirect()->back()->with('error', $errorString)->withInput();
            }
            
            if(!empty($request->email)) {
                $name = strstr($request->email, '@', true);

                $check_email = User::where('email', $request->email)->first();

                if(!empty($check_email)){
                    // $user = $check_email;
                    return redirect()->back()->with('info', 'This email already exists. Please login or provide new email address');
                } else {
                    $password = random(8);

                    $user = User::create([
                        'name' => $name,
                        'email' => $request->email,
                        'role_id' => '6',
                        'password' => Hash::make($password)
                    ]);

                    Subscription::create([
                        'user_id' => $user->id,
                        'package_id' => 5,
                        'paid_amount' => 0,
                        'payment_method' => 'None',
                        'transaction_keys' => '',
                        'date_added' => strtotime(date('d-M-Y H:i:s')),
                    ]);

                    $pin = rand(10000, 99999);

                    $check_entry = DB::table('password_resets')->where('email', $request->email)->first();

                    if(empty($check_entry))
                    {
                        DB::table('password_resets')->insert([
                            'email' => $request->email, 
                            'token' => $pin
                        ]);
                    } 
                    else {
                        DB::table('password_resets')->where('email', $request->email)->update([
                            'token' => $pin
                        ]);
                    }

                    Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

                    $token = $user->createToken('myapptoken')->plainTextToken;

                }

                relogin_user($user->id);

                return redirect()->route('customer.subscription_purchase', ['package_id' => $package_id]);

            } else {
                return redirect()->back()->with('error', 'Fill all the required field');
            }
        }
    }

    public function element_checkout_success()
    {
        $page_data = array();
        $page_data['page_title'] = 'Creativeitem - Element checkout';
        return view('frontend.elements.checkout_success', $page_data);
    }

    public function element_buy_now($product_id="")
    {
        $page_data = array();
        $page_data['page_title'] = 'Creativeitem - Element product checkout';
        $page_data['selected_product'] = ElementProduct::find($product_id);
        return view('frontend.elements.product_checkout', $page_data);
    }

    public function purchase_product(Request $request, $product_id="")
    {
        if (auth()->user()) {
            return redirect()->route('customer.single_purchase', [
                'product_id' => $product_id,
                'payment_method' => $request->input('payment_method'),
                'requestData' => $request->all()
            ]);
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
                $errorString = implode(' ', $errorMessages);
                
                // Pass the error messages to the session
                return redirect()->back()->with('error', $errorString)->withInput();
            }

            if(!empty($request->email)) {
                $name = strstr($request->email, '@', true);

                $check_email = User::where('email', $request->email)->first();

                if(!empty($check_email)){
                    // $user = $check_email;
                    return redirect()->back()->with('info', 'This email already exists. Please login or provide new email address');
                } else {
                    $password = random(8);

                    $user = User::create([
                        'name' => $name,
                        'email' => $request->email,
                        'role_id' => '6',
                        'password' => Hash::make($password)
                    ]);

                    Subscription::create([
                        'user_id' => $user->id,
                        'package_id' => 5,
                        'paid_amount' => 0,
                        'payment_method' => 'None',
                        'transaction_keys' => '',
                        'date_added' => strtotime(date('d-M-Y H:i:s')),
                    ]);

                    $pin = rand(100000, 999999);

                    DB::table('password_resets')
                        ->insert(
                            [
                                'email' => $request->email, 
                                'token' => $pin
                            ]
                        );

                    Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

                    // $token = $user->createToken('myapptoken')->plainTextToken;
                }

                relogin_user($user->id);

                return redirect()->route('customer.single_purchase', [
                    'payment_method' => $request->input('payment_method'),
                    'product_id' => $product_id
                ]);;

            } else {
                return redirect()->back()->with('error', 'Fill all the required field');
            }
        }
    }

    public function handleLike($product_id="")
    {
        if (Auth::check() && auth()->user()->role_id == 6) {
            if (isset($product_id)) {

                $product_details = ElementProduct::find($product_id); 

                $likes = array();

                if ($product_details->like == "") {
                    array_push($likes, auth()->user()->id);
                    $response['is_liked'] = 1;
                    $response['message'] = 'You liked the product';
                } else {
                    $likes = json_decode($product_details->like);
                    if (in_array(auth()->user()->id, $likes)) {
                        $container = array();
                        foreach ($likes as $key) {
                            if ($key != auth()->user()->id) {
                                array_push($container, $key);
                            }
                        }
                        $likes = $container;
                        $response['is_liked'] = 0;
                        $response['message'] = 'You unliked the product';
                    } else {
                        array_push($likes, auth()->user()->id);
                        $response['is_liked'] = 1;
                        $response['message'] = 'You liked the product';
                    }
                }

                $response['total_likes'] = count($likes); 

                $product_details->like = json_encode($likes);
                $product_details->save();

	            $response['status'] = 200;

                return $response;
            }
        } elseif(Auth::check()) {
            $response['message'] = 'You are not authorized!';
	        $response['status'] = 403;
            return $response;
        } else {
            $response['message'] = 'You are not logged in!';
	        $response['status'] = 403;
            return $response;;
        }
    }

    public function handleWishList($course_id="")
    {
        if (Auth::check() && auth()->user()->role_id == 6) {
            if (isset($course_id)) {

                $wishlists = array();

                if (auth()->user()->wishlists == "") {
                    array_push($wishlists, $course_id);
                    $response['message'] = 'Product added to wishlist';
                } else {
                    $wishlists = json_decode(auth()->user()->wishlists);
                    if (in_array($course_id, $wishlists)) {
                        $container = array();
                        foreach ($wishlists as $key) {
                            if ($key != $course_id) {
                                array_push($container, $key);
                            }
                        }
                        $wishlists = $container;
                        $response['message'] = 'Product removed from wishlist';
                    } else {
                        array_push($wishlists, $course_id);
                        $response['message'] = 'Product added to wishlist';
                    }
                }

                $user = User::find(auth()->user()->id);
                $user->wishlists = json_encode($wishlists);
                $user->save();

                $response['status'] = 200;

                return $response;
            }
        } elseif(Auth::check()) {
            $response['message'] = 'You are not authorized!';
	        $response['status'] = 403;
            return $response;
        } else {
            $response['message'] = 'You are not logged in!';
	        $response['status'] = 403;
            return $response;;
        }
    }
}
