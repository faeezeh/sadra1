<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiOneController;
use App\Http\Controllers\ApiTwoController;
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

Route::post('/token-mobile2', [ApiTwoController::class, 'sendMobileToken']);
Route::post('/verify-mobile2', [ApiTwoController::class, 'mobileVerification']);


Route::post('/Api3', function (Request $request) {
    $token = \App\Models\Token2::where('token',$request->token)->first();
//    dd($token->user_id);
    $user = \App\Models\User::where('id',$token->user_id)->get();
return $user;
});
