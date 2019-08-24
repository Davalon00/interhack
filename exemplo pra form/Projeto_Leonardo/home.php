<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("Location: index.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">

  <link href="css/button.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="img-fundo">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Menu</a>
      <div class="dropdown-menu">
		<a class="dropdown-item" href="home.php">Home</a>
        <a class="dropdown-item" href="cadastro_funcionario.php">Cadastro Funcionario</a>
        <a class="dropdown-item" href="selecionar_funcionario.php">Relatório Funcionario</a>
        <a class="dropdown-item" href="cadastro_produto.php">Cadastro Produto</a>
        <a class="dropdown-item" href="selecionar_produto.php">Relatório Produto</a>
				<a class="dropdown-item" href="logout.php">Sair</a>
      </div>
    </li>
  </ul>
</nav>
</body>
</html>
