<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() 
    {
        $produtos = Produto::all()->toArray();

        return view('produto.index',
        ['lista' => $produtos]
    );
    }

    public function novo_produto() {
        return view('produto.novo_produto');
    }
    
    public function salvar_novo(Request $dados) {
        $produto = new produto;
        $produto->nome = $dados->input("nome");
        $produto->preco = $dados->input("preco");
        $produto->quantidade = $dados->input("quantidade");
        $produto->peso = $dados->input("peso");
        $produto->save();

    return redirect ('/produto');
    }

    public function editar($id) {
        $produto = Produto::find($id)->toArray();
        return view('produto.editar',
        ['produto' => $produto]);
    }    

    public function salvar_alteracao(Request $request) {
        $id = $request->input("id");
        
        $produto = Produto::find($id);
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->peso = $request->input('peso');
        $produto->save();

    return redirect ('/produto');
    }

    public function excluir($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect ('/produto');
    }

}
