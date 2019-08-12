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

Route::resource('/anekdots', 'AnekdotController');
Route::get('/', 'AnekdotController@mainPage')->name('main.page');
Route::get('/cathegory-anekdots/{id}', 'AnekdotController@with_cathegory')->name('cathegory-anekdots');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
