<?php
	$id_entidade = $_POST['id_entidade'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "DELETE FROM entidades WHERE id_entidade='$id_entidade';";

	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");

	header("Location: ../listarEntidade.php");
		exit;

?>
