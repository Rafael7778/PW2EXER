<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="mb">Digite o tamanho do arquivo (em MB): </label>
        <input type="text" id="mb" name="mb"><br>
        <label for="mbps">Digite a velocidade do link de internet (em Mbps): </label>
        <input type="text" id="mbps" name="mbps"><br><br>
        <input type="submit" value="Calcular">
    </form><br>
    <?php
    $mb = @$_POST['mb'];
    $mbps = @$_POST['mbps'];
    $vel = $mb/$mbps;
    $vel = $vel/60;

    echo "<p><b>O tempo até o fim do download do arquivo será de $vel minutos</b></p>"
    ?>
</body>
</html>