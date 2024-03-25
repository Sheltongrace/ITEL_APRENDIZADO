<?php

use Illuminate\Support\Facades\Route;

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

