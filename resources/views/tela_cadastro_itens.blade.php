@extends('template')

@section('conteudo')

<h1>Cadastro de itens de Venda #{{ $venda->id }}</h1>

	<form method="post" action="{{ route('vendas_item_add', ['id' => $venda->id]) }}">
		@csrf
  <style type="text/css">
  
   body {
  background-color: #646467;
  }
  </style>
  
		<form class="form-inline">
 		<select class="form-control" name="id_produto">

      @foreach($produtos as $p)
     <option value="{{ $p->id }}">{{ $p->nome }}</option>
     @endforeach
    </select>

    <input type="number" name="quantidade" class="form-control" min="0" step="0.01">
  		
	<button type="submit" name="Enviar"  class="btn btn-primary">Cadastrar</button>

	</form>
<h2 class="mt-4">Itens adicionados ate o momento</h2>
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
        <td><a href="#" class="btn btn-danger" onclick="exclui({{ $p->id }})">Remover</a></td>

    </tr>
  </thead>
  <tbody>

    @endforeach

       <tr>
       <td></td> 
       <td></td>
       <td></td>
      <td>Total:</td>>
      <td>{{ $venda->valor }}</td>
      <td></td>
      <td></td>
    </tr>

</tbody>
</table>

<a href="btn btn-primary" href="{{ route('venda_listar' )}}">Concluir Venda</a>

<script>
    function exclui(id){
    if (confirm("Deseja excluir o item de id: " + id + "?")){
      location.href = "/venda/{{ $venda->id }}/itens/remover/" + id;
    }
    }
</script>

@endsection
    