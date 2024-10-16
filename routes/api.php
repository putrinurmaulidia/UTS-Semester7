<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GuruController;
use App\Http\Controllers\API\KelasController;
use App\Http\Controllers\API\SiswaController;
use App\Http\Controllers\API\AbsensiController;
use App\Http\Controllers\API\TeacherClassController;

// Route untuk cek user yang login
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API Resource untuk Guru (users)
Route::apiResource('/guru', GuruController::class);

// API Resource untuk Kelas
Route::apiResource('/kelas', KelasController::class);

// API Resource untuk Siswa
Route::apiResource('/siswa', SiswaController::class);

// API Resource untuk Absensi
Route::apiResource('/absensi', AbsensiController::class);

// Rute untuk Many-to-Many Relasi Guru <-> Kelas
Route::get('/guru/{guru}/kelas', [TeacherClassController::class, 'index']);
Route::post('/guru/{guru}/kelas/{kelas}', [TeacherClassController::class, 'attach']);
Route::delete('/guru/{guru}/kelas/{kelas}', [TeacherClassController::class, 'detach']);
