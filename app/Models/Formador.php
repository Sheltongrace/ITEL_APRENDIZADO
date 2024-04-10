<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formador extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_formador',
        'id_usuario',
        'nivel_academico',
        'genero',
        'tempo_disponivel',
        'descricao',
        'imagem'
    ];
}
