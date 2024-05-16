<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;
use App\Models\Formador;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FormadorsController extends Controller
{
    public function index(Request $request)
    {
        $data['nome'] = $request->session()->get('nome');
        $data['nivel']= $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
          return Redirect::to('/');
        }

        $professores= Formador::join("usuarios","formadors.id_usuario","usuarios.id_usuario")->
        select("formadors.*","usuarios.*")->get();
        
        return view('admin.formadores.index',['data'=> $data],compact('professores'));
    }


    public function index_site()
    {
        $professores= Formador::join("usuarios","formadors.id_usuario","usuarios.id_usuario")->
        select("formadors.*","usuarios.*")->get();
        // $formadors = Formador::all();
        return view('site.formador',compact('professores'));
    }


    public function aprovar($id){
        $professor= Formador::where('id_formador',$id)->first();
        $professor->estado="aprovado";
        $professor->save();
        return $this->show($id);
    }

    public function reprovar($id){
        $professor= Formador::where('id_formador',$id)->first();
        $professor->estado="cancelado";
        $professor->save();
        return $this->show($id);
    }

    public function create(Request $request)
    {

        $data['nome'] = $request->session()->get('nome');
        $data['nivel']= $request->session()->get('nivel');
        $data['id'] =  $request->session()->get('id');
        if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
          return Redirect::to('/');
        }

        $todasDisciplina = Disciplina::all();
        return view('admin.formadores.create',['data'=> $data],compact('todasDisciplina'));

    }


    public function verificar(Request $request){
        //  $id_usuario = $Usuario->store($request);
       //  echo 123;die;
        $dados =  DB::table('usuarios')
        ->where('email', $request->input('email'))
        ->get();
       // var_dump(count($dados));die;
        $dt = [];
        $dt['estado'] = 0;
        if(count($dados)>0){
             $dt['estado'] = 1;
        }
        return $dt;
    }
    public function logar(Request $request)
    {
        $email = $request->input("email");
        $senha = md5($request->input("senha"));
        $usuario= DB::table('usuarios')
        ->where('email',$email)
        ->where('senha',$senha)
        ->get();

        if (count($usuario)>0) {
            $request->session()->put('id',  $usuario[0]->id_usuario);
            $request->session()->put('nome', $usuario[0]->user_name);
            $request->session()->put('nivel', $usuario[0]->nivel_acessos);
            return Redirect::route('painel');
        } else {
            return Redirect::route('painel');
           // echo 2;die;
        }
    }
    public function store(Request $request)
    {
        $user['user_name']=  $request->input("user_name");
        $user['email']=  $request->input("email");
        $user['N_telemovel']=  $request->input("N_telemovel");
        $user['identificador_fiscal']=  $request->input("identificador_fiscal");
        $user['morada']=  $request->input("morada");
        $user['senha']=  md5($request->input("senha"));
        $user['nivel_acesso']= '2';
        $user['categoria']= 'formador';





        DB::table('usuarios')->insert($user);
        $id_usuario= DB::table('usuarios')->orderBy('id_usuario','desc')->get()->first();


        $imagem = '';
        $caminhoImagem = public_path('imagemFormador');
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
         //   $imagem->move($caminhoImagem, $imagem->getClientOriginalName());
        }


        $novo_formador = Formador::create([
            'id_usuario' => $id_usuario->id_usuario,
            'nivel_academico' => $request->input("nivel_academico"),
            'genero' => $request->input("genero"),
            'tempo_disponivel' => $request->input("tempo_disponivel"),
            'descricao' => '',
          //  'imagem' => $imagem->getClientOriginalName(), admin.painel
            'disciplina'=>$request->input("disciplina"),
            'estado'=>"pendente"
        ]);


        $request->session()->put('id',  $id_usuario->id_usuario);
        $request->session()->put('nome', $user['user_name']);
        $request->session()->put('nivel', $user['nivel_acesso']);
        if ($novo_formador) {
          //  echo 1;die;
            return Redirect::route('painel');
        } else {
            return Redirect::route('painel');
           // echo 2;die;
        }
    }


    public function show($id)
    {
        $professor= Formador::join("usuarios","formadors.id_usuario","usuarios.id_usuario")->
        select("formadors.*","usuarios.*")->where("id_formador",$id)->first();

        return view('admin.formadores.detalhes',compact('professor'));
    }

    public function edit($id)
    {
       // $formador = Formador::findOrFail($id);
       $todasDisciplina = Disciplina::all();
        return view("admin.formadores.edit_formador",compact('todasDisciplina'));
    }

    public function update(Request $request, $id)
    {
        $formador = Formador::findOrFail($id);
        $formador->update($request->all());
    }

    public function destroy($id)
    {
        $formador = Formador::findOrFail($id);
        $formador->delete();
    }
}
