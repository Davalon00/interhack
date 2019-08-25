<?php
	/*session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}*/

	include './php/dbSelecionarProfessor.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Professores</title>
	</head>
	<body>
		<h1>Listagem de Professores</h1>

		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
										<th scope="col">Email</th>
                    <th scope="col">Número USP</th>
                    <th scope="col">Curso</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_professor']      ?>		</th>
                        <td>			         <?=$dados['nome_professor']    ?>    </td>
                        <td>			         <?=$dados['email_professor']   ?>		</td>
                        <td>			         <?=$dados['numusp_professor']  ?>		</td>
												<td>			         <?=$dados['curso_professor']   ?>		</td>
                        <td>

                            <form class="edit" action="editarProfessor.php" method="POST">
                                <input type="hidden" name="id"          value="<?=$dados['id_professor']      ?>">
                                <input type="hidden" name="nome"		    value="<?=$dados['nome_professor']	  ?>">
                                <input type="hidden" name="email"		    value="<?=$dados['email_professor']	  ?>">
																<input type="hidden" name="numusp"      value="<?=$dados['numusp_professor']  ?>">
																<input type="hidden" name="curso" 		  value="<?=$dados['curso_professor']   ?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="./php/dbDeletarProfessor.php">
                                <input type="hidden" name="id_professor" value="<?=$dados['id_professor']?>">
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
