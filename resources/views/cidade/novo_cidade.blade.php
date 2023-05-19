@extends('layouts.main')

@section('title')

@section('content')

<html>

<head>
    <meta charset="iso-8859-1">

    <link rel="stylesheet" href="style.css" media="all" />

    <script 
    src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>

</head>
<body>
    <div>
    <h2> Cadastro de cidade</h2>
    <form action="/cidade/salvar_novo" method="post">
    <td>
    <td class="name">
        <label>Nome</label>
        <input type="text" name="nome"/>
        <p>
       </p>

</td>

</td>
<td>
<label for="estado">Estado</label>
<select name="estado" id="estado">
<option value="">Selecione um estado</option>
<?php
     $estados = DB::table('estado')->get();
 ?>
@foreach($estados as $estado)
<option value="{{ $estado->sigla }}">{{ $estado->nome }}</option>
@endforeach
</select>

<button type="submit">Enviar</button>
<button type="reset">Limpar</button>

<a href="/cidade" class="btn btn-default">Voltar</a>

</form>
</body>
</html>




@endsection