<?php
	$id_funcionario = $_POST['id_funcionario'];
	$nome_funcionario = $_POST['nome_funcionario'];
	$usuario = $_POST['usuario'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$data_nascimento = $_POST['data_nascimento'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$cargo = $_POST['cargo'];

	$connect = mysqli_connect('localhost', 'root', '', 'ecommerce');
	$query = "UPDATE funcionarios SET nome_funcionario='$nome_funcionario', usuario='$usuario', rg='$rg', cpf='$cpf', data_nascimento='$data_nascimento', email='$email', telefone='$telefone', estado='$estado', cidade='$cidade', bairro='$bairro', endereco='$endereco', numero='$numero', complemento='$complemento', cargo='$cargo' WHERE id_funcionario='$id_funcionario';";

	$register = mysqli_query($connect, $query) or die("falha ao editar!");
	header("Location: selecionar_funcionario.php");
		exit;
?>
