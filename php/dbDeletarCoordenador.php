<?php
	$id_coordenador = $_POST['id_coordenador'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "DELETE FROM coordenadores WHERE id_coordenador='$id_coordenador';";

	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");

	header("Location: ../listarCoordenador.php");
		exit;

?>
