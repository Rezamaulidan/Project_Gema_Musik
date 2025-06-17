<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);
