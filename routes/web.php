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

Route::get('deliveryform', function () {
    return view('vendo.deliveryform');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('order', function() {
    return view('customer.order');
});
Route::get('payment', function() {
    return view('customer.payment');
});
Route::get('message', function() {
    return view('customer.message');
});
