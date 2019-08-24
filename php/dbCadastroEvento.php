<?php

    $nome_evento = $_POST['nome'];
    $datai = $_POST['datai'];
    $horai = $_POST['horai'];
    $dataf = $_POST['dataf'];
    $horaf = $_POST['horaf'];
    $pos_usuario = $_POST['pos_usuario'];
    $id_usuario = $_POST['id_usuario'];

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Interhack');
	$query = "INSERT INTO eventos (nome_evento, datai_evento, dataf_evento, horai_evento, horaf_evento, id_usuario, pos_usuario) VALUES ('$nome_evento', '$datai', '$horai', '$dataf', '$horaf','$pos_usuario');";

	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	header("Location: cadastroEvento.php");
	exit();

?>
