<?php

namespace App\Http\Controllers;
use App\Models\Contacto;


use Illuminate\Http\Request;

class CaixaEntradasController extends Controller
{ 
    public function show($id)
    {

        return view('admin.caixa_de_entrada.detalhes');
    }

    //
}
