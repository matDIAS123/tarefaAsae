@extends('template')

@section('conteudo')



<table class="table table-striped" >
  <thead>
    <th>Voce não esta logado</th>

</thead>
</table>


	<a class="btn btn-primary" href="{{ route('tela_login') }}">Login</a>
  @endsection
