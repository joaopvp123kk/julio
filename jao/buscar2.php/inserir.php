<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'dadosusuario';

        // Criando a conexão
    $conn = new mysqli($servername, $username, $password);

        
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        if ($conn->query($sql) === TRUE) {
            echo "Banco de dados criado com SUCESSO. <br>";
        } else {
            die("Erro ao criar o banco de dados: " . $conn->error);
        }

        
    $conn->select_db($dbname);

        
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(50) NOT NULL,
            cpf VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL,
            telefone VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

        if ($conn->query($sql) === TRUE) {
            echo "Tabela criada com SUCESSO. <br>";
        } else {
            die("Erro ao criar a tabela: " . $conn->error);
        }

        
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

        
    $sql = "INSERT INTO usuarios (nome, cpf, email, telefone) VALUES ('$nome','$cpf','$email','$telefone')";
        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com SUCESSO!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

    $conn->close();
?>