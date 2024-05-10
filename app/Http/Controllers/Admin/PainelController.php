<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PainelController extends Controller
{
    public function index(Request $request) 
    {
    
      $data['nome'] = $request->session()->get('nome');
      $data['nivel']= $request->session()->get('nivel');
      $data['id'] =  $request->session()->get('id');
      if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
        return Redirect::to('/');
      }
      return view('admin.painel',['data'=> $data]);   
    }
}
