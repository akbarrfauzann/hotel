<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataKamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DataReservasiController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\FasilitasKamarController;

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

Route::get('/',[App\Http\Controllers\FasilitasKamarController::class, 'homepage'] )->name('home');

Route::resource('/pesanReservasi', PemesananController::class);

Route::resource('dataKamar', DataKamarController::class);
Route::resource('fasilitasHotel', FasilitasHotelController::class);
Route::resource('fasilitasKamar', FasilitasKamarController::class);

Route::get('/dataReservasi', [DataReservasiController::class, 'index']);
Route::get('/dataReservasi/search', [DataReservasiController::class, 'cari']);
Route::get('/dataReservasi/filter', [DataReservasiController::class, 'tanggal']);

Route::get('/cetak', [PemesananController::class, 'cetakBukti']);


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();
Route::get('/dataKamar', [HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
Route::get('/dataReservasi' , [App\Http\Controllers\HomeController::class, 'resepsionis'])->name('home');
