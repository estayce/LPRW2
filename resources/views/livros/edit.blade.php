@extends('layouts.admin.main')

@section('content')
<div class="container">
    <h1>Editar Livro</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $livro->titulo }}">
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $livro->autor }}">
        </div>

        <div class="form-group">
            <label for="genero">Gênero:</label>
            <input type="text" class="form-control" id="genero" name="genero" value="{{ $livro->genero }}">
        </div>

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $livro->isbn }}">
        </div>

        <div class="form-group">
            <label for="colecao">Coleção:</label>
            <input type="text" class="form-control" id="colecao" name="colecao" value="{{ $livro->colecao }}">
        </div>

        <div class="form-group">
            <label for="tombo">Tombo:</label>
            <input type="text" class="form-control" id="tombo" name="tombo" value="{{ $livro->tombo }}">
        </div>


        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('livros.update', $livro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $livro->titulo }}">
            </div>

            <!-- Outros campos do livro aqui... -->

            <div class="form-group">
                <label for="alugado">Disponibilidade:</label>
                <select class="form-control" id="alugado" name="alugado">
                    <option value="0" {{ $livro->alugado ? '' : 'selected' }}>Disponível</option>
                    <option value="1" {{ $livro->alugado ? 'selected' : '' }}>Alugado</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
</div>
@endsection