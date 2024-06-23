<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ContactoController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::delete('/personas/{persona}', [PersonaController::class, 'destroy'])->name('personas.destroy');
Route::get('/personas/{persona}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::put('/personas/{persona}', [PersonaController::class, 'update'])->name('personas.update');
