<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_name',
        'N_telemovel',
        'email',
        'identificador_fiscal',
        'categoria',
        'morada',
        'senha'
    ];

    // O método getPasswordAttribute retorna a senha criptografada
    public function getAuthPassword()
    {
        return $this->senha;
    }
}
