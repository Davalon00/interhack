<?php

    $nome = $_POST[''];
    $nusp = $_POST['']; //ALTERAR BD E INSERT INTO
    $curso = $_POST['']; //ALTERAR BD E INSERT INTO


	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Interhack');
	$query = "INSERT INTO user (nome_usuario, pos_usuario, email_usuario, senha_usuario) VALUES ('$nome', '$posicao', '$email', '$senhacrip');

	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	header("Location: ");
	exit();

?>
