@extends('layouts.admin.main')

@section('content')
    <h1>Locação de Livro</h1>

    <form method="POST" action="{{ route('emprestimos.store') }}">
        @csrf

        <div>
            <label for="livro_id">Livro:</label>
            <select name="livro_id" id="livro_id">
                @foreach($livros as $livro)
                    <option value="{{ $livro->id }}">{{ $livro->titulo }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="data_retirada">Data de Retirada:</label>
            <input type="date" name="data_retirada" id="data_retirada" required>
        </div>

        <div>
            <label for="data_devolucao">Data de Devolução:</label>
            <input type="date" name="data_devolucao" id="data_devolucao" required>
        </div>

        <button type="submit">Confirmar Locação</button>
    </form>
@endsection
