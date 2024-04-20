<?php

use App\Http\Controllers\FormadorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Site\AlunoController;
use App\Http\Controllers\Site\DisciplinaController;
use App\Http\Controllers\Site\SobreNosController;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\MarcacaoAulasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('App\Http\Controllers')->group(function () {

    Route::get('/rais', 'inicioController@index')->name('/rais');

    Route::get('/sites', 'inicioController@site')->name('site');

    Route::get('/', 'inicioController@site'); /* se não redirecionarmos nenhuma rota automaticamente vai para rota predefinida anteriormente*/

    Route::get('/login_aluno', 'inicioController@login');

    Route::get('/ind', 'inicioController@ind')->name('ind');

    Route::get('/login_Admin', 'inicioController@login_Admin');

    Route::get('/be_traner', 'inicioController@be_traner');

    Route::get('/aluno', 'inicioController@aluno')->name('aluno');

    Route::get('/sair', 'inicioController@sair')->name('sair');

    Route::post('/validacao_aluno', 'inicioController@validacao_aluno')->name('validacao_aluno');

    Route::post('/validacao_Admin', 'inicioController@validacao_Admin')->name('validacao_Admin');

    Route::get('/create_aluno', 'inicioController@create_aluno')->name('create_aluno');

    Route::post('/store_aluno', 'inicioController@store_aluno')->name('store_aluno');

    Route::get('/edit/{id}', 'inicioController@edit_aluno')->name('edit_aluno');
    Route::put('/{id}', 'inicioController@update_aluno')->name('update_aluno');
    Route::delete('/{id}', 'inicioController@destroy_aluno')->name('destroy_aluno');
    //rotas formadores
    Route::post('/add_formadores', 'FormadorsController@store')->name('add_formadores');
});

Route::group(['prefix' => 'formador'], function () {
    Route::get('/formador', [FormadorsController::class, 'index'])->name('formador.index');
    Route::get('/create', [FormadorsController::class, 'create'])->name('formador.create');
    Route::get('/aprovar/{id}', [FormadorsController::class, 'aprovar'])->name('formador.aprovar');
    Route::get('/reprovar/{id}', [FormadorsController::class, 'reprovar'])->name('formador.reprovar');
    Route::post('/save', [FormadorsController::class, 'store'])->name('formador.save');
    Route::get('/show/{id}', [FormadorsController::class, 'show'])->name('formador.show');
    Route::get('/edit/{id}', [FormadorsController::class, 'edit'])->name('formador.edit');
    Route::put('/update/{id}', [FormadorsController::class, 'update'])->name('formador.update');
    Route::delete('/destroy/{id}', [FormadorsController::class, 'destroy'])->name('formador.destroy');
});

Route::group(['prefix' => 'marcacao'], function () {
    Route::get('/aprovar/{id}', [MarcacaoAulasController::class, 'aprovar'])->name('marcacao.aprovar');
    Route::get('/reprovar/{id}', [MarcacaoAulasController::class, 'reprovar'])->name('marcacao.reprovar');
    Route::post('/save', [MarcacaoAulasController::class, 'store'])->name('marcacao.save');
});


Route::group(['prefix' => 'aluno'], function () {
    Route::get('/formador', [AlunosController::class, 'index'])->name('aluno.index');
    Route::get('/create', [AlunosController::class, 'create'])->name('aluno.create');
    Route::get('/aprovar/{id}', [AlunosController::class, 'aprovar'])->name('aluno.aprovar');
    Route::get('/reprovar/{id}', [AlunosController::class, 'reprovar'])->name('aluno.reprovar');
    Route::post('/save', [AlunosController::class, 'store'])->name('aluno.save');
    Route::get('/show/{id}', [AlunosController::class, 'show'])->name('aluno.show');
    Route::get('/edit/{id}', [AlunosController::class, 'edit'])->name('aluno.edit');
    Route::put('/update/{id}', [AlunosController::class, 'update'])->name('aluno.update');
    Route::delete('/destroy/{id}', [AlunosController::class, 'destroy'])->name('aluno.destroy');
});

Route::group(['prefix' => 'cursoAdmin'], function () {
    Route::post('/store', [CursosController::class, 'store'])->name('cursoAdmin.store');
});



/*//==============
NOVAS ROTAS PARA O SITE
=================/*/
Route::get('sobre/nos', [SobreNosController::class, 'index'])->name('site.sobre.nos');
Route::get('contato', [ContatoController::class, 'index'])->name('site.contato');
Route::get('disciplinas', [DisciplinaController::class, 'index'])->name('site.disciplina');
Route::post('alunos', [AlunoController::class, 'index'])->name('site.aluno');
Route::get('aula', [MarcacaoAulasController::class, 'index'])->name('minha.marcacao');
Route::get('formadores', [FormadorsController::class, 'index_site'])->name('site.formador');


/*//==============
NOVAS ROTAS PARA AUTENTICAÇÃO
=================/*/

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('login/aluno', [LoginController::class, 'index_aluno'])->name('auth.login.aluno');
Route::post('login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::get('cursos', [CursosController::class, 'index'])->name('curso');
Route::post('lista/cursos', [LoginController::class, 'index_listacurso'])->name('lista.curso');
Route::get('disciplina.admin', [DisciplinasController::class, 'index'])->name('disciplina.admin');
Route::post('disciplina.store', [DisciplinasController::class, 'store'])->name('disciplina.store');
Route::get('registrar', [RegisterController::class, 'index'])->name('auth.register');
Route::post('registrar', [RegisterController::class, 'register'])->name('auth.register');


/*//==============
NOVAS ROTAS PARA O ADMIN
=================/*/

Route::prefix('admin')->group(function () {
    Route::get('painel', [PainelController::class, 'index'])->name('admin.painel');



    /*//==============
  NOVAS ROTAS PARA ALUNOS
  =================/*/

    Route::get('aluno', [\App\Http\Controllers\Admin\AlunoController::class, 'index'])->name('admin.aluno');
    Route::get('aluno/registrar', [\App\Http\Controllers\Admin\AlunoController::class, 'create'])->name('admin.aluno.create');
    Route::get('aluno/detalhes{id?}', [\App\Http\Controllers\Admin\AlunoController::class, 'show'])->name('admin.aluno.show');
    Route::get('caixa/entrada', [\App\Http\Controllers\Admin\CaixaEntradaController::class, 'index'])->name('admin.caixa.entrada');
    Route::get('marcacao/aula', [\App\Http\Controllers\Admin\marcacaoAulaController::class, 'index'])->name('admin.macacao.aula');
    Route::get('cursos_admin', [\App\Http\Controllers\Admin\CursoController::class, 'index'])->name('admin.cursos');
    Route::get('disciplinas_admin', [\App\Http\Controllers\Admin\DisciplinaController::class, 'index'])->name('admin.disciplina');
});
