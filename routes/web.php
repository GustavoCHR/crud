<?php

use App\Http\Controllers\JogosController;
use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('jogos', JogosController::class);
Route::resource('categorias', CategoriasController::class);

Route::get('/', function () {
    return view('principal');
});

//Rotas para a lista de jogos
/*
Route::prefix('jogos')->group(function () {
    Route::get('/', [JogosController::class, 'index'])->name('jogos.index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos.create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos.store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos.edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos.update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos.destroy');
    Route::delete('/jogo-selecionado', [JogosController::class, 'destroyAll'])->where('id', '[0-9]+')->name('jogos.destroyAll');
});
*/

//Rotas para a lista de categorias
/*
Route::prefix('categorias')->group(function () {
    Route::get('/', [CategoriasController::class, 'index'])->name('categorias.index');
    Route::get('/create', [CategoriasController::class, 'create'])->name('categorias.create');
    Route::post('/', [CategoriasController::class, 'store'])->name('categorias.store');
    Route::get('/{id}/edit', [CategoriasController::class, 'edit'])->where('id', '[0-9]+')->name('categorias.edit');
    Route::put('/{id}', [CategoriasController::class, 'update'])->where('id', '[0-9]+')->name('categorias.update');
    Route::delete('/{id}', [CategoriasController::class, 'destroy'])->where('id', '[0-9]+')->name('categorias.destroy');
});
*/

Route::fallback(function () {
    return view('erro');
});
