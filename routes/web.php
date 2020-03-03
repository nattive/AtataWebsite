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

// Route::get('/', 'sellerNavigation@index');
Route::get('/{any}', 'sellerNavigation@index')->where('any', '.*');
// Route::get('auth', 'AuthController@authpage');
// Route::get('Seller/register/{id}', 'sellerNavigation@register');
// Route::get('product/add', 'sellerNavigation@addProduct')->name('supplier.addProduct');
// Route::get('product/manage', 'sellerNavigation@manageProduct')->name('supplier.manageProduct');
// Route::get('/product', function () {
//     return vieapow('product');
// });
