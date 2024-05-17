<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\DisciplinaClasseCurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class DisciplinaController extends Controller
{

    public function index(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel'] = $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome') == null || $request->session()->get('nome') == '') {
            return Redirect::to('/');
        }
        $todasDiscipliona = Disciplina::all();
        return view('admin.disciplinas.index', ['data' => $data], compact('todasDiscipliona'));
    }

    public function create(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel'] = $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome') == null || $request->session()->get('nome') == '') {
            return Redirect::to('/');
        }
        $disciplinas = Disciplina::all();
        return view("admin.disciplinas.create_disciplinas", ['data' => $data], compact('disciplinas'));
    }

    public function store(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel'] = $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome') == null || $request->session()->get('nome') == '') {
            return Redirect::to('/');
        }
        $disciplina = Disciplina::all();
        return view("admin.disciplinas.index", ['data' => $data], compact('Disciplina'));
    }

    public function show($id)
    {
        $diciplina = Disciplina::findOrFail($id);
    }

    public function edit($id)
    {
        $disciplina = Disciplina::findOrFail($id);


        return view("admin.disciplinas.Edit_disciplinas", compact("disciplina"));
    }

    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($request->all());
        $todasDiscipliona = Disciplina::all();
        return view('admin.disciplinas.index', compact('todasDiscipliona'));
    }

    public function destroy($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();
        $todasDiscipliona = Disciplina::all();
        return view('admin.disciplinas.index', compact('todasDiscipliona'));
    }
}
