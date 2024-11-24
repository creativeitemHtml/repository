<?php

namespace App\Http\Controllers;

use App\Mail\MilestoneInvoice;
use App\Mail\ProjectReport;
use App\Mail\PurchaseInvoice;
use App\Mail\ServiceCustomInvoice;
use App\Mail\ServiceInvoice;use App\Mail\SubscriptionMail;
use App\Models\ElementCategory;
use App\Models\ElementDownload;
use App\Models\ElementProduct;
use App\Models\ElementProductComment;
use App\Models\ElementProductPayment;
use App\Models\OnlineMeeting;
use App\Models\Package;
use App\Models\PaymentMilestone;
use App\Models\Project;
use App\Models\RolesAndPermission;
use App\Models\SaasSubscription;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\Setting;
use App\Models\Subscription;
use App\Models\User;
use File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use PDF;
use Stripe;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $page_data = array();

        $page_data['total_projects'] = Project::where('user_id', auth()->user()->id)->count();

        $subscriptions = Subscription::where('user_id', auth()->user()->id)->get();

        // Initialize a variable to store the total paid amount
        $totalPaidAmount = 0;

        // Loop through each subscription and add the paid amount to the total
        foreach ($subscriptions as $subscription) {
            // Convert the paid_amount from string to float
            $paidAmount = intVal($subscription->paid_amount);

            // Add the converted paid amount to the total
            $totalPaidAmount += $paidAmount;
        }

        $page_data['total_paid_amount'] = $totalPaidAmount;
        $page_data['page_title']        = 'Dashboard';
        $page_data['dashboard']         = 'active';
        $page_data['file_name']         = 'dashboard';
        return view('backend.customer.navigation', $page_data);
    }

    // this is previous code for elements -> changed by Sham
    public function old_subscription_details()
    {

        $page_data            = array();
        $current_subscription = Subscription::where('user_id', auth()->user()->id)->latest()->first();

        if (! empty($current_subscription) && $current_subscription->payment_method == 'stripe' && $current_subscription->subscription_to_package->interval == 'monthly') {
            //check for new subscription peyment
            $payment_keys    = json_decode($current_subscription->transaction_keys);
            $subscription_id = $payment_keys->subscription_id;

            $stripe      = get_settings('stripe');
            $stripe_keys = json_decode($stripe);
            $STRIPE_KEY;
            $STRIPE_SECRET;

            if ($stripe_keys->mode == "test") {
                $STRIPE_KEY    = $stripe_keys->test_key;
                $STRIPE_SECRET = $stripe_keys->test_secret_key;
            } elseif ($stripe_keys->mode == "live") {
                $STRIPE_KEY    = $stripe_keys->public_live_key;
                $STRIPE_SECRET = $stripe_keys->secret_live_key;
            }

            $stripe = new \Stripe\StripeClient(
                $STRIPE_SECRET
            );

            $subscription_response = $stripe->subscriptions->retrieve(
                $subscription_id,
                []
            );

            // print_r($subscription_response->latest_invoice);
            // print_r($payment_keys->latest_invoice);
            // die();

            if ($subscription_response->latest_invoice != $payment_keys->latest_invoice) {
                $stripe_transaction_keys            = array();
                $stripe_response['subscription_id'] = $subscription_response->id;
                $stripe_response['latest_invoice']  = $subscription_response->latest_invoice;
                $stripe_response['session_id']      = $payment_keys->session_id;
                $stripe_transaction_keys            = $stripe_response;
                $stripe_payment_response            = json_encode($stripe_transaction_keys);

                // echo $subscription_response->toJSON();
                // die();

                $status = Subscription::create([
                    'user_id'           => $current_subscription->user_id,
                    'package_id'        => $current_subscription->package_id,
                    'paid_amount'       => $current_subscription->paid_amount,
                    'payment_method'    => $current_subscription->payment_method,
                    'transaction_keys'  => $stripe_payment_response,
                    'auto_subscription' => 1,
                    'date_added'        => $subscription_response->current_period_start,
                    'expire_date'       => $subscription_response->current_period_end,
                ]);
            }
        }

        // echo $subscription_response->toJson();
        // die();

        $page_data['subscriptions']        = Subscription::where('user_id', auth()->user()->id)->orderBy('id', 'asc')->get();
        $page_data['current_subscription'] = Subscription::where('user_id', auth()->user()->id)->latest()->first();
        $page_data['page_title']           = 'Subscription';
        $page_data['subscription']         = 'active';
        $page_data['sub_folder']           = 'elements';
        $page_data['file_name']            = 'subscription_details';
        return view('backend.customer.navigation', $page_data);
    }

    public function growup_lms_subscription()
    {
        $page_data['current_subscription'] = SaasSubscription::with('package')
            ->where('user_id', auth()->user()->id)
            ->where('status', '!=', 0)
            ->whereHas('package', function ($query) {
                $query->where('product_id', 1);
            })
            ->orderBy('id', 'desc')
            ->first();

        $page_data['page_title']   = 'Subscription';
        $page_data['subscription'] = 'active';
        $page_data['sub_folder']   = 'grow-up-lms';
        $page_data['file_name']    = 'subscription_details';
        return view('backend.customer.navigation', $page_data);
    }

    // this is previous code for elements -> changed by Sham
    public function old_purchase_history()
    {
        $page_data['purchase_histories'] = ElementProductPayment::where('user_id', auth()->user()->id)->orderBy('id', 'asc')->paginate(10);
        $page_data['page_title']         = 'Creative Elements - Purchase History';
        $page_data['purchase_history']   = 'active';
        $page_data['sub_folder']         = 'elements';
        $page_data['file_name']          = 'purchase_history';
        return view('backend.customer.navigation', $page_data);
    }

    public function growup_lms_purchase_history()
    {
        $page_data['purchase_histories'] = SaasSubscription::where('user_id', auth()->user()->id)->with('package')
            ->whereHas('package', function ($query) {
                $query->where('product_id', 1);
            })
            ->latest()->paginate(10);

        $page_data['page_title']       = 'Payment Method';
        $page_data['purchase_history'] = 'active';
        $page_data['sub_folder']       = 'grow-up-lms';
        $page_data['file_name']        = 'purchase_history';
        return view('backend.customer.navigation', $page_data);
    }

    public function purchase_invoice($purchase_id = "")
    {
        $page_data['invoice_details']  = ElementProductPayment::where('id', $purchase_id)->first();
        $page_data['page_title']       = 'Invoice';
        $page_data['purchase_history'] = 'active';
        $page_data['sub_folder']       = 'elements';
        $page_data['file_name']        = 'invoice_element_product';
        return view('backend.customer.navigation', $page_data);

        $invoice_details = ElementProductPayment::where('id', $purchase_id)->first();

        if (isset($invoice_details)) {

            $res                              = $invoice_details;
            $res['formattedDate']             = date('d M, Y', strtotime($invoice_details->date_added));
            $res['payment_to_user']           = $invoice_details->payment_to_user;
            $res['payment_to_elementProduct'] = $invoice_details->payment_to_elementProduct;

            $invoice_details = $res;

        }

        $element_categories = ElementCategory::where('parent_id', null)->orderBy('order', 'asc')->get();

        return Inertia::render('Backend/Customer/InvoiceElementProduct', [
            'element_categories' => $element_categories,
            'invoice_details'    => $invoice_details,
        ]);
    }

    public function wishlists()
    {
        $element_products    = ElementProduct::all();
        $wishlisted_products = [];
        $wishlists           = json_decode(auth()->user()->wishlists) ?? [];

        foreach ($element_products as $element_product) {
            if (in_array($element_product->id, $wishlists)) {
                $wishlisted_products[] = $element_product;
            }
        }

        $perPage            = 12;
        $currentPage        = request()->query('page', 1);
        $totalItems         = count($wishlisted_products);
        $pageItems          = array_slice($wishlisted_products, ($currentPage - 1) * $perPage, $perPage);
        $wishlistsPaginated = new LengthAwarePaginator($pageItems, $totalItems, $perPage, $currentPage, [
            'path'  => request()->url(),
            'query' => request()->query(),
        ]);

        $page_data['wishlists']  = $wishlistsPaginated;
        $page_data['page_title'] = 'Creative Elements - Wishlists';
        $page_data['wishlist']   = 'active';
        $page_data['sub_folder'] = 'elements';
        $page_data['file_name']  = 'wishlists';

        return view('backend.customer.navigation', $page_data);
    }

    public function stripeSubscriptionCancel()
    {
        $current_subscription = Subscription::where('user_id', auth()->user()->id)->latest()->first();
        $payment_keys         = json_decode($current_subscription->transaction_keys);
        $subscription_id      = $payment_keys->subscription_id;

        $stripe      = get_settings('stripe');
        $stripe_keys = json_decode($stripe);
        $STRIPE_KEY;
        $STRIPE_SECRET;

        if ($stripe_keys->mode == "test") {
            $STRIPE_KEY    = $stripe_keys->test_key;
            $STRIPE_SECRET = $stripe_keys->test_secret_key;
        } elseif ($stripe_keys->mode == "live") {
            $STRIPE_KEY    = $stripe_keys->public_live_key;
            $STRIPE_SECRET = $stripe_keys->secret_live_key;
        }

        Stripe\Stripe::setApiKey($STRIPE_SECRET);

        $response = \Stripe\Subscription::update(
            $subscription_id,
            [
                'cancel_at_period_end' => true,
            ]
        );

        if ($response['cancel_at_period_end'] == 1) {
            $current_subscription->auto_subscription = 0;
            $current_subscription->save();
        }

        return redirect()->back()->with('message', 'Subscription canceled successfully.');

    }

    public function stripeSubscribeAgain()
    {
        $stripe      = get_settings('stripe');
        $stripe_keys = json_decode($stripe);
        $STRIPE_KEY;
        $STRIPE_SECRET;

        if ($stripe_keys->mode == "test") {
            $STRIPE_KEY    = $stripe_keys->test_key;
            $STRIPE_SECRET = $stripe_keys->test_secret_key;
        } elseif ($stripe_keys->mode == "live") {
            $STRIPE_KEY    = $stripe_keys->public_live_key;
            $STRIPE_SECRET = $stripe_keys->secret_live_key;
        }

        $stripe = new \Stripe\StripeClient(
            $STRIPE_SECRET
        );

        $current_subscription = Subscription::where('user_id', auth()->user()->id)->latest()->first();
        $payment_keys         = json_decode($current_subscription->transaction_keys);
        $subscription_id      = $payment_keys->subscription_id;

        $subscription = $stripe->subscriptions->retrieve($subscription_id);

        $response = $stripe->subscriptions->update(
            $subscription_id,
            [
                'cancel_at_period_end' => false,
                'proration_behavior'   => 'create_prorations',
                'items'                => [
                    [
                        'id'    => $subscription->items->data[0]->id,
                        'price' => $current_subscription->subscription_to_package->stripe_package_id,
                    ],
                ],
            ]
        );

        if ($response['cancel_at_period_end'] == 0) {
            $current_subscription->auto_subscription = 1;
            $current_subscription->save();
        }

        return redirect()->back()->with('message', 'Subscription auto renewal is on.');
    }

    public function downloads()
    {
        $page_data['downloads'] = ElementDownload::where('user_id', auth()->user()->id)->paginate(10);

        $current_subscription        = Subscription::where('user_id', auth()->user()->id)->first();
        $page_data['download_limit'] = $current_subscription->subscription_to_package->download_limit;

        $today_date = now()->format('Y-m-d');
        // $page_data['remaining_download_limit'] = $current_subscription->subscription_to_package->download_limit - ElementDownload::where('user_id', auth()->user()->id)->whereDate('created_at', $today_date)->count();

        $page_data['page_title'] = 'Creative Elements - Download History';
        $page_data['download']   = 'active';
        $page_data['sub_folder'] = 'elements';
        $page_data['file_name']  = 'download_history';
        return view('backend.customer.navigation', $page_data);
    }

    public function profile()
    {
        $page_data               = array();
        $page_data['page_title'] = 'User Information';
        $page_data['profile']    = 'active';
        $page_data['file_name']  = 'profile';

        return view('backend.customer.navigation', $page_data);
    }

    public function profile_update(Request $request): RedirectResponse
    {
        $page_data = array();

        if (! empty($request->all())) {
            $validated = $request->validate([
                'name'  => 'required',
                'email' => 'required|email',
            ]);

            $data = $request->all();

            $page_data['email'] = $data['email'];

            $duplicate_user_check = User::where('email', $data['email'])->where('id', '!=', auth()->user()->id)->get();

            if (count($duplicate_user_check) == 0) {

                $page_data['name']  = $data['name'];
                $page_data['phone'] = $data['phone'];
                $page_data['about'] = $data['about'];

                if ($request->hasFile('thumbnail')) {

                    $thumbnailPathName = 'public/uploads/thumbnails/users/' . auth()->user()->thumbnail;

                    if (! empty(auth()->user()->thumbnail) && file_exists($thumbnailPathName)) {
                        unlink($thumbnailPathName);
                    }

                    $image     = $request->file('thumbnail');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads/thumbnails/users/'), $imageName);
                    $page_data['thumbnail'] = $imageName;
                } else {
                    $imageName              = auth()->user()->thumbnail;
                    $page_data['thumbnail'] = $imageName;
                }

                User::where('id', auth()->user()->id)->update($page_data);

                return Redirect::route('customer.profile')->with('message', 'Account information updated successfully');
            } else {
                return Redirect::route('customer.profile')->with('error', 'Email already exists');
            }

        }
    }

    public function password_change(Request $request)
    {
        if ($request->new_password != $request->confirm_password) {
            return back()->with("error", "Confirm Password Doesn't match!");
        }

        if (! Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Current Password Doesn't match!");
        }

        $data['password'] = Hash::make($request->new_password);
        User::where('id', auth()->user()->id)->update($data);

        return redirect()->back()->with('message', get_phrase('Password changed successfully'));
    }

    public function subscription_purchase(Request $request, $package_id, $payment_method)
    {

        $requestData      = $request->input('requestData');
        $selected_package = Package::find($package_id);

        if (strtolower($selected_package->interval) == 'monthly') {
            $monthly     = $selected_package->interval_period * 30;
            $expire_date = strtotime('+' . $monthly . ' days', strtotime(date("Y-m-d H:i:s")));

        } elseif (strtolower($selected_package->interval) == 'lifetime') {
            $expire_date = 'lifetime';

        }

        if ($selected_package->name == 'Free') {

            Subscription::create([
                'user_id'        => auth()->user()->id,
                'package_id'     => $package_id,
                'paid_amount'    => '0',
                'payment_method' => 'None',
                'date_added'     => time(),
            ]);

            // Mail::to(auth()->user()->email)->send(new SubscriptionMail($sub_details));

            return redirect()->route('customer.element_checkout_success')->with('success', 'Registration done. You are subscrive to free package.');
        }

        $global_system_currency = get_settings('system_currency');

        $stripe      = get_settings('stripe');
        $stripe_keys = json_decode($stripe);

        $STRIPE_KEY;
        $STRIPE_SECRET;

        if ($stripe_keys->mode == "test") {
            $STRIPE_KEY    = $stripe_keys->test_key;
            $STRIPE_SECRET = $stripe_keys->test_secret_key;
        } elseif ($stripe_keys->mode == "live") {
            $STRIPE_KEY    = $stripe_keys->public_live_key;
            $STRIPE_SECRET = $stripe_keys->secret_live_key;
        }

        $user_data['payment_method'] = $payment_method;

        $user_data['user_id']     = auth()->user()->id;
        $user_data['package_id']  = $package_id;
        $user_data['success_url'] = 'subscription_fee_success_payment';
        $user_data['cancle_url']  = 'subscription_fee_fail_payment';

        $success_url = 'subscription_fee_success_payment';
        $cancel_url  = 'subscription_fee_fail_payment';

        $selected_package = Package::find($package_id);

        $expense_type = $selected_package->interval == 'monthly' ? 'subscription' : 'payment';

        $priceId = $selected_package->stripe_package_id;

        $user_data = implode(' ', array_map(function ($key, $value) {
            return "$key:$value";
        }, array_keys($user_data), $user_data));

        if ($payment_method == "stripe") {
            if ($expense_type == 'subscription') {
                try {

                    Stripe\Stripe::setApiKey($STRIPE_SECRET);

                    $session = \Stripe\Checkout\Session::create([
                        'line_items'  => [[
                            'price'    => $priceId,
                            'quantity' => 1,
                        ]],
                        'mode'        => 'subscription',
                        'success_url' => route($success_url, ['user_data' => $user_data, 'response' => 'check request->all() to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                        'cancel_url'  => route($cancel_url, ['user_data' => $user_data, 'response' => 'check request->all() to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                    ]);

                    // return Inertia::location($session->url);

                    return redirect($session->url);

                } catch (\Exception $e) {

                    return $e->getMessage();
                }
            } else {

                //Lifetime subscription here
                try {

                    Stripe\Stripe::setApiKey($STRIPE_SECRET);

                    $session = \Stripe\Checkout\Session::create([
                        'line_items'  => [[
                            'price'    => $priceId,
                            'quantity' => 1,
                        ]],
                        'mode'        => 'payment',
                        'success_url' => route($success_url, ['user_data' => $user_data, 'response' => 'check request->all() to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                        'cancel_url'  => route($cancel_url, ['user_data' => $user_data, 'response' => 'check request->all() to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                    ]);

                    // return Inertia::location($session->url);

                    return redirect($session->url);

                } catch (\Exception $e) {

                    return $e->getMessage();
                }
            }
        } else {

            // Create an associative array
            $transaction_data = [
                'transaction_keys' => $requestData['trans_id'],
                'account_number'   => $requestData['account_number'],
            ];

            $transaction = json_encode($transaction_data);

            if (strtolower($selected_package->interval) == 'lifetime') {
                $purchase_details = Subscription::create([
                    'user_id'          => auth()->user()->id,
                    'package_id'       => $package_id,
                    'paid_amount'      => $requestData['amount'],
                    'payment_method'   => $payment_method,
                    'status'           => 'pending',
                    'transaction_keys' => $transaction,
                    'date_added'       => time(),
                ]);
            } else {
                $purchase_details = Subscription::create([
                    'user_id'          => auth()->user()->id,
                    'package_id'       => $package_id,
                    'paid_amount'      => $requestData['amount'],
                    'payment_method'   => $payment_method,
                    'status'           => 'pending',
                    'transaction_keys' => $transaction,
                    'date_added'       => time(),
                    'expire_date'      => $expire_date,
                ]);

            }

            $user    = User::find($purchase_details->user_id);
            $payment = Package::find($purchase_details->package_id);

            Mail::to(auth()->user()->email)->send(new PurchaseInvoice($purchase_details, $user, $payment));
            Mail::to('project@creativeitem.com')->send(new PurchaseInvoice($purchase_details, $user, $payment));

            return view('frontend.elements.pending_modal', ['purchase_details' => $purchase_details]);

            // return redirect()->route('customer.element_checkout_success')->with('success', 'Payment Pending');
        }
    }

    public function subscription_fee_success_payment(Request $request, $user_data, $response)
    {
        $user_data = $this->string_to_array($user_data);

        // $last_package = Subscription::where('user_id', $user_data['user_id'])->orderBy('id', 'desc')->first();

        $package = Package::find($user_data['package_id']);
        if (strtolower($package->interval) == 'monthly') {
            $monthly     = $package->interval_period * 30;
            $expire_date = strtotime('+' . $monthly . ' days', strtotime(date("Y-m-d H:i:s")));

        } elseif (strtolower($package->interval) == 'lifetime') {
            $expire_date = 'lifetime';

        }

        if ($user_data['payment_method'] == 'stripe') {
            $stripe      = get_settings('stripe');
            $stripe_keys = json_decode($stripe);
            $STRIPE_KEY;
            $STRIPE_SECRET;

            if ($stripe_keys->mode == "test") {
                $STRIPE_KEY    = $stripe_keys->test_key;
                $STRIPE_SECRET = $stripe_keys->test_secret_key;
            } elseif ($stripe_keys->mode == "live") {
                $STRIPE_KEY    = $stripe_keys->public_live_key;
                $STRIPE_SECRET = $stripe_keys->secret_live_key;
            }

            if ($expire_date == 'lifetime') {
                $stripe_api_response_session_id = $request->all();
                $stripe                         = new \Stripe\StripeClient($STRIPE_SECRET);
                $session_response               = $stripe->checkout->sessions->retrieve($stripe_api_response_session_id['session_id'], []);
                // print_r('<pre>');
                // print_r($session_response);
                // print_r('<pre>');
                // die();

                $stripe_payment_intent = $session_response['payment_intent'];
                $stripe_session_id     = $stripe_api_response_session_id['session_id'];

                $stripe_transaction_keys           = array();
                $stripe_response['payment_intent'] = $stripe_payment_intent;
                $stripe_response['session_id']     = $stripe_session_id;
                $stripe_transaction_keys           = $stripe_response;
                $stripe_payment_response           = json_encode($stripe_transaction_keys);

                $sub_details = Subscription::create([
                    'user_id'          => $user_data['user_id'],
                    'package_id'       => $user_data['package_id'],
                    'paid_amount'      => $package->discounted_price,
                    'payment_method'   => $user_data['payment_method'],
                    'transaction_keys' => $stripe_payment_response,
                    'date_added'       => $session_response['created'],
                ]);

                $user = User::find($sub_details->user_id);

                Mail::to(auth()->user()->email)->send(new SubscriptionMail($sub_details, $user));
                Mail::to('project@creativeitem.com')->send(new SubscriptionMail($sub_details, $user));

                return redirect()->route('customer.element_checkout_success')->with('success', 'Subscription done Successfull');

            } else {

                $stripe_api_response_session_id = $request->all();
                $stripe                         = new \Stripe\StripeClient($STRIPE_SECRET);
                $session_response               = $stripe->checkout->sessions->retrieve($stripe_api_response_session_id['session_id'], []);

                $subscription_response = $stripe->subscriptions->retrieve(
                    $session_response->subscription,
                    []
                );

                $subscription_id   = $session_response->subscription;
                $latest_invoice    = $subscription_response->latest_invoice;
                $stripe_session_id = $stripe_api_response_session_id['session_id'];

                // echo $subscription_response->toJson();
                // echo $latest_invoice;
                // die();

                $stripe_transaction_keys            = array();
                $stripe_response['subscription_id'] = $subscription_id;
                $stripe_response['latest_invoice']  = $latest_invoice;
                $stripe_response['session_id']      = $stripe_session_id;
                $stripe_transaction_keys            = $stripe_response;
                $stripe_payment_response            = json_encode($stripe_transaction_keys);

                // echo $session_response->toJSON();
                // die();

                $status = Subscription::create([
                    'user_id'           => $user_data['user_id'],
                    'package_id'        => $user_data['package_id'],
                    'paid_amount'       => (double) $package->discounted_price * (double) $package->interval_period,
                    'payment_method'    => $user_data['payment_method'],
                    'transaction_keys'  => $stripe_payment_response,
                    'auto_subscription' => 1,
                    'date_added'        => $subscription_response->current_period_start,
                    'expire_date'       => $subscription_response->current_period_end,
                ]);

                $user = User::find($status->user_id);

                Mail::to(auth()->user()->email)->send(new SubscriptionMail($status, $user));
                Mail::to('project@creativeitem.com')->send(new SubscriptionMail($status, $user));

                return redirect()->route('customer.element_checkout_success')->with('success', 'Subscription done Successfull');
            }
        }

    }

    public function subscription_fee_fail_payment(Request $request, $user_data, $response)
    {
        $user_data = $this->string_to_array($user_data);

        // return redirect()->back()->with('warning', 'Subscription failed.');

        return redirect()->route('elements_package_pricing')->with('warning', 'Subscription failed.');
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

    public function single_purchase(Request $request, $product_id, $payment_method)
    {
        // $requestData = $request->all();
        // return view('frontend.elements.pending_modal', ['requestData' => $requestData]);
        $requestData = $request->input('requestData');

        $global_system_currency = get_settings('system_currency');

        $stripe      = get_settings('stripe');
        $stripe_keys = json_decode($stripe);

        $STRIPE_KEY;
        $STRIPE_SECRET;

        if ($stripe_keys->mode == "test") {
            $STRIPE_KEY    = $stripe_keys->test_key;
            $STRIPE_SECRET = $stripe_keys->test_secret_key;
        } elseif ($stripe_keys->mode == "live") {
            $STRIPE_KEY    = $stripe_keys->public_live_key;
            $STRIPE_SECRET = $stripe_keys->secret_live_key;
        }

        $product_details = ElementProduct::find($product_id);

        $purchase_data['user_id']            = auth()->user()->id;
        $purchase_data['element_product_id'] = $product_id;
        $purchase_data['price']              = $product_details->price;
        $purchase_data['payment_method']     = 'stripe';
        $purchase_data['success_url']        = 'single_purchase_success_payment';
        $purchase_data['cancel_url']         = 'single_purchase_fail_payment';

        $purchase_data = implode(' ', array_map(function ($key, $value) {
            return "$key:$value";
        }, array_keys($purchase_data), $purchase_data));

        $success_url = 'single_purchase_success_payment';
        $cancel_url  = 'single_purchase_fail_payment';

        if ($payment_method == "stripe") {
            try {

                Stripe\Stripe::setApiKey($STRIPE_SECRET);

                $session = \Stripe\Checkout\Session::create([
                    'line_items'  => [[
                        'price_data' => [
                            'currency'     => $global_system_currency,
                            'product_data' => [
                                'name' => $product_details->title,
                            ],
                            'unit_amount'  => $product_details->price * 100,
                        ],
                        'quantity'   => 1,
                    ]],
                    'mode'        => 'payment',
                    'success_url' => route($success_url, ['purchase_data' => $purchase_data, 'response' => 'check $product_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url'  => route($cancel_url, ['purchase_data' => $purchase_data, 'response' => 'check $product_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                ]);

                return redirect($session->url);

            } catch (\Exception $e) {

                return $e->getMessage();
            }

        } else {

            $transaction_data = [
                'transaction_keys' => $requestData['trans_id'],
                'account_number'   => $requestData['account_number'],
            ];

            $transaction = json_encode($transaction_data);

            $purchase_details = ElementProductPayment::create([
                'element_product_id' => $product_id,
                'user_id'            => auth()->user()->id,
                'payment_method'     => $payment_method,
                'paid_amount'        => $product_details->price,
                'status'             => 'pending',
                'transaction_keys'   => $transaction,
                'date_added'         => strtotime(date('d-M-Y H:i:s')),
            ]);

            $user    = User::find($purchase_details->user_id);
            $payment = Package::find($purchase_details->package_id);

            Mail::to(auth()->user()->email)->send(new PurchaseInvoice($purchase_details, $user, $payment));
            Mail::to('project@creativeitem.com')->send(new PurchaseInvoice($purchase_details, $user, $payment));

            return view('frontend.elements.pending_modal', ['purchase_details' => $purchase_details]);

            // return redirect()->route('customer.purchase_history')->with('success', 'Payment Pending');
        }
        // print_r($product_id);
        // die();
    }

    public function single_purchase_success_payment(Request $request, $purchase_data, $response)
    {
        $purchase_data = $this->string_to_array($purchase_data);

        if ($purchase_data['payment_method'] == 'stripe') {
            $stripe      = get_settings('stripe');
            $stripe_keys = json_decode($stripe);
            $STRIPE_KEY;
            $STRIPE_SECRET;

            if ($stripe_keys->mode == "test") {
                $STRIPE_KEY    = $stripe_keys->test_key;
                $STRIPE_SECRET = $stripe_keys->test_secret_key;
            } elseif ($stripe_keys->mode == "live") {
                $STRIPE_KEY    = $stripe_keys->public_live_key;
                $STRIPE_SECRET = $stripe_keys->secret_live_key;
            }

            $stripe_api_response_session_id = $request->all();
            $stripe                         = new \Stripe\StripeClient($STRIPE_SECRET);
            $session_response               = $stripe->checkout->sessions->retrieve($stripe_api_response_session_id['session_id'], []);

            $stripe_payment_intent = $session_response['payment_intent'];
            $stripe_session_id     = $stripe_api_response_session_id['session_id'];

            $stripe_transaction_keys           = array();
            $stripe_response['payment_intent'] = $stripe_payment_intent;
            $stripe_response['session_id']     = $stripe_session_id;
            $stripe_transaction_keys           = $stripe_response;
            $stripe_payment_response           = json_encode($stripe_transaction_keys);

            $purchase_details = ElementProductPayment::create([
                'element_product_id' => $purchase_data['element_product_id'],
                'user_id'            => $purchase_data['user_id'],
                'payment_method'     => $purchase_data['payment_method'],
                'paid_amount'        => $purchase_data['price'],
                'status'             => 'paid',
                'transaction_keys'   => $stripe_payment_response,
                'date_added'         => strtotime(date('d-M-Y H:i:s')),
            ]);

            $user = User::find($purchase_details->user_id);

            Mail::to(auth()->user()->email)->send(new PurchaseInvoice($purchase_details, $user));
            Mail::to('project@creativeitem.com')->send(new PurchaseInvoice($purchase_details, $user));

            return redirect()->route('customer.purchase_history')->with('success', 'Payment successfully');
        }
    }

    public function single_purchase_fail_payment(Request $request, $purchase_data, $response)
    {
        $purchase_data = $this->string_to_array($purchase_data);

        $element_product = ElementProduct::find($purchase_data['element_product_id']);

        return redirect()->route('element_product_details', ['title' => slugify($element_product->title . '-' . $element_product->id)])->with('warning', 'Purchase failed.');
    }

    public function download_link_generate($product_id = "")
    {
        $current_subscription = Subscription::where('user_id', auth()->user()->id)->latest()->first();
        $is_purchased         = ElementProductPayment::where('user_id', auth()->user()->id)->where('element_product_id', $product_id)->latest()->first();
        $today                = strtotime('now');

        if ((isset($current_subscription) && ($current_subscription->subscription_to_package->interval == 'lifetime' || $current_subscription->expire_date > $today)) || (! empty($is_purchased) && $current_subscription->subscription_to_package->name == 'Free')) {
            $today = now()->format('Y-m-d'); // Get the current date in 'YYYY-MM-DD' format

            $downloadCount = ElementDownload::where('user_id', auth()->user()->id)
                ->whereDate('created_at', $today)
                ->count();
            if ($downloadCount == $current_subscription->subscription_to_package->download_limit) {
                return redirect()->back()->with('warning', 'Maximum download limit reached for today!');
            }

            $selected_product = ElementProduct::find($product_id);
            $temp             = ElementDownload::where('element_product_id', $product_id)->where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();

            if (! empty($temp)) {
                $difference = strtotime(date('d-M-Y H:i:s')) - $temp->timestamp;
            }

            if (empty($temp)) {
                $temp = ElementDownload::create([
                    'element_product_id' => $selected_product->id,
                    'user_id'            => auth()->user()->id,
                    'unique_identifier'  => random(10),
                    'timestamp'          => strtotime(date('d-M-Y H:i:s')),
                ]);
            } elseif ($difference > 10 * 60) {
                $temp = ElementDownload::create([
                    'element_product_id' => $selected_product->id,
                    'user_id'            => auth()->user()->id,
                    'unique_identifier'  => random(10),
                    'timestamp'          => strtotime(date('d-M-Y H:i:s')),
                ]);
            } else {
                $unique_identifier = $temp->unique_identifier;
                ElementDownload::where('unique_identifier', $unique_identifier)->update([
                    'timestamp' => strtotime(date('d-M-Y H:i:s')),
                ]);
                $temp = ElementDownload::create([
                    'element_product_id' => $selected_product->id,
                    'user_id'            => auth()->user()->id,
                    'unique_identifier'  => random(10),
                    'timestamp'          => strtotime(date('d-M-Y H:i:s')),
                ]);
            }

            return redirect()->route('customer.download_product', ['unique_identifier' => $temp->unique_identifier]);
        } else {
            return redirect()->back()->with('warning', 'Please purchase the product or subscribe first');
        }
    }

    public function download_product($unique_identifier = "")
    {
        $check = ElementDownload::where('unique_identifier', $unique_identifier)->where('user_id', auth()->user()->id)->first();

        if (! empty($check)) {
            $selected_product = ElementProduct::find($check->element_product_id);

            $title = slugify($selected_product->title) . '-' . $selected_product->id;

            $difference = strtotime(date('d-M-Y H:i:s')) - $check->timestamp;
            if ($difference > 10 * 60) {
                return redirect()->route('element_product_details', ['title' => $title])->with('error', 'Link is expired');
            } else {

                // return file_get_contents("https://elementsfiles.creativeitem.com/files/3d/".$check->product_id."/".$file_name);

                $file_url = element_server_url($selected_product->product_id, $selected_product->product_to_elementCategory->slug) . $selected_product->file;
                // die();

                // $file_url = 'http://www.myremoteserver.com/file.exe';
                header('Content-Type: application/octet-stream');
                header("Content-Transfer-Encoding: Binary");
                header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
                readfile($file_url);
            }
        } else {
            return redirect()->route('element_product_details', ['title' => $title])->with('error', 'Access denied!');
        }
    }

    public function projects($param = "")
    {
        if (empty($param)) {
            $param = "active";
        }
        $page_data               = array();
        $page_data['projects']   = Project::where('user_id', auth()->user()->id)->where('status', $param)->paginate(10);
        $page_data['page_title'] = 'Projects';
        $page_data['project']    = 'active';
        $page_data['tab']        = $param;
        $page_data['active']     = Project::where('user_id', auth()->user()->id)->where('status', 'active')->count();
        $page_data['pending']    = Project::where('user_id', auth()->user()->id)->where('status', 'pending')->count();
        $page_data['archive']    = Project::where('user_id', auth()->user()->id)->where('status', 'archive')->count();

        $page_data['file_name'] = 'projects';

        return view('backend.customer.navigation', $page_data);
    }

    public function project_details($id = "")
    {

        $page_data                       = array();
        $page_data['project_details']    = Project::find($id);
        $page_data['online_meetings']    = OnlineMeeting::where('project_id', $id)->orderBy('timestamp', 'asc')->get();
        $page_data['payment_milestones'] = PaymentMilestone::where('project_id', $id)->orderBy('id', 'desc')->get();
        $page_data['page_title']         = 'Project Details';
        $page_data['project']            = 'active';
        $page_data['file_name']          = 'project_details';

        return view('backend.customer.navigation', $page_data);
    }

    public function project_create(Request $request)
    {
        $page_data        = array();
        $attachments_name = array();
        $attachements     = array();

        if (! empty($request->all())) {
            $validated = $request->validate([
                'title'             => 'required',
                'description'       => 'required',
                'budget_estimation' => 'required',
                'timeline'          => 'required',
            ]);

            $data = $request->all();

            $page_data['title']               = $data['title'];
            $page_data['description']         = $data['description'];
            $page_data['budget_estimation']   = $data['budget_estimation'];
            $page_data['timeline']            = $data['timeline'];
            $page_data['user_id']             = auth()->user()->id;
            $page_data['status']              = 'pending';
            $page_data['completion_progress'] = 0;

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
            Mail::to(auth()->user()->email)->send(new ProjectReport($project_details, $user, $route));

            $route = route('superadmin.projects');
            Mail::to('project@creativeitem.com')->send(new ProjectReport($project_details, $user, $route));

            return redirect()->route('customer.projects')->with('success', 'Project created successfully');

        }

        $page_data['page_title'] = 'Project Create';
        $page_data['file_name']  = 'project_add';

        return view('backend.customer.navigation', $page_data);
    }

    // public function project_edit(Request $request, $id = "")
    // {
    //     $page_data = array();

    //     $project_details = Project::find($id);

    //     $attachments = json_decode($project_details->attachment);
    //     $attachments_name = json_decode($project_details->attachment_name);

    //     if(!empty($request->all())) {
    //         $validated = $request->validate([
    //             'title' => 'required',
    //             'description' => 'required',
    //             'budget_estimation' => 'required',
    //             'timeline' => 'required'
    //         ]);

    //         $data = $request->all();

    //         $page_data['title'] = $data['title'];
    //         $page_data['description'] = $data['description'];
    //         $page_data['budget_estimation'] = $data['budget_estimation'];
    //         $page_data['timeline'] = $data['timeline'];
    //         $page_data['user_id'] = auth()->user()->id;
    //         $page_data['status'] = $project_details->status;
    //         $page_data['completion_progress'] = $project_details->completion_progress;

    //         if(!empty($data['attachment']))
    //         {
    //             array_push($attachments_name, $data['attachment']->getClientOriginalName());
    //             $page_data['attachment_name'] = json_encode($attachments_name);

    //             if (!File::exists(public_path('uploads/projects'))) {
    //                 File::makeDirectory(public_path('uploads/projects'));
    //             }

    //             $attachment = time().'-'.random(2).'.'.$data['attachment']->extension();

    //             $data['attachment']->move(public_path('uploads/projects/'), $attachment);

    //             array_push($attachments, $attachment);
    //             $page_data['attachment'] = json_encode($attachments);

    //         } else {
    //             $page_data['attachment_name'] = $project_details->attachment_name;
    //             $page_data['attachment'] = $project_details->attachment;
    //         }

    //         Project::where('id', $id)->update($page_data);

    //         return redirect('/customer/project_details/'.$id)->with('message', 'Project updated successfully');

    //     }

    //     return Inertia::render('Backend/Customer/ProjectEdit', [
    //         'project_details' => $project_details,
    //     ]);
    // }

    // public function project_remove($id="")
    // {
    //     $meeting = Project::where('user_id', auth()->user()->id)->where('id', $id)->first();
    //     $meeting->delete();

    //     return redirect()->back()->with('message', 'Project removed successfully');
    // }

    public function project_payment($milestone_id = "")
    {
        $global_system_currency = get_settings('system_currency');

        $stripe      = get_settings('stripe');
        $stripe_keys = json_decode($stripe);

        $STRIPE_KEY;
        $STRIPE_SECRET;

        if ($stripe_keys->mode == "test") {
            $STRIPE_KEY    = $stripe_keys->test_key;
            $STRIPE_SECRET = $stripe_keys->test_secret_key;
        } elseif ($stripe_keys->mode == "live") {
            $STRIPE_KEY    = $stripe_keys->public_live_key;
            $STRIPE_SECRET = $stripe_keys->secret_live_key;
        }

        $payment_details = PaymentMilestone::find($milestone_id);

        $payment_data['user_id']        = auth()->user()->id;
        $payment_data['milestone_id']   = $milestone_id;
        $payment_data['amount']         = $payment_details->amount;
        $payment_data['payment_method'] = 'stripe';
        $payment_data['success_url']    = 'milestone_success_payment';
        $payment_data['cancel_url']     = 'milestone_fail_payment';

        $payment_data = implode(' ', array_map(function ($key, $value) {
            return "$key:$value";
        }, array_keys($payment_data), $payment_data));

        $success_url = 'milestone_success_payment';
        $cancel_url  = 'milestone_fail_payment';

        try {

            Stripe\Stripe::setApiKey($STRIPE_SECRET);

            $session = \Stripe\Checkout\Session::create([
                'line_items'  => [[
                    'price_data' => [
                        'currency'     => $global_system_currency,
                        'product_data' => [
                            'name' => $payment_details->PaymentMilestone_to_project->title,
                        ],
                        'unit_amount'  => $payment_details->amount * 100,
                    ],
                    'quantity'   => 1,
                ]],
                'mode'        => 'payment',
                'success_url' => route($success_url, ['payment_data' => $payment_data, 'response' => 'check $milestone_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url'  => route($cancel_url, ['payment_data' => $payment_data, 'response' => 'check $milestone_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
            ]);

            return redirect($session->url);

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function milestone_success_payment(Request $request, $payment_data, $response)
    {
        $payment_data = $this->string_to_array($payment_data);

        if ($payment_data['payment_method'] == 'stripe') {
            $stripe      = get_settings('stripe');
            $stripe_keys = json_decode($stripe);
            $STRIPE_KEY;
            $STRIPE_SECRET;

            if ($stripe_keys->mode == "test") {
                $STRIPE_KEY    = $stripe_keys->test_key;
                $STRIPE_SECRET = $stripe_keys->test_secret_key;
            } elseif ($stripe_keys->mode == "live") {
                $STRIPE_KEY    = $stripe_keys->public_live_key;
                $STRIPE_SECRET = $stripe_keys->secret_live_key;
            }

            $stripe_api_response_session_id = $request->all();
            $stripe                         = new \Stripe\StripeClient($STRIPE_SECRET);
            $session_response               = $stripe->checkout->sessions->retrieve($stripe_api_response_session_id['session_id'], []);

            $stripe_payment_intent = $session_response['payment_intent'];
            $stripe_session_id     = $stripe_api_response_session_id['session_id'];

            $stripe_transaction_keys           = array();
            $stripe_response['payment_intent'] = $stripe_payment_intent;
            $stripe_response['session_id']     = $stripe_session_id;
            $stripe_transaction_keys           = $stripe_response;
            $stripe_payment_response           = json_encode($stripe_transaction_keys);

            $status = PaymentMilestone::where('id', $payment_data['milestone_id'])->update([
                'payment_method'   => 'stripe',
                'transaction_keys' => $stripe_payment_response,
                'status'           => 1,
            ]);

            $payment_details = PaymentMilestone::find($payment_data['milestone_id']);

            $user = User::find($payment_details->user_id);

            Mail::to(auth()->user()->email)->send(new MilestoneInvoice($payment_details, $user));
            Mail::to('project@creativeitem.com')->send(new MilestoneInvoice($payment_details, $user));

            return redirect('customer/project_details/' . $payment_details->project_id)->with('success', 'Payment successfully');
        }
    }

    public function milestone_fail_payment(Request $request, $payment_data, $response)
    {
        $payment_data = $this->string_to_array($payment_data);

        $payment_details = PaymentMilestone::find($payment_data['milestone_id']);

        return redirect('customer/project_details/' . $payment_details->project_id)->with('error', 'Payment canceled.');
    }

    public function milestone_invoice($milestone_id = "")
    {
        $page_data                      = array();
        $page_data['milestone_details'] = PaymentMilestone::find($milestone_id);
        $page_data['page_title']        = 'MILESTONE INVOICE';
        $page_data['project']           = 'active';
        $page_data['file_name']         = 'project_milestone_invoice';

        return view('backend.customer.navigation', $page_data);

        // $milestone_details = PaymentMilestone::find($milestone_id);

        // if(isset($milestone_details)) {

        //     $res = $milestone_details;
        //     $res['paymentMilestone_to_user'] = $milestone_details->paymentMilestone_to_user;
        //     $res['PaymentMilestone_to_project'] = $milestone_details->PaymentMilestone_to_project;

        //     $milestone_details = $res;

        // }

        // return Inertia::render('Backend/Customer/ProjectMilestoneInvoice', [
        //     'milestone_details' => $milestone_details,
        // ]);
    }

    public function download_attachment($project_id = "", $key = "")
    {
        $project_details = Project::find($project_id);
        // print_r($key);
        // die();

        $attachments      = json_decode($project_details->attachment);
        $attachments_name = json_decode($project_details->attachment_name);

        $filepath = public_path('uploads/projects/' . $attachments[$key]);
        return response()->download($filepath, $attachments_name[$key], array('content-description' => 'description'));
    }

    public function remove_attachment($project_id = "", $key = "")
    {
        $project_details = Project::find($project_id);

        $attachments      = json_decode($project_details->attachment);
        $attachments_name = json_decode($project_details->attachment_name);

        $filePath = 'public/uploads/projects/' . $attachments[$key];

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        unset($attachments[$key]);
        unset($attachments_name[$key]);

        $page_data['attachment']      = json_encode($attachments);
        $page_data['attachment_name'] = json_encode($attachments_name);

        Project::where('id', $project_id)->update($page_data);

        return redirect('/customer/project_details/' . $project_id)->with('success', 'Attachment removed successfully');

    }

    public function upload_attachment(Request $request, $project_id = "")
    {
        $page_data = array();

        $project_details = Project::find($project_id);

        $attachments      = json_decode($project_details->attachment);
        $attachments_name = json_decode($project_details->attachment_name);

        if (! empty($request->all())) {
            $data = $request->all();

            array_push($attachments_name, $data['attachment']->getClientOriginalName());
            $page_data['attachment_name'] = json_encode($attachments_name);

            if (! File::exists(public_path('uploads/projects'))) {
                File::makeDirectory(public_path('uploads/projects'));
            }

            $attachment = time() . '-' . random(2) . '.' . $data['attachment']->extension();

            $data['attachment']->move(public_path('uploads/projects/'), $attachment);

            array_push($attachments, $attachment);
            $page_data['attachment'] = json_encode($attachments);
        } else {
            $page_data['attachment_name'] = $project_details->attachment_name;
            $page_data['attachment']      = $project_details->attachment;
        }

        // print_r($page_data);
        // die();

        Project::where('id', $project_id)->update($page_data);

        return redirect('/customer/project_details/' . $project_id)->with('success', 'Attachment updated successfully');
    }

    public function service_purchase($service_id = "")
    {

        $global_system_currency = get_settings('system_currency');

        $stripe      = get_settings('stripe');
        $stripe_keys = json_decode($stripe);

        $STRIPE_KEY;
        $STRIPE_SECRET;

        if ($stripe_keys->mode == "test") {
            $STRIPE_KEY    = $stripe_keys->test_key;
            $STRIPE_SECRET = $stripe_keys->test_secret_key;
        } elseif ($stripe_keys->mode == "live") {
            $STRIPE_KEY    = $stripe_keys->public_live_key;
            $STRIPE_SECRET = $stripe_keys->secret_live_key;
        }

        $service_details = ServicePackage::find($service_id);

        $purchase_data['user_id']        = auth()->user()->id;
        $purchase_data['service_id']     = $service_id;
        $purchase_data['price']          = $service_details->discounted_price;
        $purchase_data['payment_method'] = 'stripe';
        $purchase_data['success_url']    = 'single_purchase_success_payment';
        $purchase_data['cancel_url']     = 'single_purchase_fail_payment';

        $purchase_data = implode(' ', array_map(function ($key, $value) {
            return "$key:$value";
        }, array_keys($purchase_data), $purchase_data));

        $success_url = 'service_purchase_success_payment';
        $cancel_url  = 'service_purchase_fail_payment';

        try {

            Stripe\Stripe::setApiKey($STRIPE_SECRET);

            $session = \Stripe\Checkout\Session::create([
                'line_items'  => [[
                    'price_data' => [
                        'currency'     => $global_system_currency,
                        'product_data' => [
                            'name' => $service_details->name,
                        ],
                        'unit_amount'  => $service_details->discounted_price * 100,
                    ],
                    'quantity'   => 1,
                ]],
                'mode'        => 'payment',
                'success_url' => route($success_url, ['purchase_data' => $purchase_data, 'response' => 'check $service_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url'  => route($cancel_url, ['purchase_data' => $purchase_data, 'response' => 'check $service_id to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
            ]);

            return redirect($session->url);

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function service_purchase_success_payment(Request $request, $purchase_data, $response)
    {
        $purchase_data = $this->string_to_array($purchase_data);

        if ($purchase_data['payment_method'] == 'stripe') {
            $stripe      = get_settings('stripe');
            $stripe_keys = json_decode($stripe);
            $STRIPE_KEY;
            $STRIPE_SECRET;

            if ($stripe_keys->mode == "test") {
                $STRIPE_KEY    = $stripe_keys->test_key;
                $STRIPE_SECRET = $stripe_keys->test_secret_key;
            } elseif ($stripe_keys->mode == "live") {
                $STRIPE_KEY    = $stripe_keys->public_live_key;
                $STRIPE_SECRET = $stripe_keys->secret_live_key;
            }

            $stripe_api_response_session_id = $request->all();
            $stripe                         = new \Stripe\StripeClient($STRIPE_SECRET);
            $session_response               = $stripe->checkout->sessions->retrieve($stripe_api_response_session_id['session_id'], []);

            $stripe_payment_intent = $session_response['payment_intent'];
            $stripe_session_id     = $stripe_api_response_session_id['session_id'];

            $stripe_transaction_keys           = array();
            $stripe_response['payment_intent'] = $stripe_payment_intent;
            $stripe_response['session_id']     = $stripe_session_id;
            $stripe_transaction_keys           = $stripe_response;
            $stripe_payment_response           = json_encode($stripe_transaction_keys);

            $service_Details = ServicePackage::find($purchase_data['service_id']);

            $project_details['title'] = $service_Details->name;
            $services                 = json_decode($service_Details->services, true);
            $htmlText                 = '';
            foreach ($services as $key => $value) {
                $htmlText .= $key . '. ' . $value['feature'] . '<br>';
            }
            $project_details['description']         = $htmlText;
            $project_details['budget_estimation']   = '$0 - ' . currency($service_Details->discounted_price);
            $project_details['timeline']            = '4 Weeks';
            $project_details['user_id']             = auth()->user()->id;
            $project_details['status']              = 'pending';
            $project_details['completion_progress'] = 0;

            $project_details['attachment_name'] = json_encode(array());
            $project_details['attachment']      = json_encode(array());

            $project = Project::create($project_details);

            $milestone_details['status']             = 1;
            $milestone_details['title']              = 'Payments';
            $milestone_details['amount']             = $purchase_data['price'];
            $milestone_details['user_id']            = $project->user_id;
            $milestone_details['project_id']         = $project->id;
            $milestone_details['service_package_id'] = $service_Details->id;
            $milestone_details['payment_method']     = 'stripe';
            $milestone_details['transaction_keys']   = $stripe_payment_response;

            $payment_details = PaymentMilestone::create($milestone_details);

            $user = User::find($project->user_id);

            Mail::to(auth()->user()->email)->send(new ServiceInvoice($payment_details, $user));
            Mail::to('project@creativeitem.com')->send(new ServiceInvoice($payment_details, $user));

            return redirect('customer/project_details/' . $payment_details->project_id)->with('success', 'Service Payment successful');

        }
    }

    public function service_purchase_fail_payment(Request $request, $purchase_data, $response)
    {
        $purchase_data = $this->string_to_array($purchase_data);

        return redirect()->route('services')->with('warning', 'Service Purchase failed.');
    }

    public function service_custom_purchase(Request $request)
    {
        $global_system_currency = get_settings('system_currency');

        $stripe      = get_settings('stripe');
        $stripe_keys = json_decode($stripe);

        $STRIPE_KEY;
        $STRIPE_SECRET;

        if ($stripe_keys->mode == "test") {
            $STRIPE_KEY    = $stripe_keys->test_key;
            $STRIPE_SECRET = $stripe_keys->test_secret_key;
        } elseif ($stripe_keys->mode == "live") {
            $STRIPE_KEY    = $stripe_keys->public_live_key;
            $STRIPE_SECRET = $stripe_keys->secret_live_key;
        }

        // Retrieve the service IDs from the request
        $serviceIds = $request->input('selected_services', []);

        // Fetch the service objects from the database
        $selected_services = Service::whereIn('id', $serviceIds)->get();

        // Calculate the total price
        $total_price = 0;

        foreach ($selected_services as $service) {
            $total_price += intval($service->price);
        }

        $purchase_data['user_id']              = auth()->user()->id;
        $purchase_data['selected_service_ids'] = implode(',', $serviceIds);
        $purchase_data['price']                = $total_price;
        $purchase_data['payment_method']       = 'stripe';

        $purchase_data = implode(' ', array_map(function ($key, $value) {
            return "$key:$value";
        }, array_keys($purchase_data), $purchase_data));

        $success_url = 'service_custom_purchase_success_payment';
        $cancel_url  = 'service_custom_purchase_fail_payment';

        try {

            Stripe\Stripe::setApiKey($STRIPE_SECRET);

            $session = \Stripe\Checkout\Session::create([
                'line_items'  => [[
                    'price_data' => [
                        'currency'     => $global_system_currency,
                        'product_data' => [
                            'name' => 'Custom Services',
                        ],
                        'unit_amount'  => $total_price * 100,
                    ],
                    'quantity'   => 1,
                ]],
                'mode'        => 'payment',
                'success_url' => route($success_url, ['purchase_data' => $purchase_data, 'response' => 'check $selectedServiceIds to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url'  => route($cancel_url, ['purchase_data' => $purchase_data, 'response' => 'check $selectedServiceIds to get the response ']) . '?session_id={CHECKOUT_SESSION_ID}',
            ]);

            return redirect($session->url);

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function service_custom_purchase_success_payment(Request $request, $purchase_data, $response)
    {
        $purchase_data = $this->string_to_array($purchase_data);

        // print_r($purchase_data);
        // die();

        if ($purchase_data['payment_method'] == 'stripe') {
            $stripe      = get_settings('stripe');
            $stripe_keys = json_decode($stripe);
            $STRIPE_KEY;
            $STRIPE_SECRET;

            if ($stripe_keys->mode == "test") {
                $STRIPE_KEY    = $stripe_keys->test_key;
                $STRIPE_SECRET = $stripe_keys->test_secret_key;
            } elseif ($stripe_keys->mode == "live") {
                $STRIPE_KEY    = $stripe_keys->public_live_key;
                $STRIPE_SECRET = $stripe_keys->secret_live_key;
            }

            $stripe_api_response_session_id = $request->all();
            $stripe                         = new \Stripe\StripeClient($STRIPE_SECRET);
            $session_response               = $stripe->checkout->sessions->retrieve($stripe_api_response_session_id['session_id'], []);

            $stripe_payment_intent = $session_response['payment_intent'];
            $stripe_session_id     = $stripe_api_response_session_id['session_id'];

            $stripe_transaction_keys           = array();
            $stripe_response['payment_intent'] = $stripe_payment_intent;
            $stripe_response['session_id']     = $stripe_session_id;
            $stripe_transaction_keys           = $stripe_response;
            $stripe_payment_response           = json_encode($stripe_transaction_keys);

            $selectedServiceIds = explode(',', $purchase_data['selected_service_ids']);

            $service_details = [];

            // Loop through each selected service id
            foreach ($selectedServiceIds as $serviceId) {
                // Assuming Service model has a 'name' attribute
                $service = Service::find($serviceId);

                if ($service) {
                    $service_details[] = [
                        'id'   => $service->id,
                        'name' => $service->name,
                        // Add other attributes you need
                    ];
                }
            }

            $htmlText = '';

            foreach ($service_details as $key => $service) {
                $htmlText .= $key + 1 . '. ' . $service['name'] . '<br>';
                // You can add other details from $service if needed
            }

            $project_details['title']               = 'Custom Service';
            $project_details['description']         = $htmlText;
            $project_details['budget_estimation']   = '$0 - ' . currency($purchase_data['price']);
            $project_details['timeline']            = '4 Weeks';
            $project_details['user_id']             = auth()->user()->id;
            $project_details['status']              = 'active';
            $project_details['completion_progress'] = 0;

            $project_details['attachment_name'] = json_encode(array());
            $project_details['attachment']      = json_encode(array());

            $project = Project::create($project_details);

            $milestone_details['status']           = 1;
            $milestone_details['title']            = 'Payments';
            $milestone_details['amount']           = $purchase_data['price'];
            $milestone_details['user_id']          = $project->user_id;
            $milestone_details['project_id']       = $project->id;
            $milestone_details['payment_method']   = 'stripe';
            $milestone_details['transaction_keys'] = $stripe_payment_response;

            $payment_details = PaymentMilestone::create($milestone_details);

            $user = User::find($project->user_id);

            Mail::to(auth()->user()->email)->send(new ServiceCustomInvoice($payment_details, $user));
            Mail::to('project@creativeitem.com')->send(new ServiceCustomInvoice($payment_details, $user));

            return redirect('customer/project_details/' . $payment_details->project_id)->with('message', 'Service Payment successful');
        }
    }

    public function service_custom_purchase_fail_payment()
    {
        return redirect()->route('services')->with('warning', 'Custom Service Purchase failed.');
    }
}