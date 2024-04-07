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
Route::namespace('App\Http\Controllers')->group(function(){

    Route::get('/rais','inicioController@index')->name('/rais');

    Route::get('/sites','inicioController@site' ); /* redireciona para backend */

    Route::get('/','inicioController@site'); /* se não redirecionarmos nenhuma rota automaticamente vai para rota predefinida anteriormente*/

    Route::get('/login_aluno','inicioController@login');

    Route::get('/ind','inicioController@ind')->name('ind');

    Route::get('/login_Admin','inicioController@login_Admin');

    Route::get('/be_traner','inicioController@be_traner');

    Route::get('/aluno','inicioController@aluno')->name('aluno');

    Route::get('/sair','inicioController@sair')->name('sair');

    Route::post('/validacao_aluno','inicioController@validacao_aluno')->name('validacao_aluno');

    Route::post('/validacao_Admin','inicioController@validacao_Admin')->name('validacao_Admin');

    Route::get('/create_aluno','inicioController@create_aluno')->name('create_aluno');

    Route::post('/store_aluno','inicioController@store_aluno')->name('store_aluno');

    Route::get('/edit/{id}','inicioController@edit_aluno')->name('edit_aluno');

    Route::put('/{id}','inicioController@update_aluno')->name('update_aluno');

    Route::delete('/{id}','inicioController@destroy_aluno')->name('destroy_aluno');
//rotas formadores
  Route::post('/add_formadores','FormadorsController@store')->name('add_formadores');
}); 

Route::group(['prefix'=>'formador'],function(){
    Route::get('/formador', [FormadorsController::class, 'index'])->name('formador.index');
    Route::get('/create', [FormadorsController::class, 'create'])->name('formador.create');
    Route::post('/save', [FormadorsController::class, 'store'])->name('formador.save');
    Route::get('/show/{id}', [FormadorsController::class, 'show'])->name('formador.show');
    Route::get('/edit/{id}', [FormadorsController::class, 'edit'])->name('formador.edit');
    Route::put('/update/{id}', [FormadorsController::class, 'update'])->name('formador.update');
    Route::delete('/destroy/{id}', [FormadorsController::class, 'destroy'])->name('formador.destroy');
});

/*//==============
NOVAS ROTAS PARA O SITE
=================/*/
Route::get('sobre/nos', [SobreNosController::class, 'index'])->name('site.sobre.nos');
Route::get('contato', [ContatoController::class, 'index'])->name('site.contato');
Route::get('disciplina', [DisciplinaController::class, 'index'])->name('site.disciplina');
Route::get('aluno', [AlunoController::class, 'index'])->name('site.aluno');


/*//==============
NOVAS ROTAS PARA AUTENTICAÇÃO
=================/*/

Route::get('login', [LoginController::class, 'index'])->name('auth.login');
Route::post('login', [LoginController::class, 'authenticate'])->name('auth.login');
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
 
 
});

