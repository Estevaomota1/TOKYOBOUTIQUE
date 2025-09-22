<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
 
    public function create()
    {
        return view('produtos.create');
    }


    public function store(Request $request)
    {
   
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
        ]);

        $produto = new Produto();
        $produto->nome = $validated['nome'];
        $produto->descricao = $validated['descricao'];
        $produto->preco = $validated['preco'];
        $produto->save();

        return redirect()->route('categorias')->with('success', 'Produto adicionado com sucesso!');
    }
}
