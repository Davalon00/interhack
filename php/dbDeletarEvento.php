<?php
	$id_evento = $_POST['id_evento'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "DELETE FROM eventos WHERE id_evento='$id_evento';";

	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");

	header("Location: ../listarEvento.php");
		exit;

?>
