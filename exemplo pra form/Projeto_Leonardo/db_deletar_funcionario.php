<?php
	$id_funcionario = $_POST['id_funcionario'];

	$connect = mysqli_connect('localhost', 'root', '', 'ecommerce');
	$query = "DELETE FROM funcionarios WHERE id_funcionario='$id_funcionario';";

	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");

	header("Location: selecionar_funcionario.php");
		exit;

?>
