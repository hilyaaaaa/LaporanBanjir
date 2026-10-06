<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);  

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Hilya';
});


Route::get('/user/{name}', function ($Hilya) {
    return "Nama saya $Hilya";
});

Route::get('/greet/{name}', function ($Hilya = 'Hilya') {
    return "Halo $Hilya";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('about', function () {
    return view('about', ['name' => 'Hilya']);
});

Route::get('/home', function () {
    return 'Halo, ini adalah halaman home';
})->name('home');