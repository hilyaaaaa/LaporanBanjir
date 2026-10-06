<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return redirect()->route('form');
});

Route::get('/form', [LaporanController::class, 'form'])
    ->name('form');

Route::post('/konfirmasi', [LaporanController::class, 'konfirmasi'])
    ->name('konfirmasi');

Route::get('/laporan', [LaporanController::class, 'laporan'])
    ->name('laporan');