<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $p1=56;
    $p2=12;
    if ($p1>$p2) {
        echo "El mayor de ambos es $p1";
    }
    elseif ($p2>$p1) {
        echo "El mayor de ambos es $p2";
    }
    else {
        echo "Los numeros son iguales";
    }
    ?>
</body>
</html>