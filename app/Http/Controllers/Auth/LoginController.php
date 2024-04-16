<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    {
     return view('auth.login');   
    }
    public function index_listacurso() 
    {
        return view("admin.cursos_admin.listacurso");
    }
    public function index_aluno() 
    {
     return view('auth.login_aluno');   
    }
    public function authenticate(Request $request) 
    {
        //TODO:: Implementar logica de login
        return redirect()->route('admin.painel');   
    }

}
