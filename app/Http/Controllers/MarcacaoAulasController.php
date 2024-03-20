<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarcacaoAula;

class MarcacaoAulasController extends Controller
{
    public function index()
    {
        $marcacoesAula = MarcacaoAula::all();
    }

    public function create()
    {
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
