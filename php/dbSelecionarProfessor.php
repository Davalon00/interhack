<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'interhack');
	$query = "SELECT professores.id_professor, professores.nome_professor, professores.numusp_professor, professores.email_professor, professores.curso_professor, professores.id_cadastrante, coordenadores.nome_coordenador FROM professores
INNER JOIN coordenadores ON professores.id_cadastrante = coordenadores.id_coordenador;";

	$search = mysqli_query($connect, $query);

?>
