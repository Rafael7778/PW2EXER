<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form method="post" action="">
        <label for="cf">Custo de fábrica</label>
        <input type="text" id="cf" name="cf"><br><br>
        <input type="submit" value="Calcular">
        </form>
        <?php
        $cf = @$_POST['cf'];
        $pd = $cf*(28/100);
        $imp = $cf*(45/100);
        $cf = $cf+$pd+$imp;

        echo "<p>O valor para o consumidor será: $cf</p>";
        ?>
    </center>
</body>
</html>