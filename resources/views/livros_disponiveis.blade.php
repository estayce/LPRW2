@extends('layouts.adimin.main')

@section('content')
    <h1>Livros Disponíveis para Aluguel</h1>

    @foreach($livros as $livro)
        <div>
            <h2>{{ $livro->titulo }}</h2>
            <p>Autor: {{ $livro->autor }}</p>
            <p>Gênero: {{ $livro->genero }}</p>
            <p>ISBN: {{ $livro->isbn }}</p>
            <p>Coleção: {{ $livro->colecao }}</p>
            <p>Tombo: {{ $livro->tombo }}</p>

            @if($livro->alugado)
                <p>Status: Indisponível para Aluguel</p>
            @else
                <form method="POST" action="{{ route('emprestimos.store') }}">
                    @csrf
                    <input type="hidden" name="livro_id" value="{{ $livro->id }}">
                    <input type="hidden" name="data_retirada" value="{{ now()->format('Y-m-d') }}">
                    <input type="hidden" name="data_devolucao" value="{{ now()->addDays(7)->format('Y-m-d') }}">
                    <button type="submit">Alugar</button>
                </form>
            @endif
        </div>
        <hr>
    @endforeach
@endsection
