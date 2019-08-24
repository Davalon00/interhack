<?php
	
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'cadastro');
	$query = "SELECT * FROM worker";

	$search = mysqli_query($connect, $query);

?>