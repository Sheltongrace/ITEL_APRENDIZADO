<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index() {
        $todasDiscipliona = Disciplina::all();
        return view('admin.disciplinas.index',compact('todasDiscipliona'));
    }
}
