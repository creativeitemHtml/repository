<?php
use App\Models\Article;
use App\Models\ElementProduct;
use App\Models\SaasSubscription;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

//All common helper functions

if (! function_exists('location_set')) {
    function location_set()
    {
        // $ip = $request->ip(); // remove the command when it's have in a domain
        $ip       = '27.147.191.220';
        $location = Location::get($ip);

        if (! empty($location->countryName)) {
            Session::put('location', $location->countryName);
        }

        if (Auth::check()) {
            $code = auth()->user()->currency_code;
            if (isset($code)) {
                Session::put('session_currency', $code);
            } else {
                if (session('location') == "Bangladesh") {
                    Session::put('session_currency', 'bdt');
                } else {
                    Session::put('session_currency', 'usd');
                }

                $page_data['currency_code'] = strtoupper(session('session_currency'));

                User::where('id', auth()->user()->id)->update($page_data);
            }
        } else {
            if (empty(session('session_currency'))) {
                if (session('location') == "Bangladesh") {
                    Session::put('session_currency', 'bdt');
                } else {
                    Session::put('session_currency', 'usd');
                }
            }
        }
    }
}

//User image
if (! function_exists('get_user_image')) {
    function get_user_image($file_name_or_user_id = '')
    {
        if (is_numeric($file_name_or_user_id)) {
            $user_id   = $file_name_or_user_id;
            $file_name = "";
        } else {
            $user_id   = "";
            $file_name = $file_name_or_user_id;
        }

        if ($user_id > 0) {
            $user_id   = $file_name_or_user_id;
            $file_name = DB::table('users')->where('id', $user_id)->value('thumbnail');

            if (isset($file_name) && File::exists('public/uploads/thumbnails/users/' . $file_name)) {
                return asset('uploads/thumbnails/users/' . $file_name);
            } else {
                return asset('uploads/thumbnails/users/placeholder.png');
            }
        }
    }
}

// Global Settings
if (! function_exists('get_settings')) {
    function get_settings($key = '', $type = '')
    {
        $settings = DB::table('settings')->where('key', $key)->value('value');

        if ($type == 'json') {
            $settings = json_decode($settings);
        }

        return $settings;
    }
}

if (! function_exists('phrase')) {
    function phrase($string = '')
    {
        return $string;
    }
}

if (! function_exists('get_all_language')) {
    function get_all_language()
    {
        return DB::table('language')->select('name')->distinct()->get();
    }
}

if (! function_exists('get_phrase')) {
    function get_phrase($phrase = '')
    {

        if (isset(auth()->user()->id)) {
            $active_language = User::where('id', auth()->user()->id)->value('language');
        } elseif (! empty(session('language'))) {
            $active_language = session('language');
        } elseif (session('location') == "Bangladesh") {
            $active_language = 'Bangla';
        } else {
            $active_language = get_settings('language');
        }

        $query = DB::table('language')->where('name', $active_language)->where('phrase', $phrase);
        if ($query->get()->count() == 0) {
            $translated = $phrase;

            $all_language = get_all_language();

            if ($all_language->count() > 0) {
                foreach ($all_language as $language) {

                    if (DB::table('language')->where('name', $language->name)->where('phrase', $phrase)->get()->count() == 0) {
                        DB::table('language')->insert(array('name' => $language->name, 'phrase' => $phrase, 'translated' => $translated));
                    }
                }
            } else {
                DB::table('language')->insert(array('name' => 'english', 'phrase' => $phrase, 'translated' => $translated));
            }
            return $translated;
        }
        return $query->value('translated');
    }
}

if (! function_exists('relogin_user')) {
    function relogin_user($user_id = '')
    {
        $user = User::find($user_id);
        Auth::login($user);

    }
}

// RANDOM NUMBER GENERATOR FOR ELSEWHERE
if (! function_exists('random')) {
    function random($length_of_string, $lowercase = false)
    {
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        // Shufle the $str_result and returns substring
        // of specified length
        $randVal = substr(str_shuffle($str_result), 0, $length_of_string);
        if ($lowercase) {
            $randVal = strtolower($randVal);
        }
        return $randVal;
    }
}

