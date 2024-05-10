<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        //create user aluno
        $user['user_name']=  $request->input("nome");
        $user['email']=  $request->input("email");
        $user['N_telemovel']=  $request->input("telefone");
        $user['identificador_fiscal']=  $request->input("identificador_fiscal");
        $user['morada']=  $request->input("morada");
        $user['senha']=  md5($request->input("senha"));
        $user['nivel_acesso']= '3';
        $user['estado']= '0';
       
        
       
        DB::table('usuarios')->insert($user);
        $id_usuario= DB::table('usuarios')->orderBy('id_usuario','desc')->get()->first();
        //end
      
        $novo_aluno = Aluno::create([
           // 'id_curso' => $request->input('id_curso'),
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

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
    }
}
