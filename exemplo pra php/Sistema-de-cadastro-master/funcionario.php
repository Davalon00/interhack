<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}
		
	include 'selecionarTrabalhador.php';	
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Cadastro</title>
	</head>
	<body>
		<h1>Tela de Listagem de funcionários</h1>
		
		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Departamento</th>
					<th scope="col">Posição</th>
					<th scope="col">Horas de trabalho</th>
					<th scope="col">Salário</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_worker'] ?>		</th>
                        <td>			   <?=$dados['name']	  ?>    	</td>
                        <td>			   <?=$dados['email']     ?>		</td>
                        <td>			   <?=$dados['department']?>		</td>
						<td>			   <?=$dados['position']  ?>		</td>
						<td>			   <?=$dados['hours']     ?>		</td>
						<td>			   <?=$dados['payment']   ?>		</td>
                        <td>

                            <form class="edit" action="editarFuncionario.php" method="POST">
                                <input type="hidden" name="id_funcionario" value="<?=$dados['id_worker'] ?>">
                                <input type="hidden" name="nome"		   value="<?=$dados['name']		 ?>">
                                <input type="hidden" name="email"		   value="<?=$dados['email']	 ?>">
								<input type="hidden" name="departamento"   value="<?=$dados['department']?>">
								<input type="hidden" name="cargo" 		   value="<?=$dados['position']  ?>">
								<input type="hidden" name="horas" 		   value="<?=$dados['hours']	 ?>">
								<input type="hidden" name="pagamento" 	   value="<?=$dados['payment']   ?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="deletarFuncionario.php">
                                <input type="hidden" name="id_funcionario" value="<?=$dados['id_worker']?>">
                                <button class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
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