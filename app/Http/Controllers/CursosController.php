<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        Curso::create($request->all());
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
