<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Exibe o formulário para adicionar um novo produto.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Salva o novo produto no banco de dados.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validação básica (adapte conforme necessário)
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
        ]);

        // Cria um novo produto e salva no banco
        $produto = new Produto();
        $produto->nome = $validated['nome'];
        $produto->descricao = $validated['descricao'];
        $produto->preco = $validated['preco'];
        $produto->save();

        // Redireciona para a página de categorias com uma mensagem de sucesso
        return redirect()->route('categorias')->with('success', 'Produto adicionado com sucesso!');
    }
}
