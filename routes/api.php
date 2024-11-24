<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\LmsController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/category_wise_elements/{slug}', [ApiController::class, 'category_wise_elements']);

Route::get('/product_wise_packages/{slug}', [ApiController::class, 'product_wise_packages']);

Route::get('/saas_company_check/{slug}', [ApiController::class, 'saas_company_check']);
Route::post('/company_lms_register', [ApiController::class, 'company_lms_register']);

Route::get('/elements/laravel-themes', [ApiController::class, 'list']);

Route::controller(LmsController::class)->group(function () {
    Route::get('check-subscription/{email}/{product}', 'check_subscription');
});