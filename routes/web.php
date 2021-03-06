<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomepageController@index');
Route::get('/about', 'HomepageController@about');
Route::get('/kontak', 'HomepageController@kontak');
Route::get('/kategori', 'HomepageController@kategori');
Route::get('/kategori/{slug}', 'HomepageController@produkperkategori');
Route::get('/produk', 'HomepageController@produk');
Route::get('/produk/{slug}', 'HomepageController@produkdetail');

Route::middleware(['auth'])->group(function () {
  Route::middleware(['role:Admin'])->group(function () {
  Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'DashboardController@index');
    // route kategori
    Route::resource('kategori', 'KategoriController');
    // route produk
    Route::resource('produk', 'ProdukController');
    // route customer
    Route::resource('customer', 'CustomerController');
    // route transaksi
    Route::resource('transaksi', 'TransaksiController');
    // profil
    Route::get('profil', 'UserController@index');
    // setting profil
    Route::get('setting', 'UserController@setting');
    // form laporan
    Route::get('laporan', 'LaporanController@index');
    // proses laporan
    Route::get('proseslaporan', 'LaporanController@proses');
  });    
});
    
});

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
