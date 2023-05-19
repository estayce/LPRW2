<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index() 
    {
        $clientes = Cliente::all()->toArray();

        return view('cliente.index',
        ['lista' => $clientes]
    );
    }
    public function novo_cliente() {
        return view('cliente.novo_cliente');
    }
    
    public function salvar_novo(Request $dados) {
        $cliente = new Cliente;
        $cliente->nome = $dados->input("nome");
        $cliente->sobrenome = $dados->input("sobrenome");
        $cliente->cpf = $dados->input("cpf");
        $cliente->save();

    return redirect ('/cliente');
    }

    public function editar($id) {
        $cliente = Cliente::find($id)->toArray();
        return view('cliente.editar',
        ['cliente' => $cliente]);
    }    

    public function salvar_alteracao(Request $request) {
        $id = $request->input("id");
        
        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('nome');
        $cliente->sobrenome = $request->input('sobrenome');
        $cliente->cpf = $request->input('cpf');
        $cliente->save();

    return redirect ('/cliente');
    }

    public function excluir($id) {
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect ('/cliente');
    }
}
