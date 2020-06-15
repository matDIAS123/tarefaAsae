 @extends('template')
  @section('conteudo')

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	
	<h1>Login</h1>

	
	<form method="post" action="{{ route('tela_login') }}">
		@csrf
		
  	<style type="text/css">
  
  		 body {
 		 background-color: #646467;
	}
	</style>

		<form class="form-inline">
 		<div class="form-group mx-sm-3 mb-2">
   		 	<label class="sr-only">Login</label>
   		 	<input type="text" class="form-control" placeholder="Login" name="login">
  		</div>

 		<div class="form-group mx-sm-3 mb-2">
    		<label for="inputPassword2" class="sr-only">Senha</label>
    		<input type="password" class="form-control" placeholder="senha" name="senha">
 		</div>

 		<button type="submit" value="Acessar" class="btn btn-primary mb-2">Logar</button>
		</form>
	</form>
</body>
  @endsection