<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width-device-width, initial-scale=1.0">
    <tittle>Document</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post" action="#">
        <input type="number" name="n1" placeholder="digite o primeiro numero" require>
        <p><h2>
            +
        </h2></p>
        <input type="number" name="n2" placeholder="digite o segundo numero" require>
        <p></p>
        <input type="submit" name="calcular" value="Somar">
</form>

    <?php
        switch($operacao) {
            case 'soma':
                $resultado = $n1 + $n2;
                echo "<p>Resultado da soma: $resultado</p>";
                break;
            case 'subtracao':
                $resultado = $n1 - $n2;
                echo "<p>Resultado da subtração: $resultado</p>";
                break;
            case 'multiplicacao':
                $resultado = $n1 * $n2;
                echo "<p>Resultado da multiplicação: $resultado</p>";
                break;
            case 'divisao':
                if ($n2 != 0) {
                    $resultado = $n1 / $n2;
                    echo "<p>Resultado da divisão: $resultado</p>";
                } else {
                    echo "<p>Não é possível dividir por zero!</p>";
                }
                break;
            default:
                echo "<p>Operação inválida!</p>";
        }
    
?>
</body>
</html>