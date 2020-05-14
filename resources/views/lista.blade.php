
@extends('template')

@section('conteudo')


<style type="text/css">
  
   body {
  background-color: #646467;
}
</style>

<table class="table table-striped" >
  <thead>
    <th>Lista de usuários</th>
          <th></th>
          <th></th>
          <th></th>


    <tr>

      <th>ID</th>
      <th>Nome</th>
      <th>Login</th>
      <th>Operações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($usuarios as $u)
    <tr>
      <td>{{ $u->id }}</td>
      <td>{{ $u->nome }}</td>
      <td>{{ $u->login }}</td>
     <td>
      <a class="btn btn-warning" href="{{ route('usuario_tela_alterar', ['id' => $u->id]) }}">Alterar</a>
      <a class="btn btn-danger" href="#" onclick="exclui({{ $u->id }})"> Excluir</a>
      <a class="btn btn-success" href="{{ route('vendas_usuario', ['id' => $u->id]) }}">Vendas</a>
     </td>
    </tr>
    @endforeach
  </tbody>

</table>
<a class="btn btn-primary" href="{{ route('usuario_cadastrar')}}">Cadastrar novo</a>

<script>
  function exclui(id){
    if (confirm('Deseja excluir: ' + id + '?')){
      //processo para excluir
      location.href = '/usuario/excluir/' + id;
    }
  }
</script>
@endsection