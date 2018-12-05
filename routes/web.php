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


//Zasoby
Route::resource('Product','productController');
Route::resource('User','userController');

//kontrola stron
Route::get('/','pagesController@index')->name('index');
Route::get('/logIndex','pagesController@log');
//konrola uzytkownika
Route::get('/my-profile','userController@index');
Route::get('/my-profile/Auth::id()/edit','userController@edit');

//kontrola koszyka
Route::post('/cart-add','cartController@addToCart');
Route::get('/cart-show','cartController@showcart')->name('show_cart');
Route::get('/delete/{rowId}','cartController@destroy')->name('item.delete');

//kontrola zamowien
Route::get('/order','orderController@index')->name('order.show');
Route::post('/order-complete','orderController@store')->name('order.store');
Route::get('/my-orders','orderController@show')->name('order.my');


//kontrola autoryzacji
Auth::routes();
Route::get('/home', 'pagesController@log')->name('home');
