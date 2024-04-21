<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Formador;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $professores = Formador::join("usuarios", "formadors.id_usuario", "usuarios.id_usuario")->select("formadors.*", "usuarios.*")->get();
        return view('site.aluno',compact('professores'));
    }
}
