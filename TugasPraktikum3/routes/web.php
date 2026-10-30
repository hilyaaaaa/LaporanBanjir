
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

// Halaman utama
Route::get('/', function () {
    return redirect()->route('form');
});

// Form pelaporan (bisa diakses tanpa login)
Route::get('/form', [LaporanController::class, 'form'])->name('form');
Route::post('/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('konfirmasi');

// Registrasi
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.proses');

// Login
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');

// Halaman khusus petugas
Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporanController::class, 'laporan'])->name('laporan');

    Route::get('/profil', function () {
        return view('profil');
    })->name('profil');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
