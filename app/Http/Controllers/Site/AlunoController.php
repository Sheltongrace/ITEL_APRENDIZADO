<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\Formador;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $todasDisciplinas = Disciplina::all();
        return view('site.aluno', compact('todasDisciplinas'));
    }
}
