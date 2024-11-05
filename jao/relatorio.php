<?php
require 'conexao.php';

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$result = $conexao->query("SELECT * FROM cadastro");

if ($result === false) {
    echo "Erro na consulta SQL: " . $conexao->error;
} else {
  
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["descricao"] . " - " . $row["marca"] . " - " . $row["fornecedor"] . " - " . $row["preco"] . "<br>";
        }
    } else {
        echo "Nenhum registro encontrado";
    }
}
?>

<a href="menu.php">Voltar</a>
