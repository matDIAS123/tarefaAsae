<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Venda;
use App\Produto;

class VendaController extends Controller
{
    function telaCadastro(){
    	$usuario = Usuario::all();
    	return view("tela_cadastro_venda", ["usuarios" => $usuario]);
    }

    function adicionar(Request $req){
    	#$valor = $req->input('valor');
    	$id_usuario = $req->input('id_usuario');

    	$venda = new Venda();
    	$venda->id_usuario = $id_usuario;
    	$venda->valor =  0;#$valor;

    	if ($venda->save()){
    		
    		$mensagem = "Venda inserida com sucesso.";
            
    		

    	}else{
    		
    		$mensagem = "Venda nao foi inserida.";
            
    	}
        return redirect()->route('vendas_item_novo', ['id' => $venda->id]);
    	//return view("resultado", ["msg" => $mensagem, "classe" => $classe ]);
    }
    function vendasPorUsuario($id){

	$usuario = Usuario::find($id);
    	if($usuario){

    	return view("lista_vendas", ["usuario" => $usuario]);
    }else{
    	return redirect()->route('listar');
    }

   }

   function listar(){
    $vendas = Venda::all();

    return view('lista_vendas_geral', ['vendas' => $vendas]);
   }

   function itensVenda($id){
    $venda = Venda::find($id);

    return view('lista_itens_venda', ['venda' => $venda]);
   }

   function telaAdicionarItem($id){
     $venda = Venda::all($id);
     $produtos = Produto::all();

    return view('tela_cadastro_itens', ['vendas' => $venda,     'produtos' => $produtos]);
   }

   function adicionarItem(Request $req, $id){
    $id_produto = $req->input('id_produto');
    $quantidade = $req->input('quantidade');

    $produto = Produto::find($id_produto);
    $venda = Venda::find($id);

    $colunas_pivot = [

        'quantidade' => $quantidade, 
        'subtotal' => $subtotal


    ];

    #adiciona item a lista e atualizar valor da venda.

    $venda->produtos()->attach($produto->id, $colunas_pivot);
    $venda->valor += $subtotal;
    $venda->save();

    return redirect()->route('vendas_item_novo', ['id' => $venda->id]);



   }

   function excluirItem($id, $id_produto){
    $venda = Venda::find($id);
    $subtotal = 0;

    foreach ($venda->produtos as $vp) {
        if ($vp->id == $id_produto) {
            $subtotal = $vp->pivot->subtotal;
            break;
        }
    }
    $venda->valor = $venda->valor - $subtotal;
    $venda->produtos()->detach($id_produto);
    $venda->save();

    return redirect()->route('vendas_item_novo', ['id' => $id]);

   }
}

