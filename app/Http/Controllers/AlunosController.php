<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $usuario = new UsuariosController();
        $idUser=  $usuario->store($request);
        Aluno::create([
            'id_curso'=>$request->input('id_curso'),
            'processo'=>$request->input('processo'),
            'classe'=>$request->input('classe'),
            'genero'=>$request->input('genero'),
            'id_usuario'=>$idUser
        ]);

    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
    }
}
