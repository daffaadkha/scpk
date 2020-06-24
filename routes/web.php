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
    return view ('welcome');
});

Route::get('halo', function() {
	return "Halo, Selamat datan di tutorial laravel";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('statusgizi', 'StatusGiziController@statusgizi');

Route::get('/data_barang','BarangController@index');

Route::get('/data_barang/tambah','BarangController@tambah');

Route::post('/data_barang/store','BarangController@store');

Route::get('/data_barang/edit/{id}','BarangController@edit');

Route::post('/data_barang/update','BarangController@update');

Route::get('/data_barang/hapus/{id}','BarangController@hapus');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
