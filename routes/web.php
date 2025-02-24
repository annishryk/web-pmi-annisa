<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\PendaftaranPasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/pasien/daftar', [PendaftaranPasienController::class, 'daftar']);
// Route::get('/pasien/daftar', [PendaftaranPasienController::class, 'daftar']);
Route::post('/registrasi/kunjungan', [RegistrasiController::class, 'daftarKunjungan']);

// Route::get('/registrasi', [RegistrasiController::class, 'index']);
// Route::post('/registrasi', [RegistrasiController::class, 'store']);
