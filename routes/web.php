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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('admin1','AdminController');
Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('rental','MobilController');
Auth::routes();

Route::get('/home', 'MobilController@index')->name('home');

Route::resource('PPL','PplController');
Auth::routes();

Route::get('/ppl', 'PplController@index')->name('ppl');

Route::resource('bayar','TransaksiController');
Auth::routes();

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');

Route::resource('custom','CustomerController');
Auth::routes();

Route::get('/customer', 'CustomerController@index')->name('customer');

Route::resource('pinjam','PeminjamanController');
Auth::routes();

Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman');

Route::resource('bayaran','PembayaranController');
Auth::routes();

Route::get('/pembayaran', 'PembayaranController@index')->name('pembayaran');