if (! function_exists('slugify')) {
    function slugify($string)
    {
        $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
        $string = trim($string, '-');
        return strtolower($string);
    }
}

if (! function_exists('company_slugify')) {
    function company_slugify($string)
    {
        $string = preg_replace('~[^\\pL\d]+~u', '_', $string);
        $string = trim($string, '_');
        return strtolower($string);
    }
}

if (! function_exists('get_fist_article_for_an_applicaiton')) {
    function get_fist_article_for_an_applicaiton($product_details = "", $only_public = false)
    {
        $first_topic = $product_details->product_to_topic->first();

        $query = array();

        if ($only_public) {
            $query = Article::where('visibility', 1)->where('topic_id', $first_topic->id)->orderBy("order", "asc")->get();
            return $query;
        }
        $query = Article::where('topic_id', $first_topic->id)->orderBy("order", "asc")->get();
        return $query;
    }
}

// This function returns the image paths from documentation which is being written on texteditor
if (! function_exists('reformat_image_path')) {
    function reformat_image_path($html, $is_blog = false, $export = false)
    {
        $image_title;
        preg_match_all('@img src="([^"]+)"@', $html, $match);
        $sources = array_pop($match);
        foreach ($sources as $key => $source) {
            $exploded_source = explode('/', $source);
            if ($is_blog) {
                $blog_title        = $exploded_source[(count($exploded_source) - 2)];
                $image_name        = $exploded_source[(count($exploded_source) - 1)];
                $image_actual_path = url('/') . '/public/uploads/blog/' . $blog_title . '/' . $image_name;
            } elseif ($export) {

                $product           = $exploded_source[(count($exploded_source) - 3)];
                $topic             = $exploded_source[(count($exploded_source) - 2)];
                $image_name        = $exploded_source[(count($exploded_source) - 1)];
                $image_actual_path = url('/') . '/public/uploads/documentation/' . $product . '/' . $topic . '/' . $image_name;
                $type              = pathinfo($image_actual_path, PATHINFO_EXTENSION);
                $data              = file_get_contents($image_actual_path);
                $base64            = 'data:image/' . $type . ';base64,' . base64_encode($data);
                $image_actual_path = $base64;

            } else {
                $product           = $exploded_source[(count($exploded_source) - 3)];
                $topic             = $exploded_source[(count($exploded_source) - 2)];
                $image_name        = $exploded_source[(count($exploded_source) - 1)];
                $image_actual_path = url('/') . '/public/uploads/documentation/' . $product . '/' . $topic . '/' . $image_name;
            }

            $path_parts  = pathinfo($image_actual_path);
            $image_title = ucwords(str_replace("-", " ", str_replace("_", " ", $path_parts['filename'])));

            $image_actual_path .= '" title="' . $image_title . '" alt="' . $image_title . '" style="max-width : 100%;"';

            if (strpos($html, $source) !== false) {
                $html = str_replace($source, $image_actual_path, $html);
            }
        }

        return $html;
    }
}

if (! function_exists('currency')) {
    function currency($price = "")
    {
        // location_set();

        if (isset(auth()->user()->id)) {
            $code = User::where('id', auth()->user()->id)->value('currency_code');
        } elseif (! empty(session('session_currency'))) {
            $code = strtoupper(session('session_currency'));
        } elseif (session('location') == "Bangladesh") {
            $code = 'BDT';
        } else {
            $code = DB::table('settings')->where('key', 'system_currency')->value('value');
        }

        // $currency_position = DB::table('currency')->where('code', $code)->value('position');

        // $symbol = DB::table('currency')->where('code', $code)->value('symbol');

        if (! empty($price)) {
            return $code . ' ' . $price;
        } else {
            return $code . ' ';
        }
        // if($currency_position == 'left'){
        //     return $symbol.''.$price;
        // } else {
        //     return $price.''.$symbol;
        // }
    }
}

if (! function_exists('ellipsis')) {
    // Checks if a video is youtube, vimeo or any other
    function ellipsis($long_string, $max_character = 30)
    {
        $short_string = strlen($long_string) > $max_character ? substr($long_string, 0, $max_character) . "..." : $long_string;
        return $short_string;
    }
}

