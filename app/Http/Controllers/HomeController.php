<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ProjectReport;
use App\Mail\VerifyEmailWithPassword;
use App\Models\Article;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Documentation;
use App\Models\ElementCategory;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\Subscription;
use App\Models\Topic;
use App\Models\User;use DB;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $ip = $request->ip(); // remove the command when it's have in a domain
        // $ip       = '27.147.191.220';
        // $location = Location::get($ip);

        // if (! empty($location->countryName)) {
        //     Session::put('location', $location->countryName);
        // }

        $page_data['seo']                = seo();
        $page_data['page_title']         = 'Home';
        $page_data['element_categories'] = ElementCategory::where('parent_id', null)->where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.home', $page_data);
    }

    public function web_applications()
    {
        $products = Product::where('visibility', 1)->where('slug', '!=', 'elements')->orderBy('order', 'asc')->get();

        $page_data['products'] = $products;
        $page_data['seo']      = seo();
        return view('frontend.web_applications', $page_data);

    }

    public function product_academy()
    {
        return view('frontend.product_academy');
    }

    public function blog(Request $request, $type = "", $keyword = "")
    {
        $page_data['searched_word']          = '';
        $page_data['selected_blog_category'] = '';
        $page_data['selected_category_slug'] = '';
        $page_data['blog_categories']        = BlogCategory::all();

        $query = Blog::query();

        if (! empty($type)) {
            if ($type == 'category') {
                $selected_blog_category = BlogCategory::where('slug', $keyword)->first();
                $query->where('blog_category_id', $selected_blog_category->id);

                $page_data['selected_category_slug'] = $keyword;
                $page_data['selected_blog_category'] = $selected_blog_category;
            } else if ($type == 'tag') {
                $query->where('tags', 'LIKE', "%{$keyword}%");
                $page_data['searched_word'] = $keyword;
            }

            $page_data['related_blogs'] = $query->where('visibility', 1)->orderBy('id', 'asc')->paginate(9);

            return view('frontend.blog_filter', $page_data);
        } else if (! empty($request->all())) {
            $query->where('title', 'LIKE', "%{$request->search}%")
                ->orWhere('tags', 'LIKE', "%{$request->search}%")
                ->orWhere('excerpt', 'LIKE', "%{$request->search}%");

            $page_data['searched_word'] = $request->search;
            $page_data['related_blogs'] = $query->where('visibility', 1)->orderBy('id', 'asc')->paginate(9);

            return view('frontend.blog_filter', $page_data);
        }

        $page_data['latest_blog']    = Blog::where('visibility', 1)->latest()->first();
        $page_data['latest_three']   = Blog::where('visibility', 1)->orderBy('id', 'desc')->skip(1)->take(3)->get();
        $page_data['featured_blogs'] = Blog::where('visibility', 1)->where('is_featured', 1)->orderBy('id', 'desc')->paginate(9);
        $page_data['seo']            = seo();

        return view('frontend.blog', $page_data);
    }

    public function blog_details($slug = "")
    {
        $blog_details = Blog::where('slug', $slug)->first();
        $htmlContent  = $blog_details->details;

        // Parse HTML content to extract h2 tags
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($htmlContent);
        libxml_clear_errors();

        $h2Tags   = [];
        $elements = $dom->getElementsByTagName('h2');
        foreach ($elements as $element) {
            $h2Tags[] = $element->nodeValue;
        }

        $page_data['keywords']               = explode(', ', $blog_details->tags);
        $page_data['related_blogs']          = Blog::where('blog_category_id', $blog_details->blog_category_id)->get();
        $page_data['selected_blog_category'] = BlogCategory::find($blog_details->blog_category_id);
        // $page_type = 'blog_detail';

        $page_data['blog_details'] = $blog_details;
        $page_data['h2Tags']       = $h2Tags;
        $page_data['seo']          = seo($blog_details, 'blog');

        return view('frontend.blog_details', $page_data);
    }

    public function docs()
    {
        $page_data               = array();
        $page_data['page_title'] = 'Creativeitem - Documentation';
        $page_data['products']   = Product::where('visibility', 1)->orderBy('order', 'asc')->get();
        $page_data['seo']        = seo();
        return view('frontend.doc_products', $page_data);
    }

    public function documentation_details($product_slug = "", $article_slug = "")
    {
        $page_data = array();

        $page_data['product_details'] = Product::where('slug', $product_slug)->first();

        if (empty($article_slug)) {
            $selected_article = get_fist_article_for_an_applicaiton($page_data['product_details'], true);
            if (count($selected_article) == 0) {
                return redirect()->route('docs');
            }
            return redirect()->route('documentation_details', ['product_slug' => $product_slug, 'article_slug' => $selected_article[0]->slug]);
        }

        $selected_article = Article::where('slug', $article_slug)->where('product_id', $page_data['product_details']->id)->first();

        $page_data['article_details']       = $selected_article;
        $page_data['documentation_details'] = Documentation::where('article_id', $selected_article->id)->first();

        $page_data['product_slug'] = $product_slug;
        $page_data['article_slug'] = $article_slug;
        $page_data['topics']       = Topic::where('product_id', $page_data['product_details']->id)->where('visibility', 1)->orderBy('order', 'asc')->get();
        $page_data['page_title']   = 'Documentation - ' . $page_data['product_details']->name;
        $page_data['meta_keyword'] = 'docs, documentation,';
        return view('frontend.documentation_details', $page_data);
    }

    public function services()
    {
        $page_data             = array();
        $uniqueProductIds      = ServicePackage::distinct()->pluck('product_id');
        $page_data['products'] = Product::whereIn('id', $uniqueProductIds)->get();
        $page_data['seo']      = seo();
        return view('frontend.service', $page_data);
    }

    public function checkout_custom_service(Request $request)
    {
        $page_data = array();

        // Retrieve the 'services' parameter from the request, which is a comma-separated string of IDs
        $serviceIds = $request->input('services');

        // Convert the comma-separated string into an array of IDs
        $serviceIdsArray = explode(',', $serviceIds);

        // Query the services table to get the services with the given IDs
        $page_data['services'] = Service::whereIn('id', $serviceIdsArray)->get();

        return view('frontend.service_custom_checkout_modal', $page_data);
    }

    public function purchase_custom_service(Request $request)
    {

        // print_r($request->selectedServices);
        // die();

        if (auth()->user()) {
            return redirect()->route('customer.service_custom_purchase', ['selected_services' => $request->selected_services]);
        } else {
            $validated = $request->validate([
                'email' => 'required|email',
            ]);

            if (! empty($request->email)) {
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

                return redirect()->route('customer.service_custom_purchase', ['selected_services' => $request->selectedServices]);

            } else {
                return redirect()->back()->with('error', 'Fill all the required field');
            }
        }
    }

    public function hire_us()
    {
        $page_data        = array();
        $page_data['seo'] = seo();
        return view('frontend.hire_us', $page_data);
    }

    public function service_buy_now($service_id = "")
    {
        $page_data            = array();
        $page_data['feature'] = ServicePackage::find($service_id);
        return view('frontend.service_checkout_modal', $page_data);
    }

    public function service_help($service_id = "")
    {
        $page_data            = array();
        $page_data['feature'] = ServicePackage::find($service_id);

        $services = json_decode($page_data['feature']->services, true);

        // Add index to each service
        $servicesWithIndex = array_map(function ($service, $index) {
            return ['index' => $index, 'service' => $service];
        }, $services, array_keys($services));

        // Filter services
        $evenServices = array_filter($servicesWithIndex, function ($serviceWithIndex) {
            return $serviceWithIndex['index'] % 2 === 1;
        });

        $oddServices = array_filter($servicesWithIndex, function ($serviceWithIndex) {
            return $serviceWithIndex['index'] % 2 === 0;
        });

        // Extract the service objects from the filtered results
        $page_data['evenServices'] = array_map(function ($serviceWithIndex) {
            return $serviceWithIndex['service'];
        }, $evenServices);

        $page_data['oddServices'] = array_map(function ($serviceWithIndex) {
            return $serviceWithIndex['service'];
        }, $oddServices);

        return view('frontend.service_package_help_modal', $page_data);
    }

    public function service_custom_help($product_id = "")
    {
        $page_data = array();
        $services  = Service::where('product_id', $product_id)->get();

        // Separate services into even and odd based on their IDs
        $page_data['evenServices'] = $services->filter(function ($service) {
            return $service->id % 2 == 0;
        });

        $page_data['oddServices'] = $services->filter(function ($service) {
            return $service->id % 2 != 0;
        });

        return view('frontend.service_custom_help_modal', $page_data);
    }

    public function purchase_service_package(Request $request, $service_id = "")
    {
        if (auth()->user()) {
            return redirect()->route('customer.service_purchase', ['service_id' => $service_id]);
        } else {
            $validated = $request->validate([
                'email' => 'required|email',
            ]);

            if (! empty($request->email)) {
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

                return redirect()->route('customer.service_purchase', ['service_id' => $service_id]);

            } else {
                return redirect()->back()->with('error', 'Fill all the required field');
            }
        }
    }

    public function terms_and_condition()
    {
        $page_data['seo'] = seo();
        return view('frontend.terms_and_condition', $page_data);

    }

    public function privacy_policy()
    {
        $page_data['seo'] = seo();
        return view('frontend.privacy_policy', $page_data);
    }

    public function refund_policy()
    {
        $page_data['seo'] = seo();
        return view('frontend.refund_policy', $page_data);
    }

    public function support_policy()
    {
        $page_data['seo'] = seo();
        return view('frontend.support_policy', $page_data);
    }

    public function project_submit(Request $request)
    {
        // $isDuplicate = User::where('email', $request->email)->exists();
        // print_r($isDuplicate);
        // die();

        $page_data        = array();
        $attachments_name = array();
        $attachements     = array();

        $name = strstr($request->email, '@', true);

        $check_email = User::where('email', $request->email)->first();

        if (Auth::check()) {

            $data = $request->all();

            $page_data['title']               = $data['title'];
            $page_data['description']         = $data['description'];
            $page_data['budget_estimation']   = $data['budget_estimation'];
            $page_data['timeline']            = $data['timeline'];
            $page_data['user_id']             = auth()->user()->id;
            $page_data['status']              = 'pending';
            $page_data['completion_progress'] = 0;
            $page_data['paid_amount']         = 0;

            // print_r($data['attachment']);
            // die();

            if (! empty($data['attachment'])) {
                array_push($attachments_name, $data['attachment']->getClientOriginalName());
                $page_data['attachment_name'] = json_encode($attachments_name);

                if (! File::exists(public_path('uploads/projects'))) {
                    File::makeDirectory(public_path('uploads/projects'));
                }

                $attachment = time() . '-' . random(2) . '.' . $data['attachment']->extension();

                $data['attachment']->move(public_path('uploads/projects/'), $attachment);

                array_push($attachements, $attachment);
                $page_data['attachment'] = json_encode($attachements);
            } else {
                $page_data['attachment_name'] = json_encode(array());
                $page_data['attachment']      = json_encode(array());
            }

            $project_details = Project::create($page_data);

            $user = User::find($project_details->user_id);

            $route = route('customer.projects');
            Mail::to($request->email)->send(new ProjectReport($project_details, $user, $route));

            $route = route('superadmin.projects');
            Mail::to('project@creativeitem.com')->send(new ProjectReport($project_details, $user, $route));

            return redirect()->route('customer.projects')->with('message', 'Project created successfully');
        } else if (! empty($check_email)) {
            // $user = $check_email;
            return redirect()->back()->with('info', 'This email already exists. Please login or provide new email address');
        } else {
            $password = random(8);

            $user = User::create([
                'name'     => $name,
                'email'    => $request->email,
                'role_id'  => '6',
                'password' => Hash::make($password),
            ]);

            Subscription::create([
                'user_id'          => $user->id,
                'package_id'       => 5,
                'paid_amount'      => 0,
                'payment_method'   => 'None',
                'transaction_keys' => '',
                'date_added'       => strtotime(date('d-M-Y H:i:s')),
            ]);

            $pin = rand(10000, 99999);

            $check_entry = DB::table('password_resets')->where('email', $request->email)->first();

            if (empty($check_entry)) {
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $pin,
                ]);
            } else {
                DB::table('password_resets')->where('email', $request->email)->update([
                    'token' => $pin,
                ]);
            }

            Mail::to($request->email)->send(new VerifyEmailWithPassword($pin, $user, $password));

            relogin_user($user->id);

            $data = $request->all();

            $page_data['title']               = $data['title'];
            $page_data['description']         = $data['description'];
            $page_data['budget_estimation']   = $data['budget_estimation'];
            $page_data['timeline']            = $data['timeline'];
            $page_data['user_id']             = auth()->user()->id;
            $page_data['status']              = 'pending';
            $page_data['completion_progress'] = 0;
            $page_data['paid_amount']         = 0;

            if (! empty($data['attachment'])) {
                array_push($attachments_name, $data['attachment']->getClientOriginalName());
                $page_data['attachment_name'] = json_encode($attachments_name);

                if (! File::exists(public_path('uploads/projects'))) {
                    File::makeDirectory(public_path('uploads/projects'));
                }

                $attachment = time() . '-' . random(2) . '.' . $data['attachment']->extension();

                $data['attachment']->move(public_path('uploads/projects/'), $attachment);

                array_push($attachements, $attachment);
                $page_data['attachment'] = json_encode($attachements);
            } else {
                $page_data['attachment_name'] = json_encode(array());
                $page_data['attachment']      = json_encode(array());
            }

            $project_details = Project::create($page_data);

            $route = route('customer.projects');
            Mail::to($request->email)->send(new ProjectReport($project_details, $user, $route));

            $route = route('superadmin.projects');
            Mail::to('project@creativeitem.com')->send(new ProjectReport($project_details, $user, $route));

            return redirect()->route('customer.projects')->with('message', 'Project created successfully');
        }

    }
    public function session_language(Request $request)
    {
        $data = $request->language;
        Session::put('language', $data);
        return redirect()->back()->with('message', 'You have successfully transleted language.');
    }

    public function session_user_currency_store(Request $request)
    {
        $data = $request->session_currency;
        Session::put('session_currency', $data);
        if (isset(auth()->user()->id)) {
            $page_data['currency_code'] = strtoupper($data);

            User::where('id', auth()->user()->id)->update($page_data);
        }
        return redirect()->back()->with('message', 'You have successfully changed currency.');
    }

}
