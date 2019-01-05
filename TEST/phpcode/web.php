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

Route::resource('admin/address', 'Admin\\AddressController');
Route::resource('admin/cart', 'Admin\\CartController');
Route::resource('admin/collection', 'Admin\\CollectionController');
Route::resource('admin/order', 'Admin\\OrderController');
Route::resource('admin/product', 'Admin\\ProductController');
Route::resource('admin/testing', 'Admin\\testingController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/shop_address', 'Admin\\Shop_addressController');
Route::resource('admin/cart', 'Admin\\CartController');
Route::resource('admin/cart', 'Admin\\CartController');
Route::resource('admin/cart', 'Admin\\CartController');
Route::resource('admin/collection', 'Admin\\CollectionController');
Route::resource('admin/order', 'Admin\\OrderController');
Route::resource('admin/order', 'Admin\\OrderController');
Route::resource('admin/laptop_info', 'Admin\\Laptop_infoController');
Route::resource('admin/type', 'Admin\\TypeController');
Route::resource('admin/printer_info', 'Admin\\Printer_infoController');
Route::resource('admin/brand', 'Admin\\BrandController');