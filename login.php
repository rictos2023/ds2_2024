<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acesso ao Sistemas</title>
	<!--Bootstrap-CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!--Bootstrap-CSS-->
  </head>
  <script type="text/javascript">
  function redirectTime(){
	  //window.location = manutencao.php
  }
  </script>
  <body onload="(redirectTime())" class="p-5 mb-2 bg-black">
    <div class="container">
	  <div class="row justify-content-center">
	    <div class="col-sm-12">
	      <div class="card" style="background-color:#3c3c3c;">
	        <center><img src="image/icone_branco.png" class="img-fluid" alt="Ícone"></center>
			 <center>
			  <div class="card-body">
			  <h5 class="card-title" style="color: white;">Acesso ao Sistema</h5>
			  
			  <form method="POST" action="valida_login.php">
			  
			    <div class="form-floating mb-3">
				  <input type="text" class="form-control" id="floatingName" id="input_usuario" name="usuario" placeholder="Usuário" required>
				  <label for="floatingName">Usuário</label>
			    </div>
				
				<div class="form-floating mb-3">
				  <input type="password" class="form-control" id="floatingpassword" id="input_senha" name="senha" placeholder="Senha" required>
				  <label for="floatingName">Senha</label>
			    </div>
				 
				 <button type="button" class="btn btn-light">Entrar</button>
				 
			  </center>
	       </div>
	     </div>
	   </div>
	 </div>
    </div>
	<!--Bootstrap-JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<!--Bootstrap-JS-->
  </body>
</html>