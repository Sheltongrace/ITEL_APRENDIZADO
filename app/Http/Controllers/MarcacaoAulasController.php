<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarcacaoAula;

class MarcacaoAulasController extends Controller
{
    public function index()
    {
        $marcacoesAula = MarcacaoAula::all();

        return view("site.marcacao1");
    }

    public function create()
    {
    }


    public function aprovar($id)
    {
        $marcacaoAula = MarcacaoAula::find($id);
        $marcacaoAula->estado = "aprovado";
        $marcacaoAula->update();
        return redirect()->back();
    }

    public function reprovar($id)
    {
        $marcacaoAula = MarcacaoAula::find($id);
        $marcacaoAula->estado = "cancelado";
        $marcacaoAula->update();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        MarcacaoAula::create($request->all());
    }

    public function show($id)
    {
        $marcacaoAula = MarcacaoAula::findOrFail($id);
    }

    public function edit($id)
    {
        $marcacaoAula = MarcacaoAula::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $marcacaoAula = MarcacaoAula::findOrFail($id);
        $marcacaoAula->update($request->all());
    }

    public function destroy($id)
    {
        $marcacaoAula = MarcacaoAula::findOrFail($id);
        $marcacaoAula->delete();
    }
}
