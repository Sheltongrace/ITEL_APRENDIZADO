<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcacaoAula extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_aluno',
        'id_disciplina',
        'preco_disciplina',
    ];
    
}
