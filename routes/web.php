<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfilController;

// Halaman utama (tetap)
Route::get('/', function () {
    return view('welcome');
});

// GUNAKAN CONTROLLER untuk jadwal dan profil
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/profil/edit', [ProfilController::class, 'edit']); // opsional edit profil
