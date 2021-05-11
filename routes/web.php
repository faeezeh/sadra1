<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiOneController;
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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/product', function () {
    return view('products');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});



Route::post('/token-mobile', [ApiOneController::class, 'sendMobileToken']);
Route::post('/verify-mobile', [ApiOneController::class, 'mobileVerification']);
