<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
    }

    public function store(Request $request)
    {
        //create user aluno
        $user['user_name'] =  $request->input("user_name");
        $user['email'] =  $request->input("email");
        $user['N_telemovel'] =  $request->input("N_telemovel");
        $user['identificador_fiscal'] =  $request->input("identificador_fiscal");
        $user['morada'] =  $request->input("morada");
        $user['senha'] =  md5($request->input("senha"));
        $user['nivel_acesso'] = '2';
        $user['categoria'] = 'aluno';




        DB::table('usuarios')->insert($user);
        $id_usuario = DB::table('usuarios')->orderBy('id_usuario', 'desc')->get()->first();
        //end

        $novo_aluno = Aluno::create([
            'processo' => $request->input('processo'),
            'classe' => $request->input('nivel_academico'),
            'genero' => $request->input('genero'),
            'id_usuario' => $id_usuario->id_usuario
        ]);
        /* $alunos = Aluno::select('alunos.*', 'cursos.*', 'usuarios.*')
            ->join('cursos', 'alunos.id_curso', '=', 'cursos.id_curso')
            ->join('usuarios', 'alunos.id_usuario', '=', 'usuarios.id_usuario')
            ->get();*/
        $request->session()->put('id',  $id_usuario->id_usuario);
        $request->session()->put('nome', $user['user_name']);
        $request->session()->put('nivel', $user['nivel_acesso']);
        if ($novo_aluno) {
            //  echo 1;die;
            return Redirect::route('painel');
        } else {
            return Redirect::route('painel');
            // echo 2;die;
        }
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
    }

    public function edit($idUser)
    {
        $aluno = Aluno::select('alunos.*', 'usuarios.*')
            //->join('cursos', 'alunos.id_curso', '=', 'cursos.id_curso')
            ->join('usuarios', 'alunos.id_usuario', '=', 'usuarios.id_usuario')
            ->where('usuarios.id_usuario', $idUser)
            ->first();
        $todosCurso = Curso::all();
        return view("admin.aluno.edit_aluno", compact('todosCurso', 'aluno'));
    }

    public function update(Request $request, $id_user, $id_aluno)
    {
        $aluno = Aluno::findOrFail($id_aluno);
        $user = Usuario::findOrFail($id_user);
        $aluno->update($request->all());
        $user->update($request->all());
        $alunos = Aluno::select('alunos.*', 'usuarios.*')
            ->join('usuarios', 'alunos.id_usuario', '=', 'usuarios.id_usuario')
            ->get();

        return view('admin.aluno.index', compact('alunos'));
    }

    public function destroy($id_user, $id_aluno)
    {
        $aluno = Aluno::findOrFail($id_aluno);
        $user = Usuario::findOrFail($id_user);
        $aluno->delete();
        $user->delete();
        $alunos = Aluno::select('alunos.*', 'usuarios.*')
            ->join('usuarios', 'alunos.id_usuario', '=', 'usuarios.id_usuario')
            ->get();
        return view('admin.aluno.index', compact('alunos'));
    }
}
