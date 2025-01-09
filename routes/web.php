<?php

use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

// guest routers
Route::middleware('guest')->group(function () {
    ## login router
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/check-login', [LoginController::class, 'authenticate'])->name('check-login');
    ## user's routers
    Route::get('/register', [UserController::class, 'create'])->name('user.create');
    Route::post('/procces-register', [UserController::class, 'store'])->name('user.store');
});


// auth routers
Route::middleware('auth')->group(function () {
    ## logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    ## user's routers
    Route::get('/', [UserController::class, 'index'])->name('user.index');
});