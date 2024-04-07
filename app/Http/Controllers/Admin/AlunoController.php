<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() 
    {
     return view('admin.aluno.index');   
    }
    public function create() 
    {
     return view('admin.aluno.create');   
    }
    public function show() 
    {
     return view('admin.aluno.detalhes');   
    }
}
