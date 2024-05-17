<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view("admin.cursos_admin.index_cursos");
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        Curso::create($request->all());
        $todosCursos = Curso::all();
        return redirect()->route('admin.cursos', compact('todosCursos'));
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
    }


    public function edit($id)
    {
        // $curso = Curso::findOrFail($id);
        $todosCursos = Curso::all();
        return view("admin.cursos.edit_curso", compact('todosCursos'));
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        $todosCursos = Curso::all();
        return view('admin.cursos.index', compact('todosCursos'));
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        $todosCursos = Curso::all();
        return redirect()->back();
    }
}
