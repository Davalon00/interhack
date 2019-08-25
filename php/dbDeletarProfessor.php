<?php
	$id_professor = $_POST['id_professor'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "DELETE FROM professores WHERE id_professor='$id_professor';";

	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");

	header("Location: ../listarProfessor.php");
		exit;

?>
