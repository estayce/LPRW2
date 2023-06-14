@extends('layouts.admin.main')

@section('content')
    <h1>Cadastrar Livro</h1>

    <form method="POST" action="{{ route('livros.store') }}">
        @csrf

        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required>
        </div>

        <div>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" required>
        </div>

        <div>
            <label for="genero">Gênero:</label>
            <input type="text" name="genero" id="genero" required>
        </div>

        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn" required>
        </div>

        <div>
            <label for="colecao">Coleção:</label>
            <input type="text" name="colecao" id="colecao">
        </div>

        <div>
            <label for="tombo">Tombo:</label>
            <input type="text" name="tombo" id="tombo" required>
        </div>

        <div>
            <label for="alugado">Alugado:</label>
            <input type="checkbox" name="alugado" id="alugado">
        </div>

        <button type="submit">Cadastrar</button>
    </form>
@endsection
