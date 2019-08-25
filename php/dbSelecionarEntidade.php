<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'interhack');
	$query = "SELECT entidades.id_entidade, entidades.nome_entidade, entidades.sigla_entidade, entidades.curso_entidade, entidades.id_cadastrante, coordenadores.nome_coordenador FROM entidades
INNER JOIN coordenadores ON entidades.id_cadastrante = coordenadores.id_coordenador;";

	$search = mysqli_query($connect, $query);

?>
