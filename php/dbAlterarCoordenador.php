<?php
  $id_coordenador = $_POST['id_coordenador'];
  $nome = $_POST['nome_coordenador'];
  $email = $_POST['email_coordenador'];
  $numusp = $_POST['numusp_coordenador'];
  $curso = $_POST['curso_coordenador'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "UPDATE coordenadores SET nome_coordenador='$nome', email_coordenador='$email', numusp_coordenador='$numusp', curso_coordenador='$curso' WHERE id_coordenador='$id_coordenador';";

	$register = mysqli_query($connect, $query) or die("falha ao editar!");

  header("Location: ../listarCoordenador.php");
  exit();

?>
