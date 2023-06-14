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

    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro'));
    }

    public function livrosAlugados()
    {
        $livrosAlugados = Livro::where('alugado', true)->get();

        return view('livros.livros-alugados', compact('livrosAlugados'));
    }

    public function alterarDisponibilidade(Request $request, Livro $livro)
    {
        if ($request->input('alugado')) {
            $livro->alugado = true;
            $livro->data_devolucao = null; // Limpa a data de devolução, já que o livro foi alugado novamente
        } else {
            $livro->alugado = false;
            $livro->data_devolucao = now(); // Preenche automaticamente a data de devolução com o momento atual
        }

        $livro->save();

        return redirect()->route('livros.index')->with('success', 'Disponibilidade do livro alterada com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            // Outras validações dos campos do livro...
        ]);

        $livro = Livro::findOrFail($id);

        $livro->titulo = $request->input('titulo');
        // Atualize os outros campos do livro...

        $livro->alugado = $request->input('alugado', false); // Define o valor padrão como false (disponível)

        $livro->save();

        return redirect()->route('livros.show', $livro->id)->with('success', 'Livro atualizado com sucesso!');
    }

    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')->with('success', 'Livro excluído com sucesso!');
    }
}
