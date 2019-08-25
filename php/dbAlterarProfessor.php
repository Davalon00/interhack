<?php
  $id_professor = $_POST['id_professor'];
  $nome = $_POST['nome_professor'];
  $email = $_POST['email_professor'];
  $numusp = $_POST['numusp_professor'];
  $curso = $_POST['curso_professor'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "UPDATE professores SET nome_professor='$nome', email_professor='$email', numusp_professor='$numusp', curso_professor='$curso' WHERE id_professor='$id_professor';";

	$register = mysqli_query($connect, $query) or die("falha ao editar!");

  header("Location: ../listarProfessor.php");
  exit();

?>
