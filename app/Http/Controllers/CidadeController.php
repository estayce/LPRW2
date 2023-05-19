<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cidade;

class cidadeController extends Controller
{
    public function index() 
    {
        $cidades = cidade::all()->toArray();

        return view('cidade.index',
        ['lista' => $cidades]
    );
    }

    public function novo_cidade() {
        return view('cidade.novo_cidade');
    }
    
    public function salvar_novo(Request $dados) {
        $cidade = new cidade;
        $cidade->nome = $dados->input("nome");
        $cidade->estado = $dados->input("estado");
        $cidade->save();

    return redirect ('/cidade');
    }

    public function editar($id) {
        $cidade = cidade::find($id)->toArray();
        return view('cidade.editar',
        ['cidade' => $cidade]);
    }    

    public function salvar_alteracao(Request $request) {
        $id = $request->input("id");
        
        $cidade = cidade::find($id);
        $cidade->nome = $request->input('nome');
        $cidade->estado = $request->input('estado');
        $cidade->save();

    return redirect ('/cidade');
    }

    public function excluir($id) {
        $cidade = cidade::find($id);
        $cidade->delete();
        return redirect ('/cidade');
    }

}
