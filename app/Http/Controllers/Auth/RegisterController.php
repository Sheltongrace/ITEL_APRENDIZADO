<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
     return view('auth.register');   
    }
    public function register() 
    {
        //TODO:: Implemrntar logica de regidtro de formador
        return redirect()->back();   
    }
}