if (! function_exists('get_element_content')) {
    function get_element_content($product_id)
    {

        $client   = new Client();
        $response = $client->get('https://elementsfiles.creativeitem.com/api/element_product/' . $product_id, [
            'debug'          => fopen('php://stderr', 'w'), // remove after test
            'timeout' => 100,
            'decode_content' => false,
            'headers'        => [
                'Content-Type' => 'application/json',
            ],
        ]);

        $bodyResponse = $response->getBody();
        $result       = $bodyResponse->getContents();
        $result       = json_decode($result);

        return $result;
    }
}

if (! function_exists('element_server_url')) {
    function element_server_url($product_id = "", $slug = "")
    {
        $product_details = ElementProduct::where('product_id', $product_id)->first();
        if (! empty($slug)) {
            if ($slug == 'video') {
                $server_url = "https://elementsfiles.creativeitem.com/files/video-template/" . $product_id . "/";
            } elseif ($slug == '3d') {
                $server_url = "https://elementsfiles.creativeitem.com/files/3d/" . $product_id . "/";
            } elseif ($slug == 'graphics') {
                $server_url = "https://elementsfiles.creativeitem.com/files/graphics-template/" . $product_details->product_to_elementSubCategory->slug . "/" . $product_id . "/";
            } elseif ($slug == 'components') {
                $server_url = "https://elementsfiles.creativeitem.com/files/components/" . $product_id . "/";
            } elseif ($slug == 'ui-kits') {
                $server_url = "https://elementsfiles.creativeitem.com/files/ui-kits/" . $product_id . "/";
            } elseif ($slug == 'html') {
                $server_url = "https://elementsfiles.creativeitem.com/files/html-template/" . $product_id . "/";
            } elseif ($slug == 'laravel-themes') {
                $server_url = "https://elementsfiles.creativeitem.com/files/laravel-themes/" . $product_id . "/";
            } elseif ($slug == 'presentation') {
                $server_url = "https://elementsfiles.creativeitem.com/files/presentation/" . $product_id . "/";
            } else {
                $server_url = "https://elementsfiles.creativeitem.com/files/" . $product_id . "/";
            }
        } else {
            $server_url = "https://elementsfiles.creativeitem.com/files/" . $product_id . "/";
            // $server_url = "http://elementsfiles.creativeitem.com/files/".$product_id."/";
        }

        return $server_url;
    }
}

// if (!function_exists('element_server_url')) {
//     function element_server_url($product_id="", $slug="")
//     {
//         $product_details = ElementProduct::where('product_id', $product_id)->first();
//         if(!empty($slug)) {
//             if($slug == 'video') {
//                 $server_url = "http://localhost/creativeitem-server/files/video-template/".$product_id."/";
//             } elseif($slug == '3d') {
//                 $server_url = "http://localhost/creativeitem-server/files/3d/".$product_id."/";
//             } elseif($slug == 'graphics') {
//                 $server_url = "http://localhost/creativeitem-server/files/graphics/".$product_details->product_to_elementSubCategory->slug."/".$product_id."/";
//             } elseif($slug == 'components') {
//                 $server_url = "http://localhost/creativeitem-server/files/components/".$product_id."/";
//             } else {
//                 $server_url = "http://localhost/creativeitem-server/files/".$product_id."/";
//             }
//         } else {
//             $server_url = "http://localhost/creativeitem-server/files/".$product_id."/";
//             // $server_url = "http://elementsfiles.creativeitem.com/files/".$product_id."/";
//         }

//         return $server_url;
//     }
// }

