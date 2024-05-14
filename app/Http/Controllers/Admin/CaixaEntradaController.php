<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CaixaEntradaController extends Controller
{
    public function index(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel']= $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
          return Redirect::to('/');
        }
        $contactos = Contacto::all();
        return view('admin.caixa_de_entrada.index',['data'=> $data],compact('alunos'));
    }

}

