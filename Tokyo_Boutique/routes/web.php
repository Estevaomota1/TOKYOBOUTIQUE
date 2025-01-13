<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DesejosController;
use App\Http\Controllers\ContaController;

// Rota Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Rotas de Produtos
Route::prefix('produtos')->group(function () {
    Route::get('/create', [ProdutoController::class, 'create'])->name('produtos.create'); // Exibe o formulário de criação
    Route::post('/store', [ProdutoController::class, 'store'])->name('produtos.store');  // Armazena o produto no banco
});


// Rotas de Desejos
Route::get('/desejos', [DesejosController::class, 'index'])->name('desejos'); // Exibe a página de desejos
Route::get('/conta', [ContaController::class, 'index'])->name('conta.index'); //pagina de criar conta