if (! function_exists('date_formatter')) {
    function date_formatter($strtotime = "", $format = "")
    {
        if ($format == "") {
            return date('d', $strtotime) . ' ' . date('M', $strtotime) . ' ' . date('Y', $strtotime);
        }

        if ($format == 1) {
            return date('D', $strtotime) . ', ' . date('d', $strtotime) . ' ' . date('M', $strtotime) . ' ' . date('Y', $strtotime);
        }

        if ($format == 2) {
            $time_difference = time() - $strtotime;
            if ($time_difference < 1) {return 'less than 1 second ago';}
            //864000 = 10 days
            if ($time_difference > 864000) {return date_formatter($strtotime, 1);}

            $condition = array(
                12 * 30 * 24 * 60 * 60 => 'year',
                30 * 24 * 60 * 60      => 'month',
                24 * 60 * 60           => 'day',
                60 * 60                => 'hour',
                60                     => 'minute',
                1                      => 'second',
            );

            foreach ($condition as $secs => $str) {
                $d = $time_difference / $secs;
                if ($d >= 1) {
                    $t = round($d);
                    return $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
                }
            }
        }
    }
}

// Human readable time
if (! function_exists('time_formatter')) {
    function time_formatter($duration, $format = "")
    {
        if ($duration && $format == "") {
            $duration_array = explode(':', $duration);
            $hour           = $duration_array[0];
            $minute         = $duration_array[1];
            $second         = $duration_array[2];
            if ($hour > 0) {
                $duration = $hour . ' ' . 'hr' . ' ' . $minute . ' ' . 'min';
            } elseif ($minute > 0) {
                if ($second > 0) {
                    $duration = ($minute + 1) . ' ' . 'min';
                } else {
                    $duration = $minute . ' ' . 'min';
                }
            } elseif ($second > 0) {
                $duration = $second . ' ' . 'sec';
            } else {
                $duration = '00:00';
            }
        } elseif ($seconds && $format == 'seconds_to_format') {
            $hours = floor($seconds / 3600);
            $mins  = floor($seconds / 60 % 60);
            $secs  = floor($seconds % 60);

            $duration = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);
        } elseif ($seconds && $format == 'format_to_seconds') {

        }
        return $duration;
    }
}

if (! function_exists('get_screenshots')) {
    function get_screenshots($slug, $product_id)
    {

        $client   = new Client();
        $response = $client->get('https://elementsfiles.creativeitem.com/api/files/' . $slug . '/' . $product_id, [
            'debug'          => fopen('php://stderr', 'w'), // remove after test
            'timeout' => 100,
            'decode_content' => false,
            'headers'        => [
                'Content-Type' => 'application/json',
            ],
        ]);

        $bodyResponse = $response->getBody();
        $result       = $bodyResponse->getContents();
        $result       = json_decode($result);

        $preview_images = array();

        foreach ($result as $image) {
            $src = array(
                'src' => element_server_url($product_id, $slug) . 'screenshots/' . $image,
            );

            array_push($preview_images, $src);
        }

        $preview_images = json_encode($preview_images);

        return $preview_images;
    }
}

if (! function_exists('get_seo_column_name')) {
    function get_seo_column_name($columnName)
    {
        $columnName = str_replace("_", " ", $columnName);
        $columnName = ucwords($columnName);
        return $columnName;
    }
}

if (! function_exists('img_to_text')) {
    function img_to_text($image_name)
    {
        $image_name = substr($image_name, 0);
        $image_name = str_replace("-", " ", $image_name);
        $image_name = ucwords($image_name);
        return $image_name;
    }
}

