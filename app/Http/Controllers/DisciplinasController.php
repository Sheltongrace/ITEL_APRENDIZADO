<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinasController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::all();
        echo view("admin.disciplinas_admin.index_disciplinas");

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        Disciplina::create($request->all());
    }

    public function show($id)
    {
        $disciplina = Disciplina::findOrFail($id);
    }

    public function edit($id)
    {
        $disciplina = Disciplina::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($request->all());
    }

    public function destroy($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();
    }
}
