<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ContactoController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/personas', [PersonaController::class, 'index'])->name('personas');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

