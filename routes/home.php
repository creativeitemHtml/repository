<?php

use App\Http\Controllers\HomeController;
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
Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')->name('home');

    Route::get('/web-applications', 'web_applications')->name('web_applications');
    Route::get('/product/academy-lms', 'product_academy')->name('product_academy');

    Route::get('/blog/{slug}', 'blog_details')->name('blog_details');
    Route::any('/blog/{type?}/{keyword?}', 'blog')->name('blog');

    Route::get('/docs', 'docs')->name('docs');
    Route::get('/docs/{product_slug}/{article_slug?}', 'documentation_details')->name('documentation_details');

    Route::get('/services', 'services')->name('services');
    Route::any('/services/checkout-custom-service', 'checkout_custom_service')->name('checkout_custom_service');
    Route::any('/services/purchase-custom-service', 'purchase_custom_service')->name('purchase_custom_service');
    Route::post('/project-submit', 'project_submit')->name('project_submit');
    Route::get('/services/service-checkout/{service_id}', 'service_buy_now')->name('service_buy_now');
    Route::any('/services/purchase-service/{package_id}', 'purchase_service_package')->name('purchase_service_package');
    Route::get('/services/service-help/{service_id}', 'service_help')->name('service_help');
    Route::get('/services/service-custom-help/{product_id}', 'service_custom_help')->name('service_custom_help');

    Route::get('/hire-us', 'hire_us')->name('hire_us');

    Route::get('/terms-and-condition', 'terms_and_condition')->name('terms_and_condition');
    Route::get('/privacy-policy', 'privacy_policy')->name('privacy_policy');
    Route::get('/refund-policy', 'refund_policy')->name('refund_policy');
    Route::get('/support-policy', 'support_policy')->name('support_policy');
    Route::post('/session-language', 'session_language')->name('session_language');
    Route::post('/session-language_show', 'session_language_show')->name('session_language_show');
    Route::post('/session-user-store', 'session_user_currency_store')->name('session_user_currency');
});
