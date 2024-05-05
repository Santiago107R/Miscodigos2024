<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$b1=3;
$b2="Boca";
$r1=2;
$r2="River";
if ($b1>$r1) {
    echo "El ganador del partido es $b2, el resultado fue $b1 a $r1";
}
elseif ($r1>$b1) {
    echo "El ganador del partido es $r2, el resultado fue $r1 a $b1";
}
else {
    echo "El partido termino en empate";
}
?>
</body>
</html>