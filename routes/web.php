<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;

// Ruta para la página principal
Route::get('/', function () {
<<<<<<< HEAD
    return view('luxury.index');
=======
    return view('auth.login');
>>>>>>> 977696dd6a836f8d3a232f785072450b83be50f0
});

// Rutas públicas
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/usuarios/registro', [UsuarioController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
});

// Rutas protegidas
Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});