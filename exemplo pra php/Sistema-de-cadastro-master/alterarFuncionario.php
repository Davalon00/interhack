<?php
	$id_worker = $_POST['id_funcionario'];
	$name = $_POST['name_worker'];
	$email = $_POST['email_worker'];
	$department = $_POST['department_worker'];
	$position = $_POST['position_worker'];
	$hours = $_POST['hours_worker'];
	$payment = $_POST['payment_worker'];
	
	$connect = mysqli_connect('localhost', 'root', '', 'cadastro');
	$query = "UPDATE worker SET name='$name', email='$email', department='$department', position='$position', hours='$hours', payment='$payment' WHERE id_worker='$id_worker';";
	
	$register = mysqli_query($connect, $query) or die("falha ao editar!");
	
?>