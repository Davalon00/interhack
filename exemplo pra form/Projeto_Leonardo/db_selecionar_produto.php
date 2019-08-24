<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'ecommerce');
	$query = "SELECT * FROM produtos";

	$search = mysqli_query($connect, $query);

?>
