<?php

use App\Http\Controllers\LmsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Lms Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::name('lms.')->prefix('growup-lms')->group(function () {

    Route::controller(LmsController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/features', 'features')->name('features');
        Route::get('/pricing', 'pricing')->name('pricing');
        Route::get('/help', 'help')->name('help');
        Route::get('/signup', 'signup')->name('signup');
        Route::post('/register-company-lms', 'register_company_lms')->name('register_company_lms');
        Route::post('/company-lms-register', 'company_lms_register')->name('company_lms_register');
        Route::post('/company-email-verify', 'company_email_verify')->name('company_email_verify');

        Route::middleware('auth')->controller(LmsController::class)->group(function () {
            Route::post('subscription/', 'subscription')->name('subscription');
            Route::get('subscription/success/{purchase_data}/{response}', 'subscription_success')->name('subscription.success');
        });
    });
});
