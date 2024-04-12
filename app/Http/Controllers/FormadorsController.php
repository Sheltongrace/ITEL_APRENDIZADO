<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formador;
use Illuminate\Support\Facades\DB;

class FormadorsController extends Controller
{
    public function index()
    {
        $professores= Formador::join("usuarios","formadors.id_usuario","usuarios.id_usuario")->
        select("formadors.*","usuarios.*")->get();
        return view('admin.formadores.index',compact('professores'));
    }
    public function index_site()
    {

        $professores= Formador::join("usuarios","formadors.id_usuario","usuarios.id_usuario")->
        select("formadors.*","usuarios.*")->get();
        // $formadors = Formador::all();
        return view('site.formador',compact('professores'));
    }

    public function create()
    {
        return view('admin.formadores.create');
    }

    public function store(Request $request)
    {
        $Usuario = new UsuariosController();
        $id_usuario = $Usuario->store($request);

        $caminhoImagem = public_path('imagemFormador');
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imagem->move($caminhoImagem, $imagem->getClientOriginalName());
        }


        $novo_formador = Formador::create([
            'id_usuario' => $id_usuario,
            'nivel_academico' => $request->input("nivel_academico"),
            'genero' => $request->input("genero"),
            'tempo_disponivel' => $request->input("tempo_disponivel"),
            'descricao' => $request->input("descricao"),
            'imagem' => $imagem->getClientOriginalName()
        ]);

        if ($novo_formador) {
            return back()->with('success', 'Formador cadastrado com sucesso!');
        } else {
            return back()->with('error', 'Erro ao cadastrar Formador');
        }
    }


    public function show($id)
    {
        // $formador = Formador::findOrFail($id);
        return view('admin.formadores.detalhes');
    }

    public function edit($id)
    {
        $formador = Formador::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $formador = Formador::findOrFail($id);
        $formador->update($request->all());
    }

    public function destroy($id)
    {
        $formador = Formador::findOrFail($id);
        $formador->delete();
    }
}
