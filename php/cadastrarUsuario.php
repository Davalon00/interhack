<?php

    $name_evento = $_POST['nome_usuario'];
	$email = $_POST['email'];
	$passwd = $_POST['password'];
	$password = md5($passwd);
    $pos_usuario = $_POST['pos'];

	
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'cadastro');
	$query = "INSERT INTO user (email, password, name, pos_usuario) VALUES ('$email', '$password', '$name', '$pos_usuario');
	
	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');
	
	header("Location: cadastroUsuario.php");
	exit();

?>