@extends('layouts.admin.main')

@section('content')
<div class="container">
    <h1>Lista de Empréstimos</h1>

    <a href="{{ route('livros.index') }}" class="btn btn-primary mb-3">Ver Livros Disponíveis</a>

    @if (count($emprestimos) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Gênero</th>
                <th>ISBN</th>
                <th>Coleção</th>
                <th>Tombo</th>
                <th>Data Retirada</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emprestimos as $emprestimo)
            <tr>
                <td>{{ $emprestimo->livro->titulo }}</td>
                <td>{{ $emprestimo->livro->autor }}</td>
                <td>{{ $emprestimo->livro->genero }}</td>
                <td>{{ $emprestimo->livro->isbn }}</td>
                <td>{{ $emprestimo->livro->colecao }}</td>
                <td>{{ $emprestimo->livro->tombo }}</td>
                <td>{{ $emprestimo->data_retirada }}</td>
                @if($emprestimo->devolvido)
                Devolvido em {{ $emprestimo->data_devolucao }}
                @else
                Pendente
                @endif
                </td>
                <td>
                    <a href="{{ route('emprestimos.show', $emprestimo->id) }}" class="btn btn-primary">Detalhes</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Nenhum empréstimo registrado.</p>
    @endif
</div>
@endsection