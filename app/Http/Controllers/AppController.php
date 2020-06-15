<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class AppController extends Controller
{

function telaLogin(){
	//exibir tela de login

	if(session()->has("login")){
		return redirect()->route('nome_usuarios');
	}
	return view("login");

}

	function login(Request $req){
		$login = $req->input('login');
		$senha = $req->input('senha');

		$usuario = Usuario::where('login', '=', $login)->first();

		//$usuario tera null ou os dados do usuario encontrado

	if($usuario && $usuario->senha == $senha){
//se nao é null, entra aqui
		///logine senha estao certos

	$variaveis = ["login" => $login];
	session($variaveis);

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
		function logout(){
			session()->forget("login");

			return redirect()->route("tela_login");
		}
	
}