if (! function_exists('seo')) {
    function seo($data = "", $folder = '')
    {
        $seo = array();

        // Setting default value
        $seo['meta_title']       = '';
        $seo['meta_description'] = '';
        $seo['meta_keywords']    = '';
        $seo['meta_robot']       = '';
        $seo['canonical_url']    = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $seo['custom_url']       = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $seo['og_title']         = '';
        $seo['og_description']   = '';
        $seo['og_image']         = '';
        $seo['json_ld']          = '';

        //print SEO field values from database 'seo_field table', based on current route
        $current_route = Route::currentRouteName();

        if ($current_route == 'home' ||
            $current_route == 'web_applications' ||
            $current_route == 'elements' ||
            $current_route == 'docs' ||
            $current_route == 'blog' ||
            $current_route == 'services' ||
            $current_route == 'elements_package_pricing' ||
            $current_route == 'terms_and_condition' ||
            $current_route == 'privacy_policy' ||
            $current_route == 'refund_policy' ||
            $current_route == 'support_policy' ||
            $current_route == 'login' ||
            $current_route == 'register') {
            $seo['meta_title']       = App\Models\SeoField::firstWhere('route', $current_route)->meta_title ?? '';
            $seo['meta_description'] = App\Models\SeoField::firstWhere('route', $current_route)->meta_description ?? '';
            $seo['meta_keywords']    = App\Models\SeoField::firstWhere('route', $current_route)->meta_keywords ?? '';
            $seo['canonical_url']    = App\Models\SeoField::firstWhere('route', $current_route)->canonical_url ?? '';
            $seo['custom_url']       = App\Models\SeoField::firstWhere('route', $current_route)->custom_url ?? '';
            $seo['meta_robot']       = App\Models\SeoField::firstWhere('route', $current_route)->meta_robot ?? '';
            $seo['og_title']         = App\Models\SeoField::firstWhere('route', $current_route)->og_title ?? '';
            $seo['og_description']   = App\Models\SeoField::firstWhere('route', $current_route)->og_description ?? '';
            $seo['og_image']         = url('public/uploads/og-image/' . App\Models\SeoField::firstWhere('route', $current_route)->og_image ?? '');
            $seo['json_ld']          = App\Models\SeoField::firstWhere('route', $current_route)->json_ld ?? '';
        } else if ($folder == 'blog') {
            $seo['meta_title']       = $data->meta_title;
            $seo['meta_description'] = $data->meta_description;
            $seo['meta_keywords']    = $data->meta_keywords;
            $seo['canonical_url']    = $data->canonical_url;
            $seo['custom_url']       = $data->custom_url;
            $seo['meta_robot']       = $data->meta_robot;
            $seo['og_title']         = $data->og_title;
            $seo['og_description']   = $data->og_description;
            $seo['og_image']         = url('public/uploads/' . $folder . '/og_image/' . $data->og_image);
            $seo['json_ld']          = $data->json_ld;
        } else if ($folder == 'element') {

            $seo['meta_title']       = $data->title;
            $seo['meta_description'] = $data->summary;
            $seo['meta_keywords']    = $data->file_types;
            $seo['og_title']         = $data->title;
            $seo['og_description']   = $data->summary;
            $seo['og_image']         = element_server_url($data->product_id, $data->product_to_elementCategory->slug) . $data->thumbnail;
        } else if (($current_route == 'search_element_products' || $current_route == 'search_element_products_by_tag') && $folder == 'slug') {

            $current_route = $current_route . '_' . $data;

            $seo['meta_title']       = App\Models\SeoField::firstWhere('route', $current_route)->meta_title ?? '';
            $seo['meta_description'] = App\Models\SeoField::firstWhere('route', $current_route)->meta_description ?? '';
            $seo['meta_keywords']    = App\Models\SeoField::firstWhere('route', $current_route)->meta_keywords ?? '';
            $seo['canonical_url']    = App\Models\SeoField::firstWhere('route', $current_route)->canonical_url ?? '';
            $seo['custom_url']       = App\Models\SeoField::firstWhere('route', $current_route)->custom_url ?? '';
            $seo['meta_robot']       = App\Models\SeoField::firstWhere('route', $current_route)->meta_robot ?? '';
            $seo['og_title']         = App\Models\SeoField::firstWhere('route', $current_route)->og_title ?? '';
            $seo['og_description']   = App\Models\SeoField::firstWhere('route', $current_route)->og_description ?? '';
            $seo['og_image']         = url('public/uploads/og-image/' . App\Models\SeoField::firstWhere('route', $current_route)->og_image ?? '');
            $seo['json_ld']          = App\Models\SeoField::firstWhere('route', $current_route)->json_ld ?? '';
        }

        return (object) $seo; // Cast the array to an object
    }

    if (! function_exists('get_package_subscription_status')) {
        function get_package_subscription_status($package_id)
        {
            $subscription = SaasSubscription::where('package_id', $package_id)
                ->where('user_id', auth()->user()->id)
                ->where('status', 1)
                ->where('expiry', '>', now())
                ->latest('id')
                ->exists();

            return $subscription;
        }
    }
}