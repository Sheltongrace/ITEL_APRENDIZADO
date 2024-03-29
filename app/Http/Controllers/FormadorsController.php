<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formador;
use Illuminate\Support\Facades\DB;
 
class FormadorsController extends Controller
{
    public function index()
    {
        $formadors = Formador::all();
    }

    public function create()
    {
        return view('be_traner');
    }

    public function store(Request $request)
    {
        $Usuario = new UsuariosController();
        $id_usuario = $Usuario->store($request);
        $novo_formador=Formador::create([
            'id_usuario'=>$id_usuario,
            'nivel_academico'=>$request->input("nivel_academico"),
            'genero'=>$request->input("genero"),
            'tempo_disponivel'=>$request->input("tempo_disponivel"),
        ]);
 
        if ($novo_formador){
            return back()->with('success', 'Formador cadastrado com sucesso!');
        }else{
            return back()->with('error', 'Erro ao cadastrar Formador');
        }
        
     
    }

    public function show($id)
    {
        $formador = Formador::findOrFail($id);
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
