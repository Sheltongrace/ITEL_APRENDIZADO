<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AlunoController extends Controller
{
    public function index(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel']= $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
          return Redirect::to('/');
        }
        $alunos = Aluno::select('alunos.*','usuarios.*')
            //->join('cursos', 'alunos.id_curso', '=', 'cursos.id_curso')
            ->join('usuarios', 'alunos.id_usuario', '=', 'usuarios.id_usuario')
            ->get();
      
        return view('admin.aluno.index',['data'=> $data],compact('alunos'));
    }
    public function create(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel']= $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
          return Redirect::to('/');
        }
        $todosCurso = Curso::all();
        return view('admin.aluno.create', ['data'=> $data],compact('todosCurso'));
    }
    public function show(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel']= $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
          return Redirect::to('/');
        }
        return view('admin.aluno.detalhes',['data'=> $data]);
    }
   
   
}
