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
    return view('welcome')->name('home');
});
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

/*Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/products', ['uses' => 'admin\AdminproductController@index'])->name('admin_products');
    Route::get('/cathegories', ['uses' => 'admin\AdmincathegoryController@index'])->name('admin_cathegories');
});*/

Route::resource('/admin-products', 'AdminproductController')->middleware('auth');
Route::resource('/admin-cathegories', 'AdmincathegoryController')->middleware('auth');
Route::resource('/admin-properties', 'PropertyController')->middleware('auth');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
