<?php
	//session_start();
	//if(!isset($_SESSION['email'])){
	//	header("Location: index.php");
	//	exit;}

		$name = $_SESSION['name'];
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Cadastro</title>
	</head>
	<body>
		<h1>Bem vindo, <?=$name?></h1>

		<div>
			<a href="cadastro.php">

				<button class="btn btn-primary btn-lg">Cadastrar Funcionários</button>

			</a>
			<a href="funcionario.php">

				<button class="btn btn-primary btn-lg">Editar Funcionários</button>

			</a>
			<a href="cadastroUsuario.php">

				<button class="btn btn-primary btn-lg">Cadastrar usuários</button>

			</a>

			<form method="POST" action="logout.php">
				<input type="hidden" value="<?=$nome?>">
				<button type="submit" class="btn btn-danger btn-sm">Logout</button>
			</form>

		</div>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
