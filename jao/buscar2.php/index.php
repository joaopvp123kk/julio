<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1><br>
        <form method="POST" action="inserir.php">
            <label for="nome">Nome completo:</label>
            <input id="nome" name="nome" type="text" required><br>

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" type="text" required><br>

            <label for="email">E-mail:</label>
            <input id="email" name="email" type="email" required><br>

            <label for="telefone">Telefone:</label>
            <input id="telefone" name="telefone" type="tel" required><br><br>

            <div class="pri">
                <input type="submit" value="Enviar os dados acima">
                <input type="reset" value="Limpar">
                <a href="buscar2.html" class="bnt-create" id=bnt-create">buscar</a>
            </div>
        </form>
        <form method="POST" action="buscar.php">
            <div class="seg">
                <input type="submit" value="Buscar Informações">
            </div>
        </form>
    </div>
</body>
</html>