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
Route::get('/home', 'HomeController@index')->name('home');


Route::post('/logout', 'Auth\LoginController@logout')->name('user-logout');

Route::prefix('admin')->group(function () {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin-loginForm');
	Route::post('/login', 'Auth\AdminLoginController@saveLogin')->name('admin-login');
	Route::get('/', 'Auth\AdminController@index')->name('admin-dashboard');
	Route::post('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin-logout');
});
