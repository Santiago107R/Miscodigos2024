<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $n1=4;
    $n2=3;
    if ($n1>$n2) {
        if ($n2!=0){
        $div=$n1/$n2;
        echo "El resultado de la division es $div";
        }
        else {
            echo "ERROR";
        }
    }
    elseif ($n2>$n1) {
        $sum=$n1+$n2;
        echo "El resultado de la suma es $sum";
    }  //tambien puede usarse >= en vez de ese elseif y else
    else {
        $sum=$n1+$n2;
        echo "El resultado de la suma es $sum";
    }
    ?>
</body>
</html>