 @extends('template')
  @section('conteudo')




	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <h1>Cadastro de venda</h1>

	<form method="post" action="{{ route('venda_add') }}">
		@csrf
  <style type="text/css">
  
   body {
  background-color: #646467;
  }
  </style>
  
		<form class="form-inline">
 		<select class="form-control" name="id_usuario">
      @foreach($usuarios as $u)
     <option value="{{ $u->id }}">{{ $u->nome }}</option> 

     @endforeach
    </select>
  		
	<button type="submit" name="Enviar"  class="btn btn-primary">Cadastrar</button>


	</form>

  @endsection
