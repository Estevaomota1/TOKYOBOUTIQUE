<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController; // Importação do ProdutoController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/desejos', function () {
    return view('desejos'); // Certifique-se de ter o arquivo desejos.blade.php
});

Route::get('/conta', function () {
    return view('conta'); // Certifique-se de ter o arquivo conta.blade.php
});

// Rotas relacionadas aos produtos
Route::resource('produtos', ProdutoController::class);
Route::get('/produtos/adicionar', [ProdutoController::class, 'create'])->name('produtos.create');
