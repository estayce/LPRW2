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
    <h2> Cadastro de Cliente</h2>
    <form action="/cliente/salvar_novo" method="post">
    <td>
    <td class="container">
        <label>Nome</label>
        <input type="text" name="nome"/>
        <p>
       </p>

</td>
<td class="container">
    <label>Sobrenome</label>
        <input type="text" name="sobrenome"/>
        <p>
       </p>
</td>
<td class="container">
    <label>CPF</label>
        <input type="int" name="cpf"/>
        <p>
       </p>
</td>
       <a href='/cliente' class='btn btn-default'> Voltar </a>
       <input type="submit"> 

</form>
</body>
</html>




@endsection