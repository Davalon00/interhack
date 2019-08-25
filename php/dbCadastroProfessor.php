<?php

    $nome = $_POST['nome'];
    $nusp = $_POST['numusp'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
	  $senha = $_POST['senha'];
    $senhacrip = md5($passwd);
    $id_cadastrante = $POST['id_cadastrante'];


	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Interhack');
	$query = "INSERT INTO user (nome_professor, numusp_professor, email_professor, senha_professor, id_cadastrante) VALUES ('$nome', '$nusp', '$email', '$senhacrip', $id_cadastrante);";

	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	header("Location: cadastroProfessor.php");
	exit();

?>
