@extends('template')
@section('conteudo')
	<style type="text/css">
	table{
            max-width: 50%;
  			width: 100%;
 			margin-bottom : 50%;
 			table-layout: fixed;
  text-align: center;
            }
            td{
            	width: 50%;
            }
            body {
  background-color: #646467;
}
    </style>

<table class="table table-striped" >

  <thead>
    <th>Vendas para o usuario     :</th>
    <th> {{ $usuario->nome }}</th>
    <tr>

      <th>Numero da venda</th>
      <th>Valor</th>
    </tr>
    @foreach($usuario->vendas as $venda)
    <tr>
	  	<td>{{ $venda->id }}</td>
	  	<td>{{ $venda->valor }}</td>
    </tr>
  </thead>
  <tbody>

    @endforeach
</tbody>
</table>
@endsection
    
