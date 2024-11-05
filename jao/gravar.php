<?php
require 'conexao.php';

$descricao = $_Post['descricao'];
$marca = $_Post['marca'];
$fornecedor = $_Post['Fornecedor'];
$preco = $_Post['preco'];

$sql = "insert into produtos (descricao, marca, fornecedor, preco) values ('$descricao', '$marca', '$fornecedor', '$preco')";

mysqli_query($conexao, $sql);

header("Location: menu.php");

?>