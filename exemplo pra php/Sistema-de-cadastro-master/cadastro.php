<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
		<meta charset ="UTF-8">
		<title>Cadastro</title>
	</head>
	<body>
		<h1>Tela de cadastro de funcionário</h1>
		<p>Preencha as informações abaixo para cadastrar um funcionário</p>
		
		<form method="POST" action="cadastroFuncionario.php">
			<label>Nome:</label>
			<input type="text" name="name_worker">
			
			<label>Email:</label>
			<input type="email" name="email_worker">
			
			<label>Departamento:</label>
			<input type="text" name="department_worker">
			
			<label>Cargo:</label>
			<input type="text" name="position_worker">
			
			<label>Horas de trabalho:</label>
			<input type="number" min="1" name="hours_worker">
			
			<label>Salário:</label>
			<input type="number" min ="0" name="payment_worker">
			
			<button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
		</form>
		
		<a href="home.php">
			
			<button class="btn btn-danger btn-sm">Retornar</button>
				
		</a>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>