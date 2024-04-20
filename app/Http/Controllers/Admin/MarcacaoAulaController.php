<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class marcacaoAulaController extends Controller
{
    public function index() { 
        return view('admin.Marcacao_Aula.aula');
    }
}
