<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/servicios/{opcional?}', function ($opcional = null) {
    return view('servicios', ['opcional' => $opcional]);
})->where('opcional', '[A-Za-z]+')->name('servicios');

Route::get('/proyectos/{opcional?}', function ($opcional = null) {
    return view('proyectos', ['opcional' => $opcional]);
})->where('opcional', '[A-Za-z]+')->name('proyectos');

Route::get('/clientes/{opcional?}', function ($opcional = null) {
    return view('clientes', ['opcional' => $opcional]);
})->where('opcional', '[A-Za-z]+')->name('clientes');

Route::get('/blog/{opcional?}', function ($opcional = null) {
    return view('blog', ['opcional' => $opcional]);
})->where('opcional', '[0-9]+')->name('blog');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
