<?php

	$email = $_POST['email'];
	$passwd = $_POST['password'];
	$password = md5($passwd);
	$name = $_POST['name'];
	
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'cadastro');
	$query = "INSERT INTO user (email, password, name) VALUES ('$email', '$password', '$name');";
	
	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');
	
	header("Location: cadastroUsuario.php");
	exit();
?>