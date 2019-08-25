<?php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $senhacrip = md5($senha);
    $sigla = $_POST['sigla'];
    $curso = $_POST['curso'];
    $id_cadastrante = $_POST['id_cadastrante'];


	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Interhack');
	$query = "INSERT INTO user (nome_entidade, senha_entidade, sigla_entidade, curso_entidade, id_cadastrante) VALUES ('$nome', '$senhacrip', '$sigla', '$curso', $id_cadastrante');";

	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	header("Location: cadastroEntidade.php");
	exit();

?>
