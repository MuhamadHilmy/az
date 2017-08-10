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

Route::get('/barangmasuk', function () {
    return view('barangmasuk');
});

Route::get('/barang/tambah', function () {
    return view('tambah_barang');
});

Route::post('/barang/add','BarangController@add');
Route::get('/barang','BarangController@barang');
Route::get('/stok','BarangController@stok');
Route::get('/barang/{id}','BarangController@edit');
Route::get('/barang/hapus/{id}','BarangController@delete');
Route::post('/barang/update','BarangController@update');
Route::get('/penjualan','BarangController@penjualan');
Route::post('/penjualan/add','BarangController@add_penjualan');
Route::post('/penjualan/add','BarangController@penjualan');
Route::get('/penjualan/tambah','BarangController@pt');