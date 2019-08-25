<?php
  $id_aluno = $_POST['id_aluno'];
  $nome = $_POST['nome_aluno'];
  $email = $_POST['email_aluno'];
  $rg = $_POST['rg_aluno'];
  $numusp = $_POST['numusp_aluno'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "UPDATE alunos SET nome_aluno='$nome', email_aluno='$email', rg_aluno='$rg', numusp_aluno='$numusp' WHERE id_aluno='$id_aluno';";

	$register = mysqli_query($connect, $query) or die("falha ao editar!");

  header("Location: ../listarAluno.php");
  exit();

?>
