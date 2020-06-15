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
  <tr>

      <th>Numero da venda</th>
      <th>Valor</th>
      <th>Data</th>
      <th>Operações</th>
    </tr>
    @foreach($vendas as $v)
    <tr>
	  	<td>{{ $v->id }}</td>
	  	<td>{{ $v->valor }}</td>
      <td>{{ $v->created_at }}</td>
      <td><a class="btn btn-info" href="{{ route('vendas_itens', ['id' => $v->id]) }}">Itens</td>
    </tr>
  </thead>
  <tbody>

    @endforeach
</tbody>
</table>
<a class="btn btn-primary" href="{{ route('venda_cadastro') }}">Cadastrar nova</a>
@endsection
    
