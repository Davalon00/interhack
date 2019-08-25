<?php

    $nome = $_POST['nome'];
    $nusp = $_POST['numusp']; //ALTERAR BD E INSERT INTO
	  $email = $_POST['email'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $rg = $_POST['rg'];
    $curso = $_POST['curso']; //ALTERAR BD E INSERT INTO

    $senhacrip = md5($senha1);
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'interhack');
	  $query = "INSERT INTO alunos (nome_aluno, numusp_aluno, email_aluno, senha_aluno, rg_Aluno) VALUES ('$nome', '$nusp', '$email', '$senhacrip', '$rg')";

	  $register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

  header("Location: ../cadastroAluno.php");
  exit();
?>
