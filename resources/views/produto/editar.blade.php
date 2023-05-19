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
    <h2>Editar o Produto</h2>
    <form action="/produto/salvar_alteracao" method="post">
    <input type="hidden" name="id" value="{{$produto ['id'] }}" />

<div>
    <td class="name">
        <label>Nome</label>
        <input type="text" name="nome" value='{{$produto["nome"]}}' />
        <p>
       </p>
</div>

    <div class="name">
        <label>Preço</label>
        <input type="text"  name="preco" value='{{$produto["preco"]}}'/>
        <p>
       </p>
</div>

    <div class="name">
        <label>Estoque</label>
        <input type="text" name="quantidade" value='{{$produto["quantidade"]}}'/>
        <p>
       </p>
</div>

    <div class="name">
        <label>Peso</label>
        <input type="text" name="peso" value='{{$produto["peso"]}}'/>
        <p>
       </p>
</div>

<div>
       <a href='/produto' class='btn btn-default'> Voltar </a>
       <input type="submit"> 
</div>

</form>
</body>
</html>




@endsection