<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarcacaoAula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class marcacaoAulaController extends Controller
{
    public function index(Request $request)
    {
        {
            $data['nome'] = $request->session()->get('nome');
            $data['nivel']= $request->session()->get('nivel');
            $data['id'] =  $request->session()->get('id');
            if ($request->session()->get('nome')== null || $request->session()->get('nome')== '') {
              return Redirect::to('/');
            }
        $marcacaoAulas=MarcacaoAula::select(
            'marcacao_aulas.id_marcacao_aula',
            'marcacao_aulas.estado',
            'marcacao_aulas.id_aluno',
            'marcacao_aulas.id_disciplina',
            'marcacao_aulas.created_at as marcacao_created_at',
            'marcacao_aulas.updated_at as marcacao_updated_at',
            'marcacao_aulas.periodo',
            'disciplinas.nome_disciplina',
            'disciplinas.imagem as disciplina_imagem',
            'disciplinas.preco as preco_disciplina',
            'alunos.id_usuario',
            'alunos.id_classe',
            'alunos.id_curso',
            'alunos.genero',
            'alunos.processo',
            'alunos.created_at as aluno_created_at',
            'alunos.updated_at as aluno_updated_at',
            'alunos.classe as aluno_classe',
            'usuarios.user_name',
            'usuarios.N_telemovel',
            'usuarios.email',
            'usuarios.identificador_fiscal',
            'usuarios.nivel_acesso',
         
            'usuarios.created_at as usuario_created_at',
            'usuarios.updated_at as usuario_updated_at',
            'usuarios.morada'
        )
            ->join('disciplinas', 'marcacao_aulas.id_disciplina', '=', 'disciplinas.id_disciplina')
            ->join('alunos', 'marcacao_aulas.id_aluno', '=', 'alunos.id_aluno')
            ->join('usuarios', 'alunos.id_usuario', '=', 'usuarios.id_usuario')
            ->get();


        return view('admin.Marcacao_Aula.aula',['data'=> $data],compact('marcacaoAulas'));
    }
}
public function create()
{
    $marcacao = MarcacaoAula::all();
    return view('admin.Marcacao_Aula.agendar_aula');
}
}
