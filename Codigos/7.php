><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica N2</title>
</head>
<body>
    <?php 
    echo "<h2>Prueba de operador de comparacion</h2>";
    echo "<br>";
    $num=2;
    $nom="2";
    $c=$num==$nom;
    $d=$num===$nom;
    echo "Resultado del operador == ". $c;
    echo "<br>";
    echo "<h2>Prueba de operador de comparacion estricto</h2>";
    echo "<br>";
    echo "Resultado del operador === ". $d; ?>
</body>
</html>