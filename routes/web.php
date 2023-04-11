<?php

use App\Http\Controllers\CetakKartu;
use App\Http\Controllers\Daftar;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DataBuku;
use App\Http\Controllers\Peminjaman;
use App\Http\Controllers\Pengembalian;
use Illuminate\Support\Facades\Route;

Route::get('/', [Dashboard::class, 'index']);

Route::get('/cetakkartu', [CetakKartu::class, 'index']);
Route::get('/daftar', [Daftar::class, 'index']);

Route::get('/databuku', [DataBuku::class, 'index']);

Route::get('/peminjaman', [Peminjaman::class, 'index']);
Route::get('/pengembalian', [Pengembalian::class, 'index']);