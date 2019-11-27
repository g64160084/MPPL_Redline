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

Route::get('/sewa', 'sewaController@index')->name('sewa');

Auth::routes();

Route::get('/sewa/create', 'sewaController@create');

Auth::routes();

Route::get('/penyewaan', 'penyewaanController@view')->middleware('userbiasa');

Auth::routes();

Route::get('/admin', 'adminController@view')->middleware('admin');

Auth::routes();

Route::get('/admin/{id}/{uid}/approve','adminController@approve')->middleware('admin');

Auth::routes();

Route::get('/admin/{id}/cancel','adminController@cancel')->middleware('admin');

Auth::routes();

Route::post('/penyewaan/create','penyewaanController@create');

Auth::routes();

Route::get('/garage','penyewaanDashboardController@view')->middleware('penyewa');

Auth::routes();

Route::post('/garage/create','penyewaanDashboardController@create');

Auth::routes();

Route::get('/sewa/{id}', 'sewaController@detail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
