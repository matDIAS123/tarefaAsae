<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UsuariosController@nomesUsuarios')->name("nome_usuarios");
//inserção
Route::get('/usuarios/cadastro', 'UsuariosController@cadastro')->name('usuario_cadastrar');

Route::post('/usuarios/novo', 'UsuariosController@novo')->name('usuario_novo');

//alteracao
Route::get('/usuario/alterar/{id}', 'UsuariosController@telaAlteracao')->name('usuario_tela_alterar');

Route::post('/usuario/alterar/{id}', 'UsuariosController@alterar')->name('usuario_alterar');
//exclusao

Route::get('/usuario/excluir/{id}', 'UsuariosController@excluir')->name('usuario_excluir');



Route::get('/tela_login', 'AppController@telaLogin')->name('tela_login');

Route::post('/tela_login', 'AppController@login')->name('login');

Route::get('/logout', 'AppController@logout')->name('logout');

Route::post('/cadastrar', 'AppController@cadastrar')->name('cadastrar');

Route::post('/relogar', 'UsuariosController@relogar')->name('relogar');



/*vendas*/

Route::get('/venda/cadastro', 'VendaController@telaCadastro')->name('venda_cadastro');

Route::post('/venda/adicionar', 'VendaController@adicionar')->name('venda_add');

Route::get('/venda/usuario/{id}', 'VendaController@vendasPorUsuario')->name('vendas_usuario');