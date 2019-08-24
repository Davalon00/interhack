<?php

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'ecommerce');
	$query = "SELECT * FROM funcionarios WHERE usuario ='$usuario' AND senha = '$senha'";

	$search = mysqli_query($connect, $query);
	$data = mysqli_fetch_assoc($search);

	if($data != null){

		echo "Logado com sucesso";

		session_start();
		$_SESSION['nome_funcionario'] = $data['nome_funcionario'];
		$_SESSION['usuario'] = $data['usuario'];


		header("Location: home.php");
		exit();

	}else{

		echo "Senha inválida";
		header("Location: index.php?login=0");
		exit();
	}
?>
