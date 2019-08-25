<?php

    $nome_evento = $_POST['nome'];
    $datai = $_POST['datai'];
    $horai = $_POST['horai'];
    $dataf = $_POST['dataf'];
    $horaf = $_POST['horaf'];
    $descricao_evento = $_POST['descricao'];

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Interhack');
	$query = "INSERT INTO eventos (nome_evento, datai_evento, dataf_evento, horai_evento, horaf_evento, descricao_evento) VALUES ('$nome_evento', '$datai', '$horai', '$dataf', '$horaf','$descricao_evento');";

	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	header("Location: ../cadastroEvento.php");
	exit();

?>
