<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emprestimo;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'isbn',
        'colecao',
        'tombo',
        'alugado'
    ];

    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }
}
