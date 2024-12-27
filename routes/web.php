<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterCompanyController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

//Cache clearing route
Route::get('/clear-cache', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Application cache cleared';
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(RegisterCompanyController::class)->group(function () {
    Route::any('{saas_product}/signup-form', 'create')->name('register.company.form');
    Route::post('{saas_product}/signup', 'store')->name('register.company');

    Route::middleware(['auth', 'customer'])->group(function () {
        Route::get('{saas_product}/resend-verification-code', 'resend_verification')->name('resend.verification.code')->middleware('throttle:5,60');
        Route::get('{saas_product}/email-verification', 'verification_form')->name('email.verification.process');
        Route::post('{saas_product}/email-verification', 'process_verification')->name('email.verification.process');
        Route::get('{saas_product}/signup-success', 'signup_success')->name('signup.success');
    });
});

require __DIR__ . '/auth.php';