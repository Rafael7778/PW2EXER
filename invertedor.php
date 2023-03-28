<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Invertedor</h1>
    <center>
        <form method="post" action="">
        Valor A: <input type="text" name="va"><br><br>
        Valor B: <input type="text" name="vb"><br><br>
        <input type="submit" value="Inverter">
        </form>
        <?php
        $va = @$_POST['vb'];
        $vb = @$_POST['va'];

        echo "<p>Valor A: $va <br><br> Valor B: $vb</p><br>";
        
        ?>
    </center>
</body>
</html>