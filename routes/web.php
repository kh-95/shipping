<?php

use Illuminate\Support\Facades\Auth;
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

// Route::namespace('Auth')->group(function () {
//     Route::get('login', 'LoginController@loginForm')->name('login');
//     Route::post('login', 'LoginController@process_login')->name('login-form');
// });

// Route::controller('Auth\RegisterController')->group(function () {
//     Route::get('register', 'registerForm');
//     Route::post('register', 'register');
//     Route::post('check_code', 'checkUserCode');
//     Route::post('verify_phone_code', 'verifyPhoneCode');
//     Route::post('complete_register', 'completeRegister');
// });

// Route::controller('Auth\ResetController')->group(function () {
//     Route::post('reset_password', 'updatePassword');
// });




// Route::middleware(['auth','admin'])->group(function () {
//         Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/home', function () {
return view('layouts.dashbord.app');
})->name('home');


// });



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
