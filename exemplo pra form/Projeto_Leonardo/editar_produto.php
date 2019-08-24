<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("Location: index.php");
		exit;}

		$id_produto = $_POST['id_produto'];
		$descricao = $_POST['descricao'];
		$fornecedor = $_POST['fornecedor'];
		$marca = $_POST['marca'];
		$linha = $_POST['linha'];
		$quantidade = $_POST['quantidade'];
		$preco_custo = $_POST['preco_custo'];
		$preco_venda = $_POST['preco_venda'];
	  $margem_lucro = $_POST['margem_lucro'];
?>
<html>
	<head>
		<meta charset ="UTF-8">
		<title>Cadastro</title>
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
		<div class="container">
			<h1>Tela de edição de produtos</h1>
			<form class="form-group" method="POST" action="db_alterar_produto.php">
				<div class="row">
					<div class="col-8">
						<label>Descrição:</label>
						<input type="text" name="descricao" class="form-control" value="<?= $descricao?>">
					</div>
					<div class="col-1">
						<input type="hidden" name="id_produto" class="form-control" value="<?= $id_produto?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<label>Fornecedor:</label>
						<input type="text" name="fornecedor" class="form-control" value="<?= $fornecedor?>">
					</div>
					<div class="col-md-2">
						<label>Marca:</label>
						<input type="text" name="marca" class="form-control" value="<?= $marca?>">
					</div>
					<div class="col-md-2">
						<label>Linha:</label>
						<input type="text" name="linha" class="form-control" value="<?= $linha?>">
					</div>
					<div class="col-md-2">
						<label>Quantidade:</label>
						<input type="number" min="0" name="quantidade" class="form-control" value="<?= $quantidade?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<label>Preço de Custo:</label>
						<input type="number" min="1" name="preco_custo" class="form-control" value="<?= $preco_custo?>">
					</div>
					<div class="col-md-3">
						<label>Preço de Venda:</label>
						<input type="number" min="1" name="preco_venda" class="form-control" value="<?= $preco_venda?>">
					</div>
				</div>
				<button type="submit" class="btn btn-secondary">Cadastrar</button>
			</form>
			<a href="selecionar_produto.php">
				<input class="btn btn-danger btn-sm" type='button' value='Voltar'/>
			</a>
		</div>
	</body>
</html>
