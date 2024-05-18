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
        $contactos = Contacto::all();
        return view('admin.caixa_de_entrada.index',compact('contactos'));
    }

}

