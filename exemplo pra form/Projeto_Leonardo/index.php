<?php
  session_start();
	if(isset($_SESSION['usuario'])){
		header("Location: home.php");
    exit;
  }

?>
<html lang="pt-br">
  <head>
    <title>Ecommerce</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="login">
    <div class="heading">
    <h2>Entrar</h2>
    <form  method="POST" action="conf_login.php">

        <div class="input-group input-group-lg">
            <input type="text" name="usuario" class="form-control" placeholder="Usuário">
        </div>

        <div class="input-group input-group-lg">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
        </div>

        <button type="submit" class="float">Login</button>
       </form>
 		</div>
    </div>
  </body>
</html>
