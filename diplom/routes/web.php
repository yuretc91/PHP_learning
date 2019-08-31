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
Route::get('/catalog/{id}', function () {
    return view('catalog');
});


Route::get('/cathegory-anekdots/{id}', 'AnekdotController@with_cathegory')->name('cathegory-anekdots');