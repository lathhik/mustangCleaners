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


Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('index');

    Route::get('customer-login-form', 'CustomerController@index')->name('customer-login-form');
    Route::get('customer-register', 'CustomerController@register')->name('customer-register');
    Route::post('customer-register', 'CustomerController@registerAction')->name('customer-register');
    Route::post('customer-login', 'CustomerAuthController@loginAction')->name('customer-login');
    Route::get('customer-logout', 'CustomerAuthController@logout')->name('customer-logout');


    Route::group(['middleware' => 'auth:customer'], function () {
        Route::get('customer-order', 'HomeController@viewOrderPage')->name('customer-order');
        Route::post('customer-order', 'CustomerOrderController@customerOrder')->name('customer-order');
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () {

    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('admin-login', 'AdminAuthController@index')->name('admin-login');
        Route::post('admin-login', 'AdminAuthController@loginAction');
    });
    Route::get('admin-logout', 'AdminAuthController@logOut')->name('admin-logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('management', 'DashboardController@viewManagement')->name('management');

        Route::get('add-admin', 'AdminController@addAdmin')->name('add-admin');
        Route::get('view-admin', 'AdminController@viewAdmin')->name('view-admin');
        Route::post('add-admin-action', 'AdminController@addAdminAction')->name('add-admin-action');
        Route::get('edit-admin/{id}', 'AdminController@editAdmin')->name('edit-admin');
        Route::post('edit-admin-action/{id}', 'AdminController@editAdminAction')->name('edit-admin-action');
        Route::get('delete-admin/{}', 'AdminController@deleteAdmin')->name('delete-admin');

        Route::get('add-service', 'ServiceTypeController@addService')->name('add-service');
        Route::get('view-service', 'ServiceTypeController@viewService')->name('view-service');




    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
