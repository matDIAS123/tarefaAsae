<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Venda;

class VendaController extends Controller
{
    function telaCadastro(){
    	$usuario = Usuario::all();
    	return view("tela_cadastro_venda", ["usuarios" => $usuario]);
    }

    function adicionar(Request $req){
    	$valor = $req->input('valor');
    	$id_usuario = $req->input('id_usuario');

    	$venda = new Venda();
    	$venda->id_usuario = $id_usuario;
    	$venda->valor = $valor;

    	if ($venda->save()){
    		
    		$mensagem = "Venda inserida com sucesso.";
            $classe = "success";
    		

    	}else{
    		
    		$mensagem = "Venda nao foi inserida.";
            $classe = "danger";
    	}

    	return view("resultado", ["msg" => $mensagem, "classe" => $classe ]);
    }
    function vendasPorUsuario($id){

	$usuario = Usuario::find($id);
    	if($usuario){

    	return view("lista_vendas", ["usuario" => $usuario]);
    }else{
    	return redirect()->route('listar');
    }

   }
}

