<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class UsuariosController extends Controller
{
    function nomesUsuarios(){
        if (session()->has("login")) {
        
    	$usuarios = Usuario::all();

    return view("lista", ["usuarios" => $usuarios]);
}
    return view("acesso_nao_permitido");
    }

function telaAlteracao($id){

    $usuario = Usuario::find($id);

    return view("tela_alteracao_usuario", [ "u" => $usuario ]);
}
function alterar(Request $req, $id){
        $nome = $req->input('nome');
        $login = $req->input('login');
        $senha = $req->input('senha');
        $cidade = $req->input('cidade');
        $cep = $req->input('cep');
        $bairro = $req->input('bairro');
        $rua = $req->input('rua');
        $numero = $req->input('numero');
        $uf = $req->input('uf');

        $usuario = Usuario::find($id);
        $usuario->nome = $nome;
        $usuario->login = $login;
        $usuario->senha = $senha;
        $usuario->cidade = $cidade;
        $usuario->cep = $cep;
        $usuario->bairro = $bairro;
        $usuario->rua = $rua;
        $usuario->numero = $numero;
        $usuario->uf = $uf;

        if($usuario->save()){
            $mensagem = "$nome alterado com sucesso";
            $classe = "success";
        }else{
            $mensagem = "Não foi possivel alterar";
            $classe = "danger";
        }
      return view("resultado", ["msg" => $mensagem, "classe" => $classe ]);

}
function excluir($id){
    $usuario = Usuario::find($id);

    if($usuario->delete()){
        $mensagem = "Usuario excluido com sucesso";
            $classe = "success";
    }else{
            $mensagem = "Não foi possivel excluir";
            $classe = "danger";
        }
  return view("resultado", ["msg" => $mensagem, "classe" => $classe ]);
}

function relogar(Request $req){
		$relogar = $req->input('relogar');

		if($relogar){
			return redirect()->route("tela_login");
		}
	}

    function cadastro(){
    	return view("cadastro");
    }

    function novo(Request $req){

    	$nome = $req->input('nome');
    	$login = $req->input('login');
    	$senha = $req->input('senha');
    	$cidade = $req->input('cidade');
    	$cep = $req->input('cep');
    	$bairro = $req->input('bairro');
    	$rua = $req->input('rua');
    	$numero = $req->input('numero');
    	$uf = $req->input('uf');

    

    	$usuario = new Usuario();
    	$usuario->nome = $nome;
    	$usuario->login = $login;
    	$usuario->senha = $senha;
    	$usuario->cidade = $cidade;
    	$usuario->cep = $cep;
    	$usuario->bairro = $bairro;
    	$usuario->rua = $rua;
    	$usuario->numero = $numero;
    	$usuario->uf = $uf;

    	if ($usuario->save()){
    		
    		$mensagem = "Usuario $nome inserido com sucesso.";
            $classe = "success";
    		

    	}else{
    		
    		$mensagem = "Usuario nao foi inserido.";
            $classe = "danger";
    	}

    	return view("resultado", ["msg" => $mensagem, "classe" => $classe ]);
    }
}



