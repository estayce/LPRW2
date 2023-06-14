@extends('layouts.site.main')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            <h1>Catálogo de Livros</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Gênero</th>
                        <th>ISBN</th>
                        <th>Coleção</th>
                        <th>Tombo</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->autor }}</td>
                        <td>{{ $livro->genero }}</td>
                        <td>{{ $livro->isbn }}</td>
                        <td>{{ $livro->colecao }}</td>
                        <td>{{ $livro->tombo }}</td>
                        <td>
                            @if($livro->alugado)
                            Indisponível para Aluguel
                            @else
                            Disponível para Aluguel
                            @endif
                        </td>
                        <td>
                            @if(!$livro->alugado)
                            <a href="{{ route('emprestimos.create', ['livro_id' => $livro->id]) }}">Alugar</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection