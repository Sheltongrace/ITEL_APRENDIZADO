<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_aluno';
    protected $filleble=[
        'id_curso',
        'processo',
        'classe',
        'genero',
        'id_usuario'
    ];
}







