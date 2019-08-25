<?php
	/*session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}*/

	include './php/selecionarAluno.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Alunos</title>
	</head>
	<body>
		<h1>Listagem de Alunos</h1>

		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">RG</th>
										<th scope="col">Número USP</th>
										<th scope="col">Cadastrado por:</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_aluno']     ?>		</th>
                        <td>			         <?=$dados['nome_aluno']   ?>   </td>
                        <td>			         <?=$dados['email_aluno']  ?>		</td>
                        <td>			         <?=$dados['rg_aluno']           ?>		</td>
												<td>			         <?=$dados['numusp_aluno'] ?>		</td>
												<td>			         <?=$dados['nome_coordenador']  ?>		</td>
                        <td>

                            <form class="edit" action="editarFuncionario.php" method="POST">
                                <input type="hidden" name="id"          value="<?=$dados['id_aluno']    ?>">
                                <input type="hidden" name="nome"		    value="<?=$dados['nome_aluno']	?>">
                                <input type="hidden" name="email"		    value="<?=$dados['email_aluno']	?>">
																<input type="hidden" name="rg"          value="<?=$dados['rg_aluno']          ?>">
																<input type="hidden" name="numusp" 		  value="<?=$dados['numusp_aluno']    ?>">
																<input type="hidden" name="coordenador" value="<?=$dados['nome_coordenador']	?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="deletarAluno.php">
                                <input type="hidden" name="id_aluno" value="<?=$dados['id_aluno']?>">
                                <button class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile ?>
                </tbody>
            </table>


		<a href="index.html">

			<button class="btn btn-danger btn-sm">Retornar</button>

		</a>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>
</html>
