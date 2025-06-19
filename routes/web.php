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