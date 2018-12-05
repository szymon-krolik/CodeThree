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



Route::resource('Product','productController');

Route::resource('User','userController');

Route::get('/','pagesController@index')->name('index');
Route::get('/logIndex','pagesController@log');
Route::get('/my-profile','userController@index');
Route::get('/my-profile/Auth::id()/edit','userController@edit');
//Route::get('/cart','cartController@show')->name('cart');
//Route::get('/Product/id/add','cartController@add')->name('cart_add');
Route::post('/cart-add','cartController@addToCart');
Route::get('/cart-show','cartController@showcart')->name('show_cart');
//Route::post('/cart-delete','cartController@delete')->name('delete_cart');
Route::get('/order','orderController@index')->name('order.show');
Route::post('/order-complete','orderController@store')->name('order.store');
//Route::get('/order','orderController@index');

Auth::routes();

Route::get('/home', 'pagesController@log')->name('home');
