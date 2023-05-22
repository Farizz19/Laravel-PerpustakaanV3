<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CetakKartuController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\DataPenggunaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', [AuthController::class, 'indexlogin']);

// TAMPIL PENGGUNA
Route::get('/datapengguna', [DataPenggunaController::class, 'index']);
// TAMPIL PENGGUNA

// TAMBAH PENGGUNA
Route::get('/tambahpengguna', [DataPenggunaController::class, 'tambah']);
Route::post('/simpanpengguna', [DataPenggunaController::class, 'simpanpengguna']);
// TAMBAH PENGGUNA

// HAPUS PENGGUNA
Route::delete('/hapuspengguna/{user_id}', [DataPenggunaController::class, 'hapuspengguna']);
// HAPUS PENGGUNA

// UBAH PENGGUNA
Route::get('/ubahpengguna/{user_id}', [DataPenggunaController::class, 'ubahpengguna']);
Route::post('/simpanubahpengguna/{user_id}', [DataPenggunaController::class, 'simpanubahpengguna']);
// UBAH PENGGUNA

// ANGGOTA
Route::get('/cetakkartu', [CetakKartuController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'index']);
// ANGGOTA

// BUKU
Route::get('/databuku', [DataBukuController::class, 'index']);
// BUKU

// PEMINJAMAN DAN PENGEMBALIAN
Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/pengembalian', [PengembalianController::class, 'index']);
// PEMINJAMAN DAN PENGEMBALIAN

// LOGIN DAN LOGOUT
// Route::group(['middleware' => ''], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
// });
// LOGIN DAN LOGOUT