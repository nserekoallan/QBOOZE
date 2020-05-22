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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('deliveryform', function () {
    return view('vendo.deliveryform');
});
Route::get('customersu', function () {
    return view('auth.customersignup');
});

Route::get('vendorsu', function () {
    return view('auth.vendorsignup');
});


Auth::routes();




Route::view('contact', 'customer.contact');
Route::view('home', 'customer.home');

//order routes
Route::get('orders', 'OrdersController@list');
Route::post('orders', 'OrdersController@store');

Route::get('history', 'OrdersController@list');

//product routes
Route::get('products', 'ProductsController@list');
Route::post('products', 'ProductsController@store');

//Route::get('contact', 'ProductsController@list');
Route::get('catalogue', 'ProductsController@list');
