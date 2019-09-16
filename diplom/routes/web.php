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
Route::get('/', 'ProductController@index');

//Route::get('/', 'HomeController@home')->name('home');
Route::get('/catalog/{id}', 'ProductController@product_with_cat');
Route::resource('/catalog', 'ProductController');
Route::get('/catalog/', 'ProductController@post_index')->name('product.filtr');
//Route::post('/catalog/filtr', 'AjaxController')->name('product.ajax');
Route::get('/admin', function () {
    return view('welcome2');
});

Route::get('/catalog/filtr', 'AjaxController@ajaxRequest');

Route::post('/catalog/filtr', 'AjaxController@ajaxRequestPost');
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::resource('/products', 'AdminproductController');
    Route::resource('/cathegories', 'AdmincathegoryController');
    Route::resource('/properties', 'PropertyController');
    Route::get('/test', 'PropertyController@test')->name('test.admin');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
