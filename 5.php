<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>punto 3</title>
</head>
<body>
    <?php
    $n1=85;
    $n2=37;
    $n3=56; 
    if ($n1>$n2) {
        if ($n1>$n3) {
            $primer=$n1;
            if ($n2>$n3) {
                $segund=$n2;
                $tercer=$n3;
            }
            else {
                $segund=$n3;
                $tercer=$n2;
            }
            echo "el mayor numero de los tres es $n1";
        }
        else { 
            $primer=$n3;
            $segund=$n1;
            $tercer=$n2;
            echo "el mayor numero de los tres es $n3";
        }
    }     
    
    elseif ($n2>$n3) {
        $primer=$n2;
        if ($n1>$n3) {
            $segund=$n1;
            $tercer=$n3;
        }
        else {
            $segund=$n3;
            $tercer=$n1;
        }
        echo "el mayor numero de los tres es $n2";
    }   
    elseif ($n3>$n2) {
        $primer=$n3;
        $segund=$n2;
        $tercer=$n1;
        echo "el mayor numero de los tres es $n3";
    }
    else {
        echo "los tres numeros son iguales";
    }
echo "<br>";
echo $primer;
echo "<br>";
echo $segund;
echo "<br>";
echo $tercer;
    ?>
</body>
</html>