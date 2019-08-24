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
		<h1>Tela de Listagem de Funcionários</h1>

		<table class="table table-striped table-light">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nome</th>
					<th scope="col">Usuário</th>
					<th scope="col">RG</th>
					<th scope="col">CPF</th>
					<th scope="col">Data de Nascimento</th>
					<th scope="col">E-mail</th>
					<th scope="col">Telefone</th>
					<th scope="col">Estado</th>
					<th scope="col">Cidade</th>
					<th scope="col">Bairro</th>
					<th scope="col">Endereço</th>
					<th scope="col">Número</th>
					<th scope="col">Complemento</th>
					<th scope="col">Cargo</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include 'db_selecionar_funcionario.php';
				while($dados = mysqli_fetch_assoc($search)):?>

					<tr>
						<th scope="row">  	<?=$dados['id_funcionario']		?></th>
						<td>			   			 	<?=$dados['nome_funcionario'] ?></td>
						<td>			   				<?=$dados['usuario']     			?></td>
						<td>			   				<?=$dados['rg']								?></td>
						<td>			  			  <?=$dados['cpf']  						?></td>
						<td>			 				  <?=$dados['data_nascimento']  ?></td>
						<td>			 				  <?=$dados['email']   					?></td>
						<td>						    <?=$dados['telefone']   			?></td>
						<td>			  			  <?=$dados['estado']   				?></td>
						<td>			 			    <?=$dados['cidade']  	 				?></td>
						<td>			 				  <?=$dados['bairro']   				?></td>
						<td>			 				  <?=$dados['endereco']   			?></td>
						<td>			 				  <?=$dados['numero']   				?></td>
						<td>				 		    <?=$dados['complemento']   		?></td>
						<td>						    <?=$dados['cargo']						?></td>

							<form class="edit" action="editar_funcionario.php" method="POST">
								<input type="hidden" name="id_funcionario" 		value="<?=$dados['id_funcionario'] 		?>">
								<input type="hidden" name="nome_funcionario"	value="<?=$dados['nome_funcionario']	?>">
								<input type="hidden" name="usuario"		   			value="<?=$dados['usuario']	 					?>">
								<input type="hidden" name="rg"   							value="<?=$dados['rg']								?>">
								<input type="hidden" name="cpf" 		   				value="<?=$dados['cpf']  							?>">
								<input type="hidden" name="data_nascimento" 	value="<?=$dados['data_nascimento'] 	?>">
								<input type="hidden" name="email" 	  		  	value="<?=$dados['email']   					?>">
								<input type="hidden" name="telefone" 	  	  	value="<?=$dados['telefone']   				?>">
								<input type="hidden" name="estado" 	 			  	value="<?=$dados['estado']   					?>">
								<input type="hidden" name="cidade" 		 	    	value="<?=$dados['cidade']   					?>">
								<input type="hidden" name="bairro" 	  		  	value="<?=$dados['bairro']   					?>">
								<input type="hidden" name="endereco" 	   			value="<?=$dados['endereco']   				?>">
								<input type="hidden" name="numero" 	  		  	value="<?=$dados['numero']   					?>">
								<input type="hidden" name="complemento" 	  	value="<?=$dados['complemento']   		?>">
								<input type="hidden" name="cargo" 	   				value="<?=$dados['cargo']   					?>">
								<button class="btn btn-primary">Editar</button>
							</form>

						<td>
							<form class="delete" method="POST" action="db_deletar_funcionario.php">
								<input type="hidden" name="id_funcionario" value="<?=$dados['id_funcionario']?>">
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
