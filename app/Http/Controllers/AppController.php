<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class AppController extends Controller
{

function telaLogin(){
	return view("login");

}

	function login(Request $req){
		$login = $req->input('login');
		$senha = $req->input('senha');

		$usuario = Usuario::where('login', '=', $login)->first();

	if($usuario && $usuario->senha == $senha){
		return	redirect()->route("nome_usuarios");
	}else{
		return redirect()->route("tela_login");
	}
	}


	function cadastrar(Request $req){
		$cadastrar = $req->input('cadastrar');

		if($cadastrar){
			return redirect()->route("cadastro");
		}
	}
}