<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praktikum', function () {
    return 'Hello, Kayla';
});