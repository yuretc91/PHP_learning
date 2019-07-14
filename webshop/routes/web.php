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
Route::get('/cathegory-products/{id}', 'CathegoryController@getProducts')->name('cathegory.prod');

Route::resource('/products', 'ProductController');
Route::resource('/cathegories', 'CathegoryController');
Route::resource('/main-page', 'PageController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
