<?php
	session_start();
	if(!isset($_POST['email'])){
		header("Location: home.php");
		exit;
	}

	
	$email = $_POST['email'];
	$passwd = $_POST['passwd'];
	$passwd = md5($passwd);
	
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'cadastro');
	$query = "SELECT * FROM user WHERE email ='$email' AND password = '$passwd'";

	$search = mysqli_query($connect, $query);
	$data = mysqli_fetch_assoc($search);

	if($data != null){
		
		echo "Logado com sucesso";
		
		session_start();
		$_SESSION['name'] = $data['name'];
		$_SESSION['email'] = $data['email'];
		
		header("Location: home.php");
		exit();
		
	}else{
		
		echo "Senha inválida";
		header("Location: index.php?login=0");
		exit();
	}
?>