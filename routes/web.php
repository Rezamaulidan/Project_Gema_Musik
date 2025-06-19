<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfilController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Gunakan controller untuk jadwal dan profil
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
