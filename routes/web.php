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
        Route::get('/', 'DashboardController@viewManagement')->name('dashboard');
        Route::get('management', 'DashboardController@viewManagement')->name('management');

        Route::get('add-admin', 'AdminController@addAdmin')->name('add-admin');
        Route::get('view-admin', 'AdminController@viewAdmin')->name('view-admin');
        Route::post('add-admin-action', 'AdminController@addAdminAction')->name('add-admin-action');
        Route::get('edit-admin/{id}', 'AdminController@editAdmin')->name('edit-admin');
        Route::post('edit-admin-action/{id}', 'AdminController@editAdminAction')->name('edit-admin-action');
        Route::get('delete-admin/{id}', 'AdminController@deleteAdmin')->name('delete-admin');

        Route::get('add-service', 'ServiceTypeController@addService')->name('add-service');
        Route::get('view-service', 'ServiceTypeController@viewService')->name('view-service');
        Route::post('add-service', 'ServiceTypeController@addServiceAction')->name('add-service');
        Route::get('delete-service/{id}', 'ServiceTypeController@deleteService')->name('delete-service');
        Route::get('edit-service/{id}', 'ServiceTypeController@editService')->name('edit-service');
        Route::post('edit-service-action/{id}', 'ServiceTypeController@editServiceAction')->name('edit-service-action');


        Route::get('add-order-status', 'OrderStatusController@addOrderStatus')->name('add-order-status');
        Route::post('add-order-status', 'OrderStatusController@addOrderStatusAction')->name('add-order-status');
        Route::get('view-order-status', 'OrderStatusController@viewOrderStatus')->name('view-order-status');
        Route::get('edit-order-status/{id}', 'OrderStatusController@editOrderStatus')->name('edit-order-status');
        Route::get('delete-order-status/{id}', 'OrderStatusController@deleteOrderStatus')->name('delete-order-status');

        Route::get('view-orders', 'OrderController@getAllOrders')->name('view-orders');

    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
