 @extends('template')
  @section('conteudo')


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

  <h1>Cadastro</h1>


	<form method="post" action="{{ route('') }}">
		@csrf

    <style type="text/css">
  
   body {
     background-color: #646467;
  }
  </style>

		<form class="form-inline">
 		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Nome</label>
   			<input type="text" class="form-control" placeholder="Nome" name="nome">
  		</div>

  	
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">rg</label>
   			<input type="text" class="form-control" placeholder="RG" name="rg">
  		</div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Rua</label>
        <input type="text" class="form-control" placeholder="Rua" name="rua">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Numero</label>
        <input type="text" class="form-control" placeholder="Numero" name="numero">
      </div>
		
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Cidade</label>
   			<input type="text" class="form-control" placeholder="Cidade" name="cidade">
  		</div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Bairro</label>
        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
      </div>

		
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">CEP</label>
   			<input type="text" class="form-control" placeholder="CEP" name="cep">
  		</div>
		
	<select class="uf" name="uf">

		<option>UF</option>
  		<option>AC</option>
  		<option>AL</option>
  		<option>AP</option>
  		<option>AM</option>
  		<option>BA</option>
  		<option>CE</option>
  		<option>DF</option>
  		<option>ES</option>
  		<option>GO</option>
  		<option>MA</option>
  		<option>MT</option>
  		<option>MS</option>
  		<option>MG</option>
  		<option>PA</option>
  		<option>PB</option>
  		<option>PR</option>
  		<option>PE</option>
  		<option>PI</option>
  		<option>RJ</option>
  		<option>RN</option>
  		<option>RS</option>
  		<option>RO</option>
  		<option>RR</option>
  		<option>SC</option>
  		<option>SP</option>
  		<option>SE</option>
  		<option>TO</option>
  		</select>
		
		<button type="submit" name="Enviar"  class="btn btn-primary">Enviar</button>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Celular</label>
        <input type="text" class="form-control" placeholder="celular" name="numero_celular">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Email</label>
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>

       <select class="estado_civil" name="estado_civil">

      <option>Solteiro<option>
      <option>Casado</option>
      <option>Viuvo</option>
      <option>Separado</option>
      <option>Divorciado</option>
      <option>União estavel</option>
      <option>Viuvo</option>
      <option>Outro</option>
      </select>

	</form>

  @endsection
