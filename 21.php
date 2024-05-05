<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=12;
    $b=17;
    if ($a>$b) {
        echo "El mayor de ambos es $a";
    }
    elseif ($b>$a) {
        echo "El mayor de ambos es $b";
    }
    else {
        echo "ERROR";
    }
    ?>
</body>
</html>