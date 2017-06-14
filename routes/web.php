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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin_home', 'AdminHomeController@index')->name('admin_home');
Route::get('admin_login','AdminAuth\LoginController@showLoginForm')->name('admin_login');
Route::post('admin_login','AdminAuth\LoginController@login');//->name('admin_login');
Route::post('admin_logout','AdminAuth\LoginController@logout');//->name('admin_logout');

Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('admin_password/request','AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin_password.request');
Route::post('admin_password/reset','AdminAuth\ForgotPasswordController@reset');
Route::post('admin_password/reset/{token}','AdminAuth\ForgotPasswordController@showResetForm');

Route::get('admin_register','AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin_register','AdminAuth\RegisterController@register');

Route::get('home', 'HomeController@index')->name('home');

