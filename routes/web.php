<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TesteController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;

Route::get('/', [LivroController::class, 'index']);
Route::get('/quemsomos', [TesteController::class, 'quemsomos']);
Route::get('/regrasdeuso', [TesteController::class, 'regrasdeuso']);
Route::get('/contato', [TesteController::class, 'contato']);

Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');
Route::get('/livros/{livro}', [LivroController::class, 'show'])->name('livros.show');
Route::get('/livros/{livro}/edit', [LivroController::class, 'edit'])->name('livros.edit');
Route::put('/livros/{livro}', [LivroController::class, 'update'])->name('livros.update');
Route::delete('/livros/{emprestimo}', [LivroController::class, 'destroy'])->name('livros.destroy');
Route::put('/livros/{livro}/alterar-disponibilidade', [LivroController::class, 'alterarDisponibilidade'])->name('livros.alterarDisponibilidade');


Route::middleware('auth')->group(function () {
    Route::get('/emprestimos', [EmprestimoController::class, 'index'])->name('emprestimos.index');
    Route::get('/emprestimos/create', [EmprestimoController::class, 'create'])->name('emprestimos.create');
    Route::post('/emprestimos', [EmprestimoController::class, 'store'])->name('emprestimos.store');
    Route::get('/emprestimos/{emprestimo}', [EmprestimoController::class, 'show'])->name('emprestimos.show');
    Route::get('/emprestimos/{emprestimo}/edit', [EmprestimoController::class, 'edit'])->name('emprestimos.edit');
    Route::put('/emprestimos/{emprestimo}', [EmprestimoController::class, 'update'])->name('emprestimos.update');
    Route::delete('/emprestimos/{emprestimo}', [EmprestimoController::class, 'destroy'])->name('emprestimos.destroy');
    Route::put('/emprestimos/{emprestimo}/marcar-devolucao', [EmprestimoController::class, 'marcarDevolucao'])->name('emprestimos.marcar-devolucao');
});
