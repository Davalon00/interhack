<?php
	$name = $_POST['name_worker'];
	$email = $_POST['email_worker'];
	$department= $_POST['department_worker'];
	$position = $_POST['position_worker'];
	$hours = $_POST['hours_worker'];
	$payment = $_POST['payment_worker'];
	
	$connect = mysqli_connect('localhost', 'root', '', 'cadastro');
	$query = "INSERT INTO worker (name, email, department, position, hours, payment) VALUES ('$name', '$email', '$department', '$position', '$hours', '$payment');";
	
	$register = mysqli_query($connect, $query) or die("falha ao cadastrar");
?>