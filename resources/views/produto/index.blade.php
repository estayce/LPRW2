@extends('layouts.main')

@section('content')
<head>
    <h1> Produtos </h1>
</head>

<div class="form-group">

<div>
    <a href='/produto/novo_produto' class='btn btn-success'> Novo </a>
    <a href='/cliente' class='btn btn-default'> Cliente </a>
</div>
    <table class ="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Preço</td>
            <td>Estoque</td>  
            <td>Peso</td>   
            <td>Opcoes</td>    
        </thead>


    <tbody>
        <?php
            foreach($lista as $linha)
            {
                echo "<tr>" .
                        "<td>" . $linha['id'] . "</td>" .
                        "<td>" . $linha['nome'] . "</td>" .
                        "<td>" . $linha['preco'] . "</td>" .
                        "<td>" . $linha['quantidade'] . "</td>" .
                        "<td>" . $linha['peso'] . "</td>" .
                        "<td> 
                        <a href='/produto/editar/" . $linha['id'] . "' class='btn btn-default'>
                            <i class='fas fa-edit'> </i>
                            <span> Editar </span>
                            </span>

                        <a href='/produto/excluir/" . $linha['id'] . "' class='btn btn-danger'>
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