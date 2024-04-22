<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarcacaoAula;
use Illuminate\Http\Request;

class AquisicaoController extends Controller
{
    public function index()
    {
       return view('site.Aquisicao1');
    }
}
