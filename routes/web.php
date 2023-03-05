<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('debitOrder', [UserController::class, 'debitOrder']);
Route::post('order_post', [UserController::class, 'order_post']);
Route::get('orderReview', [UserController::class, 'orderreview']);
Route::get('payment', [UserController::class, 'payment']);
Route::get('ordercomplete', [UserController::class, 'ordercomplete']);


Route::get('masterOrder', [UserController::class, 'masterOrder']);
Route::post('masterorderReview', [UserController::class, 'masterorderReview']);
Route::get('masterpayment', [UserController::class, 'masterpayment']);