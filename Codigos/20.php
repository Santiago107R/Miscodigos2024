<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$num=4;
$nom=2;
$sum=$num+$nom;
if ($sum>12) {
    $res=$sum-3;
    echo "La resta del resulado es $res";
}
elseif ($sum<5) {
    $suma=$sum+2;
    echo "La suma del resultado es $suma";
}
else {
    echo "el resultado de la suma es $sum";
}
    ?>
</body>
</html>