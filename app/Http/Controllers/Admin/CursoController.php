<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $todosCursos=Curso::all();
        return view('admin.cursos.index',compact('todosCursos'));
    }
}
