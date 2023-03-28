<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylem.css">
    <title>Calculadora</title>
</head>
<body>

<main>

    <h1 align="center">Calculando com as operações</h1>

    <center>
        <form method="post">

            <label for="medida" id="frase">Digite o primeiro número:</label>
            <input type="number" name="v1" id="medida">

            <br><br>

            <label for="medida" id="frase">Digite o segundo número:</label>
            <input type="number" name="v2" id="medida">

            <br><br>

            <input type="submit" value="Calcular" id="btn">

        </form>
    </center>

    </main>


    <?php

    if ($_POST){
        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];

        $soma = $v1 + $v2;
        $sub = $v1 - $v2;
        $div = $v1 / $v2;
        $multi = $v1 * $v2;
        $expo = $v1 ** $v2;

        echo "<p align = 'center'> <strong> O resultado das operações são:
            <br> Soma: $soma
            <br> Subtração: $sub
            <br> Divisão: $div
            <br> Multiplicação: $multi
            <br> Potência: $expo </strong> </p>";
        }

    ?>
    
</body>
</html>