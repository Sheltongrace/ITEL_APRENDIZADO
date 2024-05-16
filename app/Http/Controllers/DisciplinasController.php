<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinasController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::all();
        return view("admin.disciplinas_admin.index_disciplinas");
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $caminhoImagem = public_path('imagemDisciplina');
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imagem->move($caminhoImagem, $imagem->getClientOriginalName());
        }

        Disciplina::create([
            'nome_disciplina' => $request->input('nome_disciplina'),
            //'imagem'=>$imagem->getClientOriginalName(),
            'preco' => $request->input('preco')
        ]);

        $todasDiscipliona = Disciplina::all();
        return view('admin.disciplinas.index', compact('todasDiscipliona'));
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
