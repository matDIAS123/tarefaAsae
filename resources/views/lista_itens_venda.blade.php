@extends('template')
@section('conteudo')
	<style type="text/css">
	table{
            max-width: 100%;
  			width: 100%;
 			margin-bottom : 50%;
 			table-layout: fixed;
  text-align: center;
            }
            td{
            	width: 100%;
            }
            body {
  background-color: #646467;
}
    </style>
<h1>Itens da vendas id:{{ $venda->id }}</h1>

<table class="table table-striped" >

  <thead>
  <tr>
  	  <th>Nome</th>
      <th>Quantidade</th>
      <th>Valor unitario</th>
      <th>Subtotal</th>
      <th>Data</th>
      <th>Operações</th>
    </tr>
    @foreach($venda->produtos as $p)
    <tr>
	  	<td>{{ $p->pivot->id }}</td>
	  	<td>{{ $p->nome }}</td>
	  	<td>{{ $p->pivot->quantidade }}</td>
	  	<td>{{ $p->preco }}</td>
	  	<td>{{ $p->pivot->subtotal }}</td>
      	<td>{{ $p->pivot->created_at }}</td>

    </tr>
  </thead>
  <tbody>

    @endforeach
</tbody>
</table>
@endsection
    
