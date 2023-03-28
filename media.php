<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylem.css">
    <title>Média final</title>
</head>
<body>

<main>

    <h1 align = "center"> Média Final </h1>

    <center>
        <form method="post">

            <label for="medida" id="frase">Digite a primeira nota:</label>
            <input type="number" name="n1" id="medida">

            <br><br>

            <label for="medida" id="frase">Digite a segunda nota:</label>
            <input type="number" name="n2" id="medida">

            <br><br>

            <label for="medida" id="frase">Digite a última nota:</label>
            <input type="number" name="n3" id="medida">

            <br><br>

            <input type="submit" value="Calcular" id ="btn">

        </form>
    </center>

</main>

    <?php

    if ($_POST){

        $n1= $_POST['n1'];
        $n2= $_POST['n2'];
        $n3= $_POST['n3'];

        $media = (($n1 * 2)+($n2 * 3)+($n3 * 5))/10;

        echo "<center><p> Sua média final é $media </p></center>";

        if ($media >= 6){

            echo "<center> Você foi aprovado!! </center>";

        } else if ($media == 5) {

            echo "<center> Você ficou de recuperação!! </center>";

        } else if ($media <= 4){

            echo "<center> Você foi reprovado!! </center>";

        }else {

        }

    }

    ?>
    
</body>
</html>