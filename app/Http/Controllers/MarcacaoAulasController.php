<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use App\Models\MarcacaoAula;

use function PHPUnit\Framework\returnSelf;

class MarcacaoAulasController extends Controller
{
    public function index()
    {
        $marcacoesAula = MarcacaoAula::all();

        return view("site.marcacao1");
    }

    public function create()
    {
        $todasDisciplinas = Disciplina::all();
        $MarcacaoAula =MarcacaoAula::all();
        return view("admin.Marcacao_Aula.marcacao_aula",compact("todasDisciplinas"));
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
        $aluno = Aluno::where('id_usuario',session('id'))->first();
        $marcacaoAula = new MarcacaoAula();
        $marcacaoAula->id_aluno=$aluno->id_aluno;
        $marcacaoAula->id_disciplina=$request->input('id_disciplina');
        $marcacaoAula->periodo=$request->input('periodo');
        $marcacaoAula->estado="pendente";
        $marcacaoAula->morada=$request->input('morada');
        $marcacaoAula->hora=$request->input('hora');
        $marcacaoAula->QuantoTempo=$request->input('QuantoTempo');
        $marcacaoAula->save();
        return redirect()->back();
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
