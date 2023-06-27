<?php

use App\Http\Controllers\JogosController;
use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::resource('jogos', JogosController::class);
Route::resource('categorias', CategoriasController::class);

Route::fallback(function () {
    return view('erro');
});
