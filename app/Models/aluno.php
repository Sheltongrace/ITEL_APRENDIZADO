<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_aluno';

    protected $fillable = [
        'id_curso',
        'processo',
        'classe',
        'genero',
        'id_usuario'
    ];
}
