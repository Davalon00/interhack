<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}
		
	$id_funcionario = $_POST['id_funcionario'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$departamento = $_POST['departamento'];
	$cargo = $_POST['cargo'];
	$horas = $_POST['horas'];
	$pagamento = $_POST['pagamento'];
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<meta charset ="UTF-8">
		<title>Cadastro</title>
	</head>
	<body>
		<h1>Tela de edição de funcionários</h1>
		
		<form method="POST" action="alterarFuncionario.php">
		
			<input type="hidden" name="id_funcionario" value="<?= $id_funcionario ?>">
		
			<label>Nome:</label>
			<input type="text" name="name_worker" value="<?= $nome?>">
			
			<label>Email:</label>
			<input type="email" name="email_worker" value="<?= $email?>">
			
			<label>Departamento:</label>
			<input type="text" name="department_worker" value="<?= $departamento?>">
			
			<label>Cargo:</label>
			<input type="text" name="position_worker" value="<?= $cargo?>">
			
			<label>Horas de trabalho:</label>
			<input type="number" min="1" name="hours_worker" value="<?= $horas?>">
			
			<label>Salário:</label>
			<input type="number" min ="0" name="payment_worker" value="<?= $pagamento?>">
			
			<button type="submit">Cadastrar</button>
		</form>
		
		<a href="home.php">
			
			<button class="btn btn-danger btn-sm">Retornar</button>
				
		</a>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>