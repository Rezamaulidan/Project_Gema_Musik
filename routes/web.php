<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pendaftaran', function () {
//     return view('form_pendaftaran');
// });

Route::get('/beranda', [HomeController::class, 'index']);

Route::get('/input_kode', [PendaftaranController::class, 'showinputKode'])->name('input_kode.form');
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
