<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::select('alunos.*', 'cursos.*', 'usuarios.*')
            ->join('cursos', 'alunos.id_curso', '=', 'cursos.id_curso')
            ->join('usuarios', 'alunos.id_usuario', '=', 'usuarios.id_usuario')
            ->get();

        return view('admin.aluno.index',compact('alunos'));
    }
    public function create()
    {
        $todosCurso = Curso::all();
        return view('admin.aluno.create', compact("todosCurso"));
    }
    public function show()
    {
        return view('admin.aluno.detalhes');
    }
}
