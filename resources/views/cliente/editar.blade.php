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
    <h2>Editar o cliente</h2>
    <form action="/cliente/salvar_alteracao" method="post">
    <input type="hidden" name="id" value="{{$cliente ['id'] }}" />

<div>
    <td class="name">
        <label>Nome</label>
        <input type="text" name="nome" value='{{$cliente["nome"]}}' />
        <p>
       </p>
</div>

    <div class="name">
        <label>Preço</label>
        <input type="text"  name="sobrenome" value='{{$cliente["sobrenome"]}}'/>
        <p>
       </p>
</div>

    <div class="name">
        <label>Estoque</label>
        <input type="text" name="cpf" value='{{$cliente["cpf"]}}'/>
        <p>
       </p>
</div>

<div>
       <a href='/cliente' class='btn btn-default'> Voltar </a>
       <input type="submit"> 
</div>

</form>
</body>
</html>




@endsection