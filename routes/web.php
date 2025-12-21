<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Landing page
Route::get('/', function () {
    return view('landing');   // resources/views/landing.blade.php
})->name('landing');



Route::get('/beranda', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('beranda');



Route::middleware('auth')->group(function () {
    Route::get('/kalkulator', [KalkulatorController::class, 'show'])->name('kalkulator.show');
    Route::post('/kalkulator/hitung', [KalkulatorController::class, 'hitung'])->name('kalkulator.hitung');
});


// Halaman Program Pelatihan
Route::get('/pelatihan', function () {
    return view('pelatihan'); // resources/views/pelatihan.blade.php
})->name('pelatihan');

// Halaman Info Pendaftaran
Route::get('/info-pendaftaran', function () {
    return view('info_pendaftaran'); // resources/views/info_pendaftaran.blade.php
})->name('info_pendaftaran');

// Halaman Lokasi
Route::get('/lokasi', function () {
    return view('lokasi'); // resources/views/lokasi.blade.php
})->name('lokasi');




// AUTH
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



