<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route Resource untuk Guru
Route::resource('guru', GuruController::class);

// Route Resource untuk Kelas
Route::resource('kelas', KelasController::class);

// Route Resource untuk Siswa
Route::resource('siswa', SiswaController::class);

// Route Resource untuk Absensi
Route::resource('absensi', AbsensiController::class);

// Route untuk menampilkan halaman statistik atau lainnya
Route::get('/dashboard', function () {
    return view('dashboard');
});
