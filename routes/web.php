<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;

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

Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/pegawai', [HomeController::class, 'pegawai'])->name('pegawai');
    Route::get('/kurir', [HomeController::class, 'kurir'])->name('kurir');
    Route::get('/transaksi', [HomeController::class, 'transaksi'])->name('transaksi');
});
Route::resource('barangs', BarangController::class);
Route::resource('pegawais', PegawaiController::class);
Route::resource('kurirs', KurirController::class);
Route::resource('transaksis', TransaksiController::class);
Route::get('transaksis/cetak_pdf/{transaksis}', [TransaksiController::class, 'cetak_pdf'])->name('transaksis.cetak_pdf');