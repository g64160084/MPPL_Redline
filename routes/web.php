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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/sewa', 'sewaController@index')->name('sewa');

Route::get('/sewa/create', 'sewaController@create');

Auth::routes();

Route::get('/penyewaan', 'penyewaanController@view')->name('penyewaan');

Auth::routes();

Route::get('/admin', 'adminController@view')->name('admin');

Route::get('/admin/{id}/approve','adminController@approve');

Route::get('/admin/{id}/cancel','adminController@cancel');

Route::post('/penyewaan/create','penyewaanController@create');

Route::get('/garage','penyewaanController@kendaraan');

Route::post('/garage/create','sewaController@create');
