<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';
    protected $primaryKey = 'id';

    function usuario(){
    	return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
    }
    function produtos(){
    	return $this->belongsToMany('App\produto', 'produtos_vendas', 'id_venda', 'id_produto')->withPivot(['id','quantidade', 'subtotal'])-> withTimestamps();
    }
}
