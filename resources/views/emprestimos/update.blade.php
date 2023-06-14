@extends('layouts.admin.main')

@section('content')
<div class="container">
    <h1>Atualizar Empréstimo</h1>

    <form action="{{ route('emprestimos.update', $emprestimo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="livro_id">Livro:</label>
            <input type="text" id="livro_id" name="livro_id" value="{{ $emprestimo->livro_id }}" readonly>
        </div>

        <div class="form-group">
            <label for="data_retirada">Data de Retirada:</label>
            <input type="date" id="data_retirada" name="data_retirada" value="{{ $emprestimo->data_retirada }}" readonly>
        </div>

        <div class="form-group">
            <label for="data_devolucao">Data de Devolução:</label>
            <input type="date" id="data_devolucao" name="data_devolucao" value="{{ $emprestimo->data_devolucao }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Empréstimo</button>
    </form>
</div>
@endsection
