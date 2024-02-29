<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-Vindos</title>
  </head>
  <!--Bootstrap-CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--Bootstrap-CSS-->
  <!--JS-->
  <script type="text/javascript">
  function redirectTime(){
	  window.location = "login.php"
	  //window.location = "manutencao.php"
  }
  </script>
  <!--JS-->
  <body onLoad="setTimeout('redirectTime()',2000)" style="background-color: black;">
    <center><img src="image/icone_branco.png" class="img-fluid" alt="Ícone" width="431" height="400"></center>
	<center>
	 <div class="spinner-border text-light" role="status">
      <span class="visually-hidden">Loading...</span>
     </div>
	 <p class="text-light" >Bem Vindos! carregando o sistema...</p>
	</center>
    <!--Bootstrap-JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<!--Bootstrap-JS-->
  </body>
</html>