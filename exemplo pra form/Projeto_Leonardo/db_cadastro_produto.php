<?php
	$descricao = $_POST['descricao'];
	$fornecedor = $_POST['fornecedor'];
	$marca = $_POST['marca'];
	$linha = $_POST['linha'];
	$quantidade = $_POST['quantidade'];
	$preco_custo = $_POST['preco_custo'];
	$preco_venda = $_POST['preco_venda'];
  $margem_lucro = $_POST['margem_lucro'];
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
       $query = "INSERT INTO funcionarios (descricao, fornecedor, marca, linha, quantidade, preco_custo, preco_venda, margem_lucro, nome_imagem, tamanho_imagem, tipo_imagem, imagem) VALUES ('$descricao', '$fornecedor', '$marca', '$linha', '$quantidade', '$preco_custo', '$preco_venda', '$margem_lucro','$nome_imagem', '$tamanho', '$tipo', '$imagem');";

       $register = mysqli_query($connect, $query) or die("falha ao cadastrar");
       echo("Registro inserido com sucesso!");
       header('Location: home.php');
  }else{

		$connect = mysqli_connect('localhost', 'server', '', 'Ecommerce');
		$query = "INSERT INTO funcionarios (descricao, fornecedor, marca, linha, quantidade, preco_custo, preco_venda, margem_lucro) VALUES ('$descricao', '$fornecedor', '$marca', '$linha', '$quantidade', '$preco_custo', '$preco_venda', '$margem_lucro');";

		$register = mysqli_query($connect, $query) or die("falha ao cadastrar");
		echo("Registro inserido com sucesso!");
		header('Location: home.php');
	}
?>
