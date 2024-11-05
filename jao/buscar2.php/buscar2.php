<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Nome pelo CPF e Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Buscar Nome</h1>

    <form method="POST" action="">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Digite o Email" required>

        <input type="submit" value="Buscar">
    </form>

    <?php
    // Conexão com o banco de dados
    $servername = 'localhost'; // Endereço do servidor MySQL
    $username = 'root'; // Usuário do MySQL
    $password = ''; // Senha do MySQL
    $dbname = 'cadastro'; // Nome do banco de dados

    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Se o formulário foi enviado, realiza a busca
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        // Consulta para buscar o nome com o CPF e Email fornecidos
        $sql = "SELECT nome FROM cadastro WHERE cpf = ? AND email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $cpf, $email);
        $stmt->execute();
        $stmt->bind_result($nome);
        $stmt->fetch();

        // Exibe o nome se encontrado
        if ($nome) {
            echo "<div class='resultado'>Nome encontrado: $nome</div>";
        } else {
            echo "<div class='resultado'>Nenhum usuário encontrado com o CPF e email fornecidos.</div>";
        }
        $stmt->close();
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>
</div>

</body>
</html>
