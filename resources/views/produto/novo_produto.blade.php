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
    <h2> Cadastro de Produto</h2>
    <form action="/produto/salvar_novo" method="post">
    <td>
    <td class="name">
        <label>Nome</label>
        <input type="text" name="nome"/>
        <p>
       </p>

</td>
    <td class="email">
        <label for="email">Preço</label>
        <input type="text"  name="preco"/>
        <p>
       </p>
</td>
<div className="container" id="container-home" >
        <label for="mensagem">Estoque</label>
        <input type="text" name="quantidade"/>
        <p>
       </p>
</div>
<div className="container" id="container-home" >
        <label for="mensagem">Peso</label>
        <input type="text" name="peso"/>
        <p>
       </p>
</div>
       <a href='/produto' class='btn btn-default'> Voltar </a>
       <input type="submit"> 

</form>
</body>
</html>




@endsection