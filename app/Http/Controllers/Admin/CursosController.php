<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CursosController extends Controller
{

    public function index(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel'] = $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome') == null || $request->session()->get('nome') == '') {
            return Redirect::to('/');
        }
        $todosCursos = Curso::all();
        return view('admin.cursos.index', ['data' => $data], compact('todosCursos'));
    }

    public function create(Request $request)
    {
        Curso::create($request->all());
        $todosCurso = Curso::all();
        return view('admin.cursos.create_curso', compact('todosCurso'));
    }

    public function store(Request $request)
    {

        Curso::create($request->all);
        $todosCurso = Curso::all();
        return view('admin.cursos.create_curso', compact('todosCurso'));
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
    }
}
