<?php

    $nome_evento = $_POST['nome_evento'];
    $datai = $_POST['datai'];
    $horai = $_POST['horai'];
    $dataf = $_POST['dataf'];
    $horaf = $_POST['horaf'];
	
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'cadastro');
	$query = "INSERT INTO eventos (nome_usuario, datai, horai, dataf,horaf) VALUES ('$email', '$password', '$name',);";
	
	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');
	
	header("Location: cadastroUsuario.php");
	exit();

?>