<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClasseCurso;

class ClasseCursosController extends Controller
{
    public function index()
    {
        $classeCursos = ClasseCurso::all();
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        ClasseCurso::create($request->all());
    }

    public function show($id)
    {
        $classeCurso = ClasseCurso::findOrFail($id);
    }

    public function edit($id)
    {
        $classeCurso = ClasseCurso::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $classeCurso = ClasseCurso::findOrFail($id);
        $classeCurso->update($request->all());
    }

    public function destroy($id)
    {
        $classeCurso = ClasseCurso::findOrFail($id);
        $classeCurso->delete();
    }
}
