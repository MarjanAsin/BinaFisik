<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('landing');
})->name('landing');

/*
|--------------------------------------------------------------------------
| Auth Fallback (WAJIB untuk modal login)
|--------------------------------------------------------------------------
| Laravel auth middleware akan redirect ke route bernama "login" (GET).
| Karena login pakai MODAL, kita redirect balik ke landing + trigger modal.
*/
Route::get('/login', function () {
    return redirect()
        ->route('landing')
        ->with('showLogin', true);
})->name('login');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/beranda', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('beranda');

/*
|--------------------------------------------------------------------------
| Kalkulator (Protected)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/kalkulator', [KalkulatorController::class, 'show'])
        ->name('kalkulator.show');

    Route::post('/kalkulator/hitung', [KalkulatorController::class, 'hitung'])
        ->name('kalkulator.hitung');
});

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/
Route::get('/pelatihan', function () {
    return view('pelatihan');
})->name('pelatihan');

Route::get('/info-pendaftaran', function () {
    return view('info_pendaftaran');
})->name('info_pendaftaran');

Route::get('/lokasi', function () {
    return view('lokasi');
})->name('lokasi');

/*
|--------------------------------------------------------------------------
| Auth Actions (POST ONLY)
|--------------------------------------------------------------------------
*/
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');
