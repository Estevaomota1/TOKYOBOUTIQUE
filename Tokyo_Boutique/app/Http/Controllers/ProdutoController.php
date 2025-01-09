<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria; // Supondo que você tenha uma tabela de categorias
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Função para listar os produtos
    public function index()
    {
        $produtos = Produto::all(); // Lista de todos os produtos
        return view('produtos.index', compact('produtos'));
    }

    // Função para listar categorias
    public function listarCategorias()
    {
        // Se você tem categorias no banco de dados, pode usar:
        // $categorias = Categoria::all();

        // Ou se for uma lista estática:
        $categorias = [
            'Eletrônicos',
            'Vestuário',
            'Beleza',
            'Esportes'
        ];
        
        return view('categorias', compact('categorias'));
    }

    // Função para criar um novo produto
    public function create()
    {
        return view('produtos.create');
    }

    // Função para armazenar um novo produto
    public function store(Request $request)
    {
        // Validação e criação do produto
        $validated = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'imagem' => 'required|image',
        ]);

        // Criando o produto
        Produto::create([
            'nome' => $validated['nome'],
            'descricao' => $validated['descricao'],
            'preco' => $validated['preco'],
            'imagem' => $validated['imagem']->store('produtos', 'public'),
        ]);

        return redirect()->route('produtos')->with('success', 'Produto cadastrado com sucesso!');
    }

    // Função para editar um produto
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    // Função para atualizar um produto
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        // Validação e atualização do produto
        $validated = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image',
        ]);

        $produto->update([
            'nome' => $validated['nome'],
            'descricao' => $validated['descricao'],
            'preco' => $validated['preco'],
            'imagem' => $request->hasFile('imagem') ? $validated['imagem']->store('produtos', 'public') : $produto->imagem,
        ]);

        return redirect()->route('produtos')->with('success', 'Produto atualizado com sucesso!');
    }

    // Função para deletar um produto
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos')->with('success', 'Produto removido com sucesso!');
    }
}
