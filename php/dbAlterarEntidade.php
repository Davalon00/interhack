<?php
  $id_entidade = $_POST['id_entidade'];
  $nome = $_POST['nome_entidade'];
  $sigla = $_POST['sigla_entidade'];
  $curso = $_POST['curso_entidade'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "UPDATE entidades SET nome_entidade='$nome', sigla_entidade='$sigla', curso_entidade='$curso' WHERE id_entidade='$id_entidade' ";

	$register = mysqli_query($connect, $query) or die("falha ao editar!");

  header("Location: ../listarEntidade.php");
  exit();

?>
