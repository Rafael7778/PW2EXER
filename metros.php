<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylem.css">
    <title>Converção de medidas</title>
</head>

<body>

<main>
    <h1 align="center">Convertor de Metros para centímetros</h1>

    <center>
        <form method="post">

            <label for="medida" id="frase"><strong>Coloque a medida em Metros:</strong></label>
            <input type="number" id="medida" name="medida">

            <br><br>

            <input type="submit" value="Converter" id="btn">

        </form>
    </center>
</main>


    <?php

    if ($_POST){

        $m = $_POST['medida'];

        $cm = $m * 100;

        echo "<center><p> $m m convertido para centímetros é igual a $cm cm.</p></center>";
    }

    ?>
    
</body>

</html>