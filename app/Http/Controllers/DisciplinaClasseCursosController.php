<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisciplinaClasseCurso;

class DisciplinaClasseCursosController extends Controller
{
    public function index()
    {
        $disciplinaClasseCursos = DisciplinaClasseCurso::all();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        DisciplinaClasseCurso::create($request->all());
    }

    public function show($id)
    {
        $disciplinaClasseCurso = DisciplinaClasseCurso::findOrFail($id);
    }

    public function edit($id)
    {
        $disciplinaClasseCurso = DisciplinaClasseCurso::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $disciplinaClasseCurso = DisciplinaClasseCurso::findOrFail($id);
        $disciplinaClasseCurso->update($request->all());
    }

    public function destroy($id)
    {
        $disciplinaClasseCurso = DisciplinaClasseCurso::findOrFail($id);
        $disciplinaClasseCurso->delete();
    }
}
