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
    <h2>Editar o cidade</h2>
    <form action="/cidade/salvar_alteracao" method="post">
    <input type="hidden" name="id" value="{{$cidade ['id'] }}" />

<div>
    <td class="name">
        <label>Nome</label>
        <input type="text" name="nome" value='{{$cidade["nome"]}}' />
        <p>
       </p>
</div>

    <div class="name">
        <label>Nome</label>
        <input type="text"  name="preco" value='{{$cidade["nome"]}}'/>
        <p>
       </p>
</div>

    <div class="name">
        <label>Cep</label>
        <input type="text" name="quantidade" value='{{$cidade["cep"]}}'/>
        <p>
       </p>
</div>

    
<div>
       <a href='/cidade' class='btn btn-default'> Voltar </a>
       <input type="submit"> 
</div>

</form>
</body>
</html>




@endsection