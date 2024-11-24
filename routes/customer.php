<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::controller(CustomerController::class)->middleware('auth', 'customer')->group(function () {

    Route::get('/customer/dashboard', 'dashboard')->name('customer.dashboard');

    Route::get('/customer/projects/{param?}', 'projects')->name('customer.projects');
    Route::get('/customer/project_details/{id}', 'project_details')->name('customer.project_details');
    Route::any('/customer/project_create', 'project_create')->name('customer.project_create');
    // Route::any('/customer/project_edit/{id}', 'project_edit')->name('customer.project_edit');
    // Route::any('/customer/project_remove/{id}', 'project_remove')->name('customer.project_remove');
    Route::get('/customer/download/attachment/{project_id}/{key}', 'download_attachment')->name('customer.download_attachment');
    Route::get('/customer/remove/attachment/{project_id}/{key}', 'remove_attachment')->name('customer.remove_attachment');
    Route::any('/customer/upload/attachment/{project_id}', 'upload_attachment')->name('customer.upload_attachment');

    //Milestone Payment by customer
    Route::any('/customer/project_payment/{id}', 'project_payment')->name('customer.project_payment');
    Route::get('/customer/project_payment/success/{payment_data}/{response}', 'milestone_success_payment')->name('milestone_success_payment');
    Route::get('/customer/project_payment/fail/{payment_data}/{response}', 'milestone_fail_payment')->name('milestone_fail_payment');
    Route::get('/customer/milestone_invoice/{milestone_id}', 'milestone_invoice')->name('customer.milestone_invoice');

    Route::get('/customer/creative-elements/subscription', 'subscription_details')->name('customer.subscription_details');
    Route::get('/customer/subscription/cancel', 'stripeSubscriptionCancel')->name('customer.stripe.subscription_cancel');
    Route::get('/customer/subscription/again', 'stripeSubscribeAgain')->name('customer.stripe.subscription_again');

    Route::get('/customer/purchase-history', 'purchase_history')->name('customer.purchase_history');
    Route::get('/customer/purchase_invoice/{purchase_id}', 'purchase_invoice')->name('customer.purchase_invoice');

    Route::get('/customer/creative-elements/wishlists', 'wishlists')->name('customer.wishlists');
    Route::get('customer/creative_elements/wishlists/remove/{id}', 'wishlist_remove')->name('customer.wishlist_remove');

    Route::any('/customer/creative-elements/downloads', 'downloads')->name('customer.downloads');

    Route::get('/customer/profile', 'profile')->name('customer.profile');
    Route::any('/customer/profile/update', 'profile_update')->name('customer.profile_update');
    Route::post('/customer/password-change', 'password_change')->name('customer.password_change');

    Route::get('customer/subscription-purchase/{package_id}/{payment_method}', 'subscription_purchase')->name('customer.subscription_purchase');

    // Subcription Payment by Customer
    Route::get('/customer/subscription/payment/success/{user_data}/{response}', 'subscription_fee_success_payment')->name('subscription_fee_success_payment');
    Route::get('/customer/subscription/payment/fail/{user_data}/{response}', 'subscription_fee_fail_payment')->name('subscription_fee_fail_payment');

    //Single Payment by customer
    Route::get('/customer/creative-elements/single-purchase/{product_id}/{payment_method}', 'single_purchase')->name('customer.single_purchase');
    Route::get('/customer/single-purchase/success/{purchase_data}/{response}', 'single_purchase_success_payment')->name('single_purchase_success_payment');
    Route::get('/customer/single-purchase/fail/{purchase_data}/{response}', 'single_purchase_fail_payment')->name('single_purchase_fail_payment');

    //Service payment
    Route::get('/customer/service-purchase/{service_id}', 'service_purchase')->name('customer.service_purchase');
    Route::get('/customer/service-purchase/success/{purchase_data}/{response}', 'service_purchase_success_payment')->name('service_purchase_success_payment');
    Route::get('/customer/service-purchase/fail/{purchase_data}/{response}', 'service_purchase_fail_payment')->name('service_purchase_fail_payment');

    //Service Custom payment
    Route::any('/customer/service-custom-purchase', 'service_custom_purchase')->name('customer.service_custom_purchase');
    Route::get('/customer/service-custom-purchase/success/{purchase_data}/{response}', 'service_custom_purchase_success_payment')->name('service_custom_purchase_success_payment');
    Route::get('/customer/service-custom-purchase/fail', 'service_custom_purchase_fail_payment')->name('service_custom_purchase_fail_payment');

    //Download
    Route::get('/customer/creative-elements/download-link/{product_id}', 'download_link_generate')->name('customer.download_link_generate');
    Route::get('/elements/download-file/{unique_identifier}', 'download_product')->name('customer.download_product');

    // grow up lms
    Route::get('/customer/growup-lms/subscription', 'growup_lms_subscription')->name('customer.growup.lms.subscription');
    Route::get('/customer/growup-lms/purchase-history', 'growup_lms_purchase_history')->name('customer.growup.lms.purchase.history');
});