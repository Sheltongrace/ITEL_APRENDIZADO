<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'nome',
        'N_telemovel',
        'email',
        'identificador_fiscal',
        'nivel_acesso',
    ];
    
}
