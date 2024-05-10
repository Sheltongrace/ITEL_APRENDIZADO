<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\aluno;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use CreateAlunosTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class inicioController extends Controller
{
      public function new_site(Request $request)
    {
    // die($request->session()->get('user'));
      echo view('new_site.header');
      echo view('new_site.index');
      echo view('new_site.footer');
    }
    public function index(Request $request)
    {
    // die($request->session()->get('user'));
      echo view('layout.silebar');
      echo view('layout.header');
      echo view('painel.painel');
      echo view('layout.footer');
    }
    public function site(Request $request)
    {
      $sessao = false;
      if ($request->session()->get('n_processo')=='' || $request->session()->get('n_processo')==null) {
        $sessao = false;
      }else {
        $sessao = true;
      }

      $todasDisciplina = Disciplina::all();

      echo view('site.home',compact("todasDisciplina"), ['sessao',$sessao]);
    }

    public function login(Request $request)
    {
      $sessao = false;
      if ($request->session()->get('n_processo')=='' || $request->session()->get('n_processo')==null) {

      }else {
        $sessao = true;
        return Redirect::to('/aluno');
      }
      echo view('login_aluno');
    }

    public function be_traner(Request $request)
    {
      echo view('be_traner');
    }

    public function ind (Request $request)
    {
      $alunos= aluno::all();
   //var_dump($alunos);die;
      echo view('indexi',['alunos' => $alunos]);
    }

    public function aluno(Request $request)
    {
      $alunos = aluno ::all();
     // dd($alunos);

     if ($request->session()->get('n_processo')=='' || $request->session()->get('n_processo')==null) {
       return Redirect::to('/');
     }
      echo view ('aluno');
    }
    public function validacao_aluno(Request $request)
    {
      $nome=$request->input('nome');
      $processo=$request->input('n_processo');
      $anolectivo=$request->input('ano_lectivo');
    // var_dump($request->input());die;
      //DB::table('alunos')->insert(['nome'=>'Paula','n_processo'=>'12345','ano_lectivo'=>'2024']);
      $aluno= DB::table('alunos')->where('nome',$nome)->where('n_processo',$processo)->where('ano_lectivo',$anolectivo)->get();
      if (count($aluno) > 0) {

        $request->session()->put('nome',$nome);
        $request->session()->put('n_processo',$processo);
        $request->session()->put('ano_lectivo',$anolectivo);
        return Redirect::to('/aluno');

      }else {
        echo 'Aluno nao aceite';
      }

    }
    public function sair(Request $request)
    {

      if ($request->session()->get('n_processo')!='') {
        $request->session()->put('nome',null);
        $request->session()->put('n_processo',null);
        $request->session()->put('ano_lectivo',null);
      }
      return Redirect::to('/');


    }
    public function validacao_Admin(Request $request)
    {
      $nome=$request->input('nome');
      $senha=$request->input('senha');

    // var_dump($request->input());die;
     // DB::table('Admin')->insert(['nome'=>'Shelton','senha'=>'1234']);

      $Admin= DB::table('Admin')->where('nome',$nome)->where('senha',$senha)->get();
      if (count($Admin) > 0) {

        $request->session()->put('nome',$nome);
        $request->session()->put('senha',$senha);
        return Redirect::to('/rais');
      } else {
        echo 'Acesso Inválido' ;
           }
    }

    public function Admin(Request $request)
    {
      $sessao = false;
      if ($request->session()->get('senha')=='' || $request->session()->get('senha')==null) {

      }else {
        $sessao = true;
        return Redirect::to('/');
      }
      echo view('/rais');
    }

    public function login_Admin(Request $request)
    {
      $sessao = false;
      if ($request->session()->get('senha')=='' || $request->session()->get('senha')==null) {

      }else {
        $sessao = true;
        return Redirect::to('/Admin');
      }
      echo view('login_Admin');
    }

    public function create_aluno(){

      return view("create_aluno");
  }

  public function store_aluno(request $request){
    $dados['nome']=$request->input('nome');
    $dados['n_processo']=$request->input('n_processo');
    $dados['ano_lectivo']=$request->input('ano_lectivo');
    DB::table('alunos')->insert($dados);
    // aluno::create($request->input());
    return redirect()->route("/rais");
  }

  public function edit_aluno($id){
              $alunos = aluno:: where('id', $id) ->first();
              if (!empty($alunos)){
                echo view('edit_aluno',['alunos' => $alunos]);
                                   }
              else{
                return redirect()->route("ind");

              }
            }

          public function update_aluno(Request $request, $id){
            $data = [
              'nome'=> $request->nome,
              'n_processo'=> $request->n_processo,
              'ano_lectivo'=> $request->ano_lectivo,
            ];
            aluno::where('id',$id)->update($data);
            return redirect()->route("ind");
          }

          public function destroy_aluno($id){
            aluno::where('id',$id)->delete();
            return redirect()->route("ind");
          }
}
