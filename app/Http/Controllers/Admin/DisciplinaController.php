<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class DisciplinaController extends Controller
{

        public function index(Request $request)
        {
            $data['nome'] = $request->session()->get('nome');
            $data['nivel']= $request->session()->get('nivel');
            $data['id'] =  $request->session()->get('id');
            if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
              return Redirect::to('/');
            }
        $todasDiscipliona = Disciplina::all();
        return view('admin.disciplinas.index',['data'=> $data],compact('todasDiscipliona'));
            
        }
}