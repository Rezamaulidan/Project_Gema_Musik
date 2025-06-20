<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProgramController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index'])->name('about');

Route::get('/program-unggulan', [ProgramController::class, 'index'])->name('program.index');
Route::get('/program-unggulan/{id}', [ProgramController::class, 'show'])->name('program.show');

