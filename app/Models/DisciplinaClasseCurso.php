<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplinaClasseCurso extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_classe_curso',
        'id_disciplina',
        'id_formador',
        'preco_curso',
    ];
    
}
