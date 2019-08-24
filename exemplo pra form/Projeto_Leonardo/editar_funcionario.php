<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: index.php");
	exit;}

	$id_funcionario = $_POST['id_funcionario'];
	$nome_funcionario = $_POST['nome_funcionario'];
	$usuario = $_POST['usuario'];
	$rg = $_POST['rg'];
	$cpf= $_POST['cpf'];
	$nascimento = $_POST['data_nascimento'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cargo = $_POST['cargo'];

	?>

<html lang="pt-br">
	<head>
		<title>Cadastro</title>
		<meta charset ="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/button.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Menu</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="home.php">Home</a>
					<a class="dropdown-item" href="cadastro_funcionario.php">Cadastro Funcionario</a>
					<a class="dropdown-item" href="selecionar_funcionario.php">Relatório Funcionario</a>
					<a class="dropdown-item" href="cadastro_produto.php">Cadastro Produto</a>
					<a class="dropdown-item" href="selecionar_produto.php">Relatório Produto</a>
				</div>
				</li>
			</ul>
		</nav>
		<h1>Tela de edição de funcionários</h1>
		<div class="container">
			<form class="form-group" method="POST" action="db_alterar_funcionario.php">
				<div class="row">
					<div class="col-8">
						<label>Nome:</label>
						<input type="text" name="nome_funcionario" class="form-control" value="<?= $nome_funcionario?>">
					</div>
					<div class="col-1">
						<input type="hidden" name="id_funcionario" class="form-control" value="<?= $id_funcionario?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<label>RG:</label>
						<input type="text" name="rg" class="form-control" value="<?= $rg?>">
					</div>
					<div class="col-md-3">
						<label>CPF:</label>
						<input type="text" name="cpf" class="form-control" value="<?= $cpf?>">
					</div>
					<div class="col-md-3">
						<label>Data de Nascimento:</label>
						<input type="date" name="data_nascimento" class="form-control" value="<?= $data_nascimento?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<label>Telefone:</label>
						<input type="text" name="telefone" class="form-control" value="<?= $telefone?>">
					</div>
					<div class="col-md-3">
						<label>E-mail:</label>
						<input type="email" name="email" class="form-control" value="<?= $email?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<label>Endereço:</label>
						<input type="text" name="endereco" class="form-control" value="<?= $endereco?>">
					</div>
					<div class="col-md-1">
						<label>Número:</label>
						<input type="text" name="numero" class="form-control" value="<?= $numero?>">
					</div>
					<div class="col-md-2">
						<label>Bairro:</label>
						<input type="text" name="bairro" class="form-control" value="<?= $bairro?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>Complemento:</label>
						<input type="text" name="complemento" class="form-control" value="<?= $complemento?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<label>Cidade:</label>
						<input type="text" name="cidade" class="form-control" value="<?= $cidade?>">
					</div>
					<div class="col-md-3">
						<label>Estado:</label>
						<input type="text" name="estado" class="form-control" value="<?= $estado?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<label>Cargo:</label>
						<input type="text" name="cargo" class="form-control" value="<?= $cargo?>">
					</div>
				</div>
				<div class="row">
					<div class="col-8">
						<label>Usuário:</label>
						<input type="text" name="usuario" class="form-control" value="<?= $usuario?>">
					</div>
				</div>
				<button type="submit" class="btn btn-secondary">Cadastrar</button>
			</form>
			<a href="selecionar_funcionario.php">
				<input class="btn btn-danger btn-sm" type='button' value='Voltar'/>
			</a>
		</div>
	</body>
</html>
