<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formador;
use App\Models\MarcacaoAula;
use Illuminate\Http\Request;

class AquisicaoController extends Controller
{
    public function index()
    {
        $professores= Formador::join("usuarios","formadors.id_usuario","usuarios.id_usuario")->
        select("formadors.*","usuarios.*")->get();

       return view('site.Aquisicao1',compact('professores'));
    }
}
