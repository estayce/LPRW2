@extends('layouts.site.main')

@section('content')
    <h1>Devolver Livro</h1>

    <form action="{{ route('emprestimos.marcar-devolucao', $emprestimo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>Livro: {{ $emprestimo->livro->titulo }}</p>
        <p>Data Retirada: {{ $emprestimo->data_retirada }}</p>
        <p>Data Devolução: {{ $emprestimo->data_devolucao }}</p>

        <div class="form-group">
            <label for="data_devolucao">Data de Devolução Real:</label>
            <input type="date" id="data_devolucao" name="data_devolucao" required>
        </div>

        <button type="submit">Registrar Devolução</button>
    </form>
@endsection
