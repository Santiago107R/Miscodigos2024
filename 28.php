<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=-38;
    $b=52;
    $c=9;
    if ($a>0 or $b>0 or $c>0) {
        $cont=0;
        echo "Los numeros positivos son:";
        echo "<br>";
        if ($a>0) {
            $e=$a;
            $cont=$cont+1;
            echo $e;
            echo "<br>";
        }
        if ($b>0) {
            $i=$b;
            $cont=$cont+1;
            echo $i;
            echo "<br>";
        }
        if ($c>0) {
            $o=$c;
            $cont=$cont+1;
            echo $o;
            echo "<br>";
        }
        
          echo "En total son $cont positivos";
          echo "<br>";
    }
     if ($a<0 or $b<0 or $c<0) {
        $cont=0;
        echo "<br>";
        echo "Los numeros negativos son:";
        echo "<br>";
        if ($a<0) {
            $x=$a;
            $cont=$cont+1;
            echo $x;
            echo "<br>";
        }
        if ($b<0) {
            $y=$b;
            $cont=$cont+1;
            echo $y;
            echo "<br>";
        }
        if ($c<0) {
            $z=$c;
            $cont=$cont+1;
            echo $z;
            echo "<br>";
        }
            echo "En total son $cont negativos";
    }
    ?>
</body>
</html>