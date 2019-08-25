<?php
	$id_aluno = $_POST['id_aluno'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "DELETE FROM alunos WHERE id_aluno='$id_aluno';";

	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");

	header("Location: ../listarAluno.php");
		exit;

?>
