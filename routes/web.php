<?php

use App\Http\Controllers\CetakKartuController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\DataPenggunaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/datapengguna', [DataPenggunaController::class, 'index']);
Route::get('/tambahpengguna', [DataPenggunaController::class, 'tambah']);


Route::get('/cetakkartu', [CetakKartuController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'index']);

Route::get('/databuku', [DataBukuController::class, 'index']);

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/pengembalian', [PengembalianController::class, 'index']);