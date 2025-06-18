<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pendaftaran', function () {
//     return view('form_pendaftaran');
// });

Route::get('/pendaftaran', [PendaftaranController::class, 'showForm'])->name('pendaftaran.form');