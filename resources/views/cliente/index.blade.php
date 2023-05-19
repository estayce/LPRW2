@extends('layouts.main')

@section('content')
<head>
    <h1> Clientes </h1>
</head>

<div class="form-group">

<div>
    <a href='/cliente/novo_cliente' class='btn btn-success'> Novo </a>
    <a href='/produto' class='btn btn-default'> Produto </a>
</div>
    <table class ="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Sobrenome</td> 
            <td>CPF<td>
        </thead>


    <tbody>
        <?php
            foreach($lista as $linha)
            {
                echo "<tr>" .
                        "<td>" . $linha['id'] . "</td>" .
                        "<td>" . $linha['nome'] . "</td>" .
                        "<td>" . $linha['sobrenome'] . "</td>" .
                        "<td>" . $linha['cpf'] . "</td>" .
                        "<td> 
                        <a href='/cliente/editar/" . $linha['id'] . "' class='btn btn-default'>
                            <i class='fas fa-edit'> </i>
                            <span> Editar </span>
                            </span>

                        <a href='/cliente/excluir/" . $linha['id'] . "' class='btn btn-danger'>
                        <i class='fas fa-trash'> </i>
                        <span> Excluir </span>
                        </a>

                        </td>" .
                    "</tr>"; 
            }
        ?>
    </tbody>
    </table>
@endsection