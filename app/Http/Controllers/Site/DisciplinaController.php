<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {

        $todasDisciplina = Disciplina::all();
        return view('site.disciplina',compact('todasDisciplina'));
    }
}
