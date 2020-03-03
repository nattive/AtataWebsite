<?php

use Illuminate\Http\Request;

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


Route::get('products/', 'ProductController@index')->name('product.all');
Route::get('product/{id}', 'ProductController@show')->name('product.show');
Route::post('seller/register', 'sellerController@create')->name('seller.create');

Route::group(['prefix' => 'auth'], function ($router) {
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');
});
    // Route::get('product/{Supplier_id}/{id}', 'ProductController@index')->name('product.bySupplier');
