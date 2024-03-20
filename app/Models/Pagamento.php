<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_marcacao_aula',
        'id_meses',
        'id_semana',
        'estado',
    ];    
}
