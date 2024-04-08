<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaixaEntradaController extends Controller
{
    public function index() {
        return view('admin.caixa_de_entrada.index');
    }
}
