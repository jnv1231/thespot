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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Products
Route::resource('/products', 'ProductController');
Route::get('/products/index', 'ProductController@index');
Route::post('/products/create', 'ProductController@create');

//Time
Route::get('/time', 'TimeController@time')->name('time');
Route::get('/timetable', 'TimeController@index')->name('timetable');
