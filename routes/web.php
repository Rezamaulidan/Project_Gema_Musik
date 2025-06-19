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

use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class, 'awal']);

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']); // Tambahkan ini

Route::get('/register', [SignUpController::class, 'showSignUpForm'])->name('register');

Route::get('/logout', function () {
    Auth::logout();
    return view('logout');
})->name('logout');


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
