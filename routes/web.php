<?php
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);
Route::group([
    'middleware'=>['auth', 'twofactor']
], function () {
    Route::resource('/profile', 'ProfileController')->names('profile');
    Route::post('/profile', 'ProfileController@updatePassword')->name('changepassword');
    Route::post('/profile/update2fa', 'ProfileController@update2fa')->name('change2fa');
    Route::get('/home', 'HomeController@index')->name('home');
});