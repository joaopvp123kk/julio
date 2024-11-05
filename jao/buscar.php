<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'dadosusuario';

       
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT nome, cpf, email, telefone FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Informações Cadastradas</h1>";
        echo "<table><tr><th>Nome Completo</th><th>CPF</th><th>Email</th><th>Telefone</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["cpf"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telefone"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum dado encontrado.";
    }

    $conn->close();
?>