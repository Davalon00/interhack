<?php
  $id_evento = $_POST['id_evento'];
  $nome = $_POST['nome_evento'];
  $datai = $_POST['datai_evento'];
  $dataf = $_POST['dataf_evento'];
  $horai = $_POST['horai_evento'];
  $horaf = $_POST['horaf_evento'];

	$connect = mysqli_connect('localhost', 'root', '', 'interhack');
	$query = "UPDATE eventos SET nome_evento='$nome', datai_evento='$datai', dataf_evento='$dataf', horai_evento='$horai', horaf_evento='$horaf' WHERE id_evento='$id_evento' ";

  echo "UPDATE eventos SET nome_evento='$nome', datai_evento='$datai', dataf_evento='$dataf', horai_evento='$horai', horaf_evento='$horaf' WHERE id_evento='$id_evento' ";

	$register = mysqli_query($connect, $query) or die("falha ao editar!");

  header("Location: ../listarEvento.php");
  exit();

?>
