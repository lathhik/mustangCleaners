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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () {

    Route::get('admin-login', 'AdminAuthController@index')->name('admin-login');
    Route::post('admin-login', 'AdminAuthController@loginAction');
    Route::get('admin-logout', 'AdminAuthController@logOut')->name('admin-logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('add-admin', 'AdminController@addAdmin')->name('add-admin');
        Route::get('view-admin', 'AdminController@viewAdmin')->name('view-admin');
        Route::post('add-admin-action', 'AdminController@addAdminAction')->name('add-admin-action');
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
