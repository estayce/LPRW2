<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $emprestimos = $user->emprestimos;

        return view('emprestimos.index', compact('emprestimos'));
    }

    public function create()
    {
        $livros = Livro::where('alugado', false)->get();

        return view('emprestimos.create', compact('livros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'livro_id' => 'required',
            'data_retirada' => 'required',
        ]);

        $emprestimo = Emprestimo::create([
            'livro_id' => $request->input('livro_id'),
            'user_id' => Auth::id(),
            'data_retirada' => $request->input('data_retirada'),
        ]);

        $livro = Livro::findOrFail($request->input('livro_id'));
        $livro->alugado = true;
        $livro->save();

        return redirect()->route('emprestimos.show', $emprestimo->id)->with('success', 'Empréstimo criado com sucesso!');
    }

    public function show($id)
    {
        $emprestimo = Auth::user()->emprestimos()->findOrFail($id);

        return view('emprestimos.show', compact('emprestimo'));
    }

    public function edit($id)
    {
        $emprestimo = Auth::user()->emprestimos()->findOrFail($id);

        // Recuperar os livros disponíveis para exibir no formulário de edição
        $livros = Livro::where('alugado', false)->get();

        return view('emprestimos.edit', compact('emprestimo', 'livros'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'livro_id' => 'required',
            'data_retirada' => 'required',
            'data_devolucao' => 'required',
        ]);

        $emprestimo = Auth::user()->emprestimos()->findOrFail($id);

        $emprestimo->livro_id = $request->input('livro_id');
        $emprestimo->data_retirada = $request->input('data_retirada');
        $emprestimo->data_devolucao = $request->input('data_devolucao');
        $emprestimo->save();

        return redirect()->route('emprestimos.show', $emprestimo->id)->with('success', 'Empréstimo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $emprestimo = Auth::user()->emprestimos()->findOrFail($id);

        $livro = $emprestimo->livro;
        $livro->alugado = false;
        $livro->save();

        $emprestimo->delete();

        return redirect()->route('emprestimos.index')->with('success', 'Empréstimo excluído com sucesso!');
    }

    public function devolver($id)
    {
        $emprestimo = Auth::user()->emprestimos()->findOrFail($id);

        return view('emprestimos.devolver', compact('emprestimo'));
    }

    public function marcarDevolucao(Request $request, $id)
    {
        $request->validate([
            'data_devolucao' => 'required|date',
        ]);

        $emprestimo = Auth::user()->emprestimos()->findOrFail($id);

        $emprestimo->data_devolucao = $request->input('data_devolucao');
        $emprestimo->devolvido = true;
        $emprestimo->save();

        // Atualizar o status do livro para disponível
        $livro = $emprestimo->livro;
        $livro->alugado = false;
        $livro->save();

        return redirect()->route('emprestimos.index')->with('success', 'Devolução registrada com sucesso!');
    }
}
