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
Route::get('/view', function () {
    return view('backend/master');
});

Route::get('/test',function (){
   return view('test');
});
Route::get('/come',function (){
   return view('backend/pages/admin/add-admin');
});