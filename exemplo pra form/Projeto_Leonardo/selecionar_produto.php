<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("Location: index.php");
		exit;
	}
?>

<html>
	<head>
        <title>Ecommerce</title>
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
		<h1>Tela de Listagem de Produtos</h1>

		<table class="table table-striped table-light">
			<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Descrição</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Marca</th>
					<th scope="col">Linha</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Preço de Compra</th>
					<th scope="col">Preço de Venda</th>
					<th scope="col">Margem de Lucro</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include 'db_selecionar_produto.php';
				 while($dados = mysqli_fetch_assoc($search)):?>

					<tr>
						<th scope="row">  	<?=$dados['id_produto']			?></th>
						<td>			   			 	<?=$dados['descricao'] 			?>	</td>
						<td>			   				<?=$dados['fornecedor']     ?></td>
						<td>			   				<?=$dados['marca']					?></td>
						<td>			  			  <?=$dados['linha']  				?></td>
						<td>			 				  <?=$dados['quantidade']  		?></td>
						<td>			 				  <?=$dados['preco_custo']   	?></td>
						<td>						    <?=$dados['preco_venda']   	?></td>
						<td>			  			  <?=$dados['margem_lucro']   ?></td>

							<form class="edit" action="editar_produto.php" method="POST">
								<input type="hidden" name="id_produto" 					value="<?=$dados['id_produto'] 		?>">
								<input type="hidden" name="descricao"		   			value="<?=$dados['descricao']			?>">
								<input type="hidden" name="fornecedor"		   		value="<?=$dados['fornecedor']	 	?>">
								<input type="hidden" name="marca"   						value="<?=$dados['marca']					?>">
								<input type="hidden" name="linha" 		   				value="<?=$dados['linha']  				?>">
								<input type="hidden" name="quantidade" 					value="<?=$dados['quantidade'] 		?>">
								<input type="hidden" name="preco_venda" 	  		value="<?=$dados['preco_custo']   ?>">
								<input type="hidden" name="preco_custo" 	  	  value="<?=$dados['preco_venda']   ?>">
								<input type="hidden" name="margem_lucro" 	 			value="<?=$dados['margem_lucro']  ?>">
								<button class="btn btn-primary">Editar</button>
							</form>

						</td>
						<td>
							<form class="delete" method="POST" action="db_deletar_produto.php">
								<input type="hidden" name="id_produto" value="<?=$dados['id_produto']?>">
								<button class="btn btn-danger">X</button>
							</form>
						</td>
					</tr>

				<?php endwhile ?>
			</tbody>
		</table>


		<a href="home.php">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
