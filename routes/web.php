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
    return view('index');
});




Route::group(['prefix' => 'supplier'], function () {
    
    Route::get('/admin', 'supplierAdminNavigator@dashboard')->name('supplier.dashboard');
    Route::get('/admin/product/manage', 'supplierAdminNavigator@manageProduct')->name('supplier.manageProduct');
    Route::get('/admin/product/add', 'supplierAdminNavigator@addProduct')->name('supplier.addProduct');
});
           
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
