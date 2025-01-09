<?php

use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/check-login', [LoginController::class, 'authenticate'])->name('check-login');


// user's routers
Route::get('/', [UserController::class, 'index'])->name('index');