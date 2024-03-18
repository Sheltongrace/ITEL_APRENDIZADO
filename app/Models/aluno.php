<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    use HasFactory;  
protected $filleble=[
    '_token',
    'nome',
    'n_processo',
    'ano_lectivo',
];
}
