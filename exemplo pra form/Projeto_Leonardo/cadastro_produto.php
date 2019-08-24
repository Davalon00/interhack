<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("Location: index.php");
		exit;
	}
?>
<html lang="pt-br">
    <head>
        <title>Cadastro Produtos</title>
        <meta charset="utf-8">
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
            <form class="form-group" method="POST" action="db_cadastro_produto.php">
                <div class="row">
                    <div class="col-8">
                        <label>Descrição</label>
                        <input type="text" id="descricao" class="form-control">
                    </div>
                </div>
                <div class="row">
					<div class="col-md-2">
                        <label>Fornecedor</label>
                        <input type="text" id="fornecedor" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Marca</label>
                        <input type="text" id="marca" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Linha</label>
                        <input type="text" id="linha" class="form-control">
                    </div>
					<div class="col-md-2">
                        <label>Quantidade</label>
                        <input type="number" id="quantidade" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Preço de Custo</label>
                        <input type="text" id="preco_custo" class="form-control">
                    </div>
					<div class="col-md-2">
                        <label>Margem Lucro</label>
                        <input type="text" id="margem_lucro" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>Preço de Venda</label>
                        <input type="text" id="preco_venda" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <label>Foto do produto</label>
                        <input type="file" id="imagem" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">Cadastrar</button>
            </form>
            <a href="home.php">
                <input class="btn btn-danger btn-sm" type='button' value='Voltar'/>
            </a>
        </div>
    </body>
</html>
