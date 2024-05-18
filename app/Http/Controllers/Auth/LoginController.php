<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function efectuarLogin(Request $request)
    {
        $senha = md5($request->input("senha"));

        $email = $request->input("email");

        $users = DB::table('usuarios')
        ->where('email', $email)
        ->where('senha', $senha)
        ->where("nivel_acesso", '1')
        ->get();




        if(count($users)>0){
            $request->session()->put('id', $users[0]->id_usuario);
            $request->session()->put('nome', $users[0]->user_name);
            $request->session()->put('nivel', $users[0]->nivel_acesso);
            return redirect()->route('painel');

        }else {
            return redirect()->route('login')->with('erro', 'Credenciais inválidas. Verifique o email e a senha.');
        }

    }


    public function verificarUsuario($email, $senha)
    {
        $users = Usuario::where("email", $email)->get();
        foreach ($users as $user) {
            if (Hash::check($senha, $user->senha)) {
                Auth::login($user);
                return redirect()->route('admin.painel');
            }
        }
        return false;
    }


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
    public function aluno_entrar(Request $request)
    {
        //TODO:: Implementar logica de login
         $senha = md5($request->input("senha"));
         $login = $request->input("login");
         $dados = DB::table('usuarios')
        ->where('email',$login)
        ->where('senha',$senha)
        ->get();

        if (count( $dados)>0) {
            $request->session()->put('id',  $dados[0]->id_usuario);
            $request->session()->put('nome', $dados[0]->user_name);
            $request->session()->put('nivel', $dados[0]->nivel_acesso);
            return redirect()->route('painel');
        }else {
            return redirect()->route('/');
        }

    }
    public function verifica_login(Request $request)
    {


        $senha = md5($request->input("senha"));
        $login = $request->input("login");
         $dados = DB::table('usuarios')
        ->where('email',$login)
        ->where('senha',$senha)
        ->get();
        $data = [];
        $data['estado'] = 0;
        if (count( $dados)>0) {
            $data['estado'] = 1;
        }
        return $data;


    }

    public function verifica_login_formador(Request $request)
    {

       //formador
        $senha = md5($request->input("senha"));
        $login = $request->input("login");
         $dados = DB::table('usuarios')
        ->where('email',$login)
        ->where('senha',$senha)
        ->where("nivel_acesso",'!=' ,'1')
        ->get();
        $data = [];
        $data['estado'] = 0;
        if (count( $dados)>0) {
            $data['estado'] = 1;
        }
        return $data;


    }
}
