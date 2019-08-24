<?php
	$id_worker = $_POST['id_funcionario'];

	$connect = mysqli_connect('localhost', 'root', '', 'cadastro');
	$query = "DELETE FROM worker WHERE id_worker='$id_worker';";
	
	$delete = mysqli_query($connect, $query) or die("falha ao apagar!");
	
	header("Location: funcionario.php");
		exit;
	
?>