<?php
	/*session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}*/

	$id_coordenador = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$numusp = $_POST['numusp'];
	$curso = $_POST['curso'];

?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Coordenadores</title>
	</head>
	<body>
		<h1>Tela de edição de Coordenadores</h1>

		<form method="POST" action="./php/dbAlterarCoordenador.php">

			<input type="hidden" name="id_coordenador" value="<?= $id_coordenador ?>">

			<label>Nome:</label>
			<input type="text" name="nome_coordenador" value="<?= $nome?>">

			<label>Email:</label>
			<input type="email" name="email_coordenador" value="<?= $email?>">

			<label>Número USP:</label>
			<input type="text" name="numusp_coordenador" value="<?= $numusp?>">

			<label>Curso:</label>
			<input type="text" name="curso_coordenador" value="<?= $curso?>">

			<button type="submit">Editar</button>
		</form>

		<a href="listarCoordenador.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
