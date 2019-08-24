<?php
	$nome = $_POST['nome_funcionario'];
	$rg = $_POST['rg'];
	$cpf= $_POST['cpf'];
	$nascimento = $_POST['data_nascimento'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];
  $endereco = $_POST['endereco'];
  $numero = $_POST['numero'];
  $complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
  $cargo = $_POST['cargo'];
  $imagem = $_FILES['imagem']['tmp_name'];
  $tamanho = $_FILES['imagem']['size'];
  $tipo = $_FILES['imagem']['type'];
  $nome_imagem = $_FILES['imagem']['name'];

  if ( $imagem != "none" )
  {
      $fp = fopen($imagem, "rb");
      $conteudo = fread($fp, $tamanho);
      $conteudo = addslashes($conteudo);
      fclose($fp);


	     $connect = mysqli_connect('localhost', 'server', '', 'Ecommerce');
       $query = "INSERT INTO funcionarios (nome_funcionario, senha, rg, cpf, data_nascimento, email, telefone, endereco, numero, complemento, cargo, nome_imagem, tamanho_imagem, tipo_imagem, imagem) VALUES ('$nome', '$senha', '$rg', '$cpf', '$nascimento', '$email', '$telefone', '$endereco', '$numero', '$complemento', '$cargo', '$nome_imagem', '$tamanho', '$tipo', '$imagem');";

       $register = mysqli_query($connect, $query) or die("falha ao cadastrar");
       echo("Registro inserido com sucesso!");
       header('Location: home.php');
  }else{

		$connect = mysqli_connect('localhost', 'server', '', 'Ecommerce');
		$query = "INSERT INTO funcionarios (nome_funcionario, senha, rg, cpf, data_nascimento, email, telefone, endereco, numero, complemento, cargo) VALUES ('$nome', '$senha', '$rg', '$cpf', '$nascimento', '$email', '$telefone', '$endereco', '$numero', '$complemento', '$cargo');";

		$register = mysqli_query($connect, $query) or die("falha ao cadastrar");
		echo("Registro inserido com sucesso!");
		header('Location: home.php');
	}
?>
