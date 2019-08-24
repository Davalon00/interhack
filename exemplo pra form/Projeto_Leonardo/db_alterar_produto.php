<?php
$id_produto = $_POST['id_produto'];
$descricao = $_POST['descricao'];
$fornecedor = $_POST['fornecedor'];
$marca = $_POST['marca'];
$linha = $_POST['linha'];
$quantidade = $_POST['quantidade'];
$preco_custo = $_POST['preco_custo'];
$preco_venda = $_POST['preco_venda'];
$margem_lucro = $_POST['margem_lucro'];

	$connect = mysqli_connect('localhost', 'root', '', 'ecommerce');
	$query = "UPDATE produtos SET descricao='$descricao', Fornecedor='$fornecedor', marca='$marca', linha='$linha', quantidade='$quantidade', preco_custo='$preco_custo', preco_venda='$preco_venda', margem_lucro='$margem_lucro' WHERE id_produto='$id_produto';";

	$register = mysqli_query($connect, $query) or die("falha ao editar!");
	header("Location: selecionar_produto.php");
		exit;
?>
