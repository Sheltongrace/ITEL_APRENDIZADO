<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'user_name',
        'N_telemovel',
        'email',
        'identificador_fiscal',
        'categoria',
    ];
    
}
