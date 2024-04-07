<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() 
    {
     return view('site.contato');   
    }
}
