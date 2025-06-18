<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\SignUpController;

Route::get('/', [PageController::class, 'awal']);

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');

Route::get('/register', [SignUpController::class, 'showSignUpForm'])->name('register');







