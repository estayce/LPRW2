<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();

        return view('livros.index', compact('livros'));
    }
    
    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'genero' => 'required',
            'isbn' => 'required',
            'tombo' => 'required',
        ]);

        $livro = Livro::create([
            'titulo' => $request->input('titulo'),
            'autor' => $request->input('autor'),
            'genero' => $request->input('genero'),
            'isbn' => $request->input('isbn'),
            'colecao' => $request->input('colecao'),
            'tombo' => $request->input('tombo'),
            'alugado' => $request->has('alugado'),
        ]);

        return redirect()->route('livros.index')->with('success', 'Livro cadastrado com sucesso!');
    }
}
