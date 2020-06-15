

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de prospects</title>
  
     
            <style type="text/css">
  
   body {
  background-color: lightblue;
}
           h1{

          
            float:left;
            padding: 5px;
            margin-left: 35%;
            margin-top: 1%;
            border-radius: 5px;
            font-family: 'Nunito', sans-serif;
            font-size: ; 
            background-color: #191970 ; 
            color: #FFFAFA ;

           }
           form{
           
            
            float:left;
            padding: 5px;
            margin-left: 35%;
            margin-top: 2%;
            border-radius: 5px;
            font-family: 'Nunito', sans-serif;
            font-size: ; 
            background-color:  #191970; 
            color: #FFFAFA ;

            

           }
           div{
            color: #FFFAFA ;

           }
           thead{

            border-radius: 5px;
            font-family: 'Nunito', sans-serif;
            background-position: center;
            background-color: #191970 ; 
             color: #FFFAFA;
            text-align: center;

           }
           tbody{

            border-radius: 5px;
            font-family: 'Nunito', sans-serif;
            font-size: ; 
            background-position: center;
            background-color: #191970 ; 
            color: #708090  ; 
            text-align: center;

           }
           
            button{
              float: left;

            }
            footer{

                position: fixed;
               bottom:0;
              left:0;
          
              padding-left: 40%;  
           border-radius: 2px;
            font-family: 'Nunito', sans-serif;
             color: #191970;
 

              }
       </style>



	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

  <style type="text/css">
  
   body {
  background-color: #646467;
}
</style>

<div class="container-fluid">
	<div class="row">
		<nav class="navbar navbar-expand-lg navbar-danger bg-Light w-100">
  <a class="navbar-brand" href="#" >Prospects</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/tela_login">Login<span class="sr-only">(current)</span></a>
      </li>
       <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href=" {{ route('logout') }}">Logout<span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/usuarios/cadastro">Cadastrar prospects</a>
            <a class="dropdown-item" href="/venda/cadastro">Cadastrar venda</a>
        </div>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/usuarios">Listar cadastrados</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
	</div>
	<div class="row">
		<div class="col-md-2"></div> 
		<div class="col-md-8 mt-5">@yield('conteudo')
		</div>
		<div class="col-md-2"></div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div id="wrapper">
  <div class="container body-content">
    
  </div>
  <footer id="rodape">
    <p>@2020 Todos os direitos reservados - Prospects</p>
  </footer>
</div>

</body>
</html>