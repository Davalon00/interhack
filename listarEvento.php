<?php
	/*session_start();
	if(!isset($_SESSION['email'])){
		header("Location: index.php");
		exit;}*/

	include './php/dbSelecionarEvento.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<meta charset ="UTF-8">
		<title>Eventos</title>
	</head>
	<body>
		<h1>Listagem de Eventos</h1>

		<table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data Inicial</th>
										<th scope="col">Data Final</th>
                    <th scope="col">Hora Inicial</th>
                    <th scope="col">Hora Final</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($search)):?>

                    <tr>
                        <th scope="row">   <?=$dados['id_evento']     ?>		</th>
                        <td>			         <?=$dados['nome_evento']   ?>    </td>
                        <td>			         <?=$dados['datai_evento']  ?>		</td>
                        <td>			         <?=$dados['dataf_evento']  ?>		</td>
												<td>			         <?=$dados['horai_evento']  ?>		</td>
                        <td>			         <?=$dados['horaf_evento']  ?>		</td>
                        <td>

                            <form class="edit" action="editarevento.php" method="POST">
                                <input type="hidden" name="id"          value="<?=$dados['id_evento']    ?>">
                                <input type="hidden" name="nome"		    value="<?=$dados['nome_evento']	 ?>">
                                <input type="hidden" name="datai"		    value="<?=$dados['datai_evento'] ?>">
																<input type="hidden" name="dataf"       value="<?=$dados['dataf_evento'] ?>">
																<input type="hidden" name="horai" 		  value="<?=$dados['horai_evento'] ?>">
                                <input type="hidden" name="horai" 		  value="<?=$dados['horaf_evento'] ?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="./php/dbDeletarEvento.php">
                                <input type="hidden" name="id_evento" value="<?=$dados['id_evento']?>">
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
