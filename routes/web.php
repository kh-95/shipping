<?php

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
Route::controller('Auth\LoginController')->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('send_reset_code', 'sendResetCode');
});

Route::controller('Auth\RegisterController')->group(function () {
    Route::post('register', 'register');
    Route::post('check_code', 'checkUserCode');
    Route::post('verify_phone_code', 'verifyPhoneCode');
    Route::post('complete_register', 'completeRegister');
});

Route::controller('Auth\ResetController')->group(function () {
    // Route::post('check_identity_number', 'checkIdentityNumber');
    Route::post('reset_password', 'updatePassword');
});
Route::get('/', function () {
    return view('layouts.dashbord.app');
});


Route::group(['prefix'=>'shipping','middleware'=>['auth','admin'],'as'=>'admin.','namespace'=>'\App\Http\Controllers\Admin'],function(){



});
