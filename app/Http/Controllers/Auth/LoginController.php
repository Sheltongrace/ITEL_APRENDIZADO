<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function efectuarLogin(Request $request)
    {
        $senha = $request->input("senha");
        $email = $request->input("email");
        $retorno=$this->verificarUsuario($email, $senha);
        if($retorno!=false){
            return $retorno;
        }
        return redirect()->route('login')->with('erro', 'Credenciais inválidas. Verifique o email e a senha.');

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
    public function authenticate(Request $request)
    {
        //TODO:: Implementar logica de login
        return redirect()->route('admin.painel');
    }
}
