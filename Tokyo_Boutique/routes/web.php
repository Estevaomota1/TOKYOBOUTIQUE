<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DesejosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rota para a página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Rota para a página de desejos
Route::get('/desejos', [DesejosController::class, 'index'])->name('desejos');

// Rota para a página de categorias
Route::get('/categorias', [ProdutoController::class, 'listarCategorias'])->name('categorias');

// Rota para cadastrar produtos
Route::get('/cadastrar-produto', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/cadastrar-produto', [ProdutoController::class, 'store'])->name('salvar.produto');

// Rota para a página de produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');

// Rota para editar produtos
Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');

// Rota para atualizar produtos
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('atualizar.produto');

// Rota para excluir produtos
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
