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

Route::get('/stok', function () {
    return view('stok');
});

Route::get('/barang/tambah', function () {
    return view('barang.tambah_barang');
});

// Barang
Route::get('/stok','BarangController@stok');
Route::get('/barang','BarangController@barang');
Route::post('/barang/add','BarangController@add');
Route::get('/barang/{id}','BarangController@edit');
Route::post('/barang/update','BarangController@update');
Route::get('/barang/hapus/{id}','BarangController@delete');

// Penjualan
Route::get('/penjualan','PenjualanController@penjualan');
Route::get('/penjualan/tambah','PenjualanController@pt');
Route::post('/penjualan/add','PenjualanController@add');

// Barang Masuk
Route::get('/barangmasuk','BMasukController@barang_masuk');
Route::get('/barangmasuk/tambah','BMasukController@pt');