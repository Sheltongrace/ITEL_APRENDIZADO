<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
     return view('admin.aluno.index');
    }
    public function create()
    {
        $todosCurso= Curso::all();
         return view('admin.aluno.create',compact("todosCurso"));
    }
    public function show()
    {
     return view('admin.aluno.detalhes');
    }
}
