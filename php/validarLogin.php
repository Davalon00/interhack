<?php

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	//$passwd = md5($passwd);

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'interhack');
	$query = "SELECT * FROM coordenadores WHERE email_coordenador ='$email' AND senha_coordenador = '$senha'";

	$search = mysqli_query($connect, $query);
	$data = mysqli_fetch_assoc($search);

	if($data != null){

		echo "Logado com sucesso";

		session_start();
		$_SESSION['name'] = $data['nome_coordenador'];
		$_SESSION['email'] = $data['email_coordenador'];

		header("Location: ../home.php");
		exit();

	}else{

		echo "Senha inválida";
		header("Location: ../index.php?login=0");
		exit();
	}
?>
