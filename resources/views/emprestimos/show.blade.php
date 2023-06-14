@extends('layouts.admin.main')

@section('content')
    <h1>Detalhes do Empréstimo</h1>

    <div>
        <p>ID: {{ $emprestimo->id }}</p>
        <p>Livro: {{ $emprestimo->livro->titulo }}</p>
        <p>Data de Retirada: {{ $emprestimo->data_retirada }}</p>
        <p>Data de Devolução: {{ $emprestimo->data_devolucao }}</p>
        <p>Data de Devolução Real: {{ $emprestimo->data_devolucao}}</p>

        @if ($emprestimo->devolvido)
            <p>Status: Devolvido</p>
        @else
            <p>Status: Pendente</p>
        @endif
    </div>

    <a href="{{ route('emprestimos.index') }}">Voltar</a>
@endsection
