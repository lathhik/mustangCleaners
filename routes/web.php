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
    Route::get('about', 'HomeController@about')->name('about');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::post('message', 'HomeController@message')->name('message');
    Route::get('contact#contact-form')->name('message_error');

    Route::post('customer-register', 'CustomerController@registerAction')->name('customer-register');
    Route::post('customer-login', 'CustomerAuthController@loginAction')->name('customer-login');
    Route::get('customer-logout', 'CustomerAuthController@logout')->name('customer-logout');

    Route::group(['middleware' => 'auth:customer'], function () {
        Route::get('dashboard', 'HomeController@dashboard')->name('customer-dashboard');
        Route::get('customer-order', 'HomeController@viewOrderPage')->name('customer-order');
        Route::post('customer-order', 'CustomerOrderController@customerOrder')->name('customer-order');


// Ajax Routes
        Route::post('add-item-cart', 'ItemCartController@addItemCart')->name('add-item-cart');
        Route::post('add-to-cart', 'ItemCartController@addToCart')->name('add-to-cart');
        Route::delete('delete-item-cart', 'ItemCartController@deleteItemCart')->name('delete-item-cart');
        Route::patch('update-item-cart', 'ItemCartController@updateItemCart')->name('update-item-cart');
        Route::post('order-details', 'CustomerOrderController@orderDetails')->name('order-details');
    });


});

Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () {

    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('admin-login', 'AdminAuthController@index')->name('admin-login');
        Route::post('admin-login', 'AdminAuthController@loginAction');
    });

    Route::get('password-reset-email', 'AdminPasswordResetController@showResetForm')->name('reset-password-email');
    Route::post('admin-email', 'AdminPasswordResetController@adminEmail')->name('admin-email');
    Route::get('password-reset/{token}', 'AdminPasswordResetController@passwordReset')->name('password-reset');
    Route::post('password-reset-action', 'AdminPasswordResetController@resetAction')->name('password-reset-action');

    Route::get('admin-logout', 'AdminAuthController@logOut')->name('admin-logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');

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

        Route::get('view-items', 'ItemListController@index')->name('view-items');
        Route::post('add-item', 'ItemListController@addItem')->name('add-item');
        Route::get('edit-item/{id}', 'ItemListController@editItem')->name('edit-item');
        Route::post('edit-item-action/{id}', 'ItemListController@editItemAction')->name('edit-item-action');
        Route::get('delete-item/{id}', 'ItemListController@deleteItem')->name('delete-item');

        Route::get('add-order-status', 'OrderStatusController@addOrderStatus')->name('add-order-status');
        Route::post('add-order-status', 'OrderStatusController@addOrderStatusAction')->name('add-order-status');
        Route::get('view-order-status', 'OrderStatusController@viewOrderStatus')->name('view-order-status');
        Route::get('edit-order-status/{id}', 'OrderStatusController@editOrderStatus')->name('edit-order-status');
        Route::get('delete-order-status/{id}', 'OrderStatusController@deleteOrderStatus')->name('delete-order-status');

        Route::get('view-orders', 'OrderController@getAllOrders')->name('view-orders');
        Route::get('update-order/{id}', 'OrderController@updateOrderStatus')->name('update-order-status');

        Route::get('view-bags', 'BagController@viewBag')->name('view-bags');
        Route::post('add-bag', 'BagController@addBag')->name('add-bag');
        Route::get('edit-bag/{id}', 'BagController@editBag')->name('edit-bag');
        Route::post('edit-bag-action/{id}', 'BagController@editBagAction')->name('edit-bag-action');
        Route::get('delete-bag/{id}', 'BagController@deleteBag')->name('delete-bag');

        Route::get('view-testimonial', 'TestimonialController@viewTesti')->name('view-testimonial');
        Route::post('add-testi-action', 'TestimonialController@addTestiAction')->name('add-testi-action');
        Route::get('view-testimonial#add-testi-error', 'TestimonialController@viewTesti')->name('testi-validation-error');
        Route::get('delete-testimonial/{id}', 'TestimonialController@deleteTestimonial')->name('delete-testimonial');
        Route::get('edit-testimonial/{id}', 'TestimonialController@editTesti')->name('edit-testimonial');
        Route::post('edit-testi-action/{id}', 'TestimonialController@editTestiAction')->name('edit-testi-action');

        Route::get('view-image-home', 'ImageController@viewImage')->name('view-image');
        Route::post('add-image', 'ImageController@addImage')->name('add-image');
        Route::get('delete-image/{id}', 'ImageController@deleteImage')->name('delete-image');
        Route::get('edit-image/{id}', 'ImageController@editImage')->name('edit-image');
        Route::post('edit-image-action/{id}', 'ImageController@editImageAction')->name('edit-image-action');
        Route::get('update-image-priority/{id}', 'ImageController@updateImagePriority')->name('update-image-priority');

        Route::get('view-heading', 'HeadingController@viewHeading')->name('view-heading');
        Route::post('add-heading', 'HeadingController@addHeading')->name('add-heading');
        Route::get('edit-heading/{id}', 'HeadingController@editHeading')->name('edit-heading');
        Route::post('edit-heading-action/{id}', 'HeadingController@editHeadingAction')->name('edit-heading-action');
        Route::get('delete-heading/{id}', 'HeadingController@deleteHeading')->name('delete-heading');


        // Ajax Routez
        Route::post('delivery_time', "OrderController@deliveryTime")->name('delivery_time');
        Route::post('order-details', 'OrderController@orderDetails')->name('order-details');

    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
