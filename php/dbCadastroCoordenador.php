<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
	  $senha = $_POST['senha'];
    $senhacrip = md5($senha);
    $numusp = $_POST['numusp'];
    $curso = $_POST['curso'];


	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Interhack');
	$query = "INSERT INTO coordenadores (nome_coordenador, email_coordenador, senha_coordenador, numusp_coordenador, curso_coordenador) VALUES ('$nome', '$email', '$senhacrip', '$numusp', '$curso');";

	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	header("Location: ../cadastroCoordenador.php");
	exit();

?>
