<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//customer Routes
Route::post('customers', 'AdminController@store');
Route::get('customers', 'AdminController@index');
Route::get('customer/{id}', 'AdminController@show');
Route::put('customer/{id}', 'AdminController@update');

Route::post('vendor', 'VendorController@store');
Route::get('vendors', 'VendorController@index');
Route::get('vendor/{id}', 'VendorController@show');
Route::put('vendor/{id}', 'VendorController@update');

Route::post('brewers', 'BrewerController@store');
Route::get('brewers', 'BrewerController@index');
Route::get('brewer/{id}', 'BrewerController@show');
Route::put('brewer/{id}', 'BrewerController@update');

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::get('customerCatalogue', 'CustomerCatalogueController@index');
Route::post('customerCatalogue', 'CustomerCatalogueController@store');

Route::get('vendorCatalogue', 'VendorCatalogueController@index');
Route::post('vendorCatalogue', 'VendorCatalogueController@store');


//Brewer routes


//Admin routes


//Vendor routes
