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

Route::get('/', 'FrontController@welcome');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', 'HomeController@user');
    Route::resource('product', 'ProductController');

    Route::get('/home', 'HomeController@index')->name('home');
});
Route::resource('order', 'OrderController');
Route::get('/succes', 'FrontController@invoice')->name('invoice');
Route::get('/getDataProduct', 'FrontController@product')->name('getDataProduct');
Route::get('/getDataOrder', 'FrontController@order')->name('getDataOrder');
Route::get('/getDataP', 'FrontController@data')->name('getDataP');
Route::get('/getDataO', 'FrontController@datao')->name('getDataO');

Auth::routes();
