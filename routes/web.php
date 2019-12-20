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

Route::get('/', 'HomeController@index');
Route::get('/checkout', 'HomeController@checkout');
Route::get('/all-invoice', 'InvoiceController@index')->name('all-invoice');
Route::get('/all-invoice-list', 'InvoiceController@listAll')->name('all-invoice-list');
Route::get('/order-invoice/{orderId}', 'InvoiceController@viewInvoice')->name('invoice');
Route::get('/invoice/{orderId}', 'InvoiceController@show')->name('invoice-view');
Route::get('/carts', 'CartController@getIndex');
Route::resource('/cart','CartController');
//Route::get('{path}',"HomeController@index")->where('path', '([A-z\d-\/_.]+)?');
