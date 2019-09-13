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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/catalog/{id}', 'ProductController@product_with_cat');
Route::resource('/catalog', 'ProductController');
Route::get('/catalog/', 'ProductController@post_index')->name('product.filtr');
//Route::post('/catalog/filtr', 'AjaxController')->name('product.ajax');
Route::get('my-theme', function () {
    return view('welcome2');
});

Route::get('/catalog/filtr', 'AjaxController@ajaxRequest');

Route::post('/catalog/filtr', 'AjaxController@ajaxRequestPost');
Auth::routes();

/*Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::resource('/admin-products', ['uses' => 'admin\AdminController@show'])->name('admin_index');
});*/

Route::resource('/admin-products', 'AdminproductController')->middleware('auth');
Route::resource('/admin-cathegories', 'AdmincathegoryController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
