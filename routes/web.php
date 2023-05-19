<?php

use Illuminate\Support\Facades\Route;
//php artisan serve

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CidadeController;
    
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quemsomos', function() {
    $nome = 'Rodrigo Escobar';

    return view('quemsomos', 
    [
        'nome_completo' => $nome
    ] );
});

Route::group(['prefix' => 'produto'], function(){
    Route::get('/', [ProdutoController::class, 'index']);
    route::get('/novo_produto', [ProdutoController::class, 'novo_produto']);
    route::post('/salvar_novo', [ProdutoController::class, 'salvar_novo']);
    route::get('/excluir/{id}', [ProdutoController::class, 'excluir']);
    route::get('/editar/{id}', [ProdutoController::class, 'editar']);
    route::post('/salvar_alteracao', [ProdutoController::class, 'salvar_alteracao']);
});

Route::group(['prefix' => 'cliente'], function(){
    Route::get('/', [ClienteController::class, 'index']);
    route::get('/novo_cliente', [ClienteController::class, 'novo_cliente']);
    route::post('/salvar_novo', [ClienteController::class, 'salvar_novo']);
    route::get('/excluir/{id}', [ClienteController::class, 'excluir']);
    route::get('/editar/{id}', [ClienteController::class, 'editar']);
    route::post('/salvar_alteracao', [ClienteController::class, 'salvar_alteracao']);
});

Route::group(['prefix' => 'cidade'], function(){
    Route::get('/', [CidadeController::class, 'index']);
    route::get('/novo_cidade', [CidadeController::class, 'novo_cidade']);
    route::post('/salvar_novo', [CidadeController::class, 'salvar_novo']);
    route::get('/excluir/{id}', [CidadeController::class, 'excluir']);
    route::get('/editar/{id}', [CidadeController::class, 'editar']);
    route::post('/salvar_alteracao', [CidadeController::class, 'salvar_alteracao']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
