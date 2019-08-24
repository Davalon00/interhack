<?php

  $nome = $_POST[''];
	$email = $_POST[''];
	$senha = $_POST[''];
	$senhacrip = md5($passwd);
  $posicao = $_POST[''];


	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Interhack');
	$query = "INSERT INTO user (nome_usuario, pos_usuario, email_usuario, senha_usuario) VALUES ('$nome', '$posicao', '$email', '$senhacrip');

	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	header("Location: ");
	exit();

?>
