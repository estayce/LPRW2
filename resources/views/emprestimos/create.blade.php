@extends('layouts.admin.main')

@section('content')
    <h1>Reservar livros</h1>

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

        <input type="hidden" name="alugado" value="1">

        <button type="submit">Confirmar Locação</button>
    </form>
@endsection

