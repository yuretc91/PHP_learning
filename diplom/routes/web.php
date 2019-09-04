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
Route::get('/catalog/{id}', 'ProductController@product_with_cat');
Route::get('/catalog/{id}/{color}/{gyroscope}/{microphone}/{accelerometer}', 'ProductController@product_with_cat');
Route::resource('/catalog', 'ProductController');
Route::post('/catalog/', 'ProductController@post_index')->name('product.filtr');

