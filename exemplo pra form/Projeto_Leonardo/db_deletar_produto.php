<?php
	$id_produto = $_POST['id_produto'];

	$connect = mysqli_connect('localhost', 'root', '', 'ecommerce');
	$query = "DELETE FROM produtos WHERE id_produto='$id_produto';";

	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");

	header("Location: selecionar_produto.php");
		exit;

?>
