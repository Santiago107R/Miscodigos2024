<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nom="jorgito";
$nmat="Ingles";
$c1=2;
$c2=3;
$c3=1;
$pro=($c1+$c2+$c3)/3;
if ($pro<=3) {
    echo 'Jorgito esta muy Desaprobado';
}
else if ($pro<7) {
    echo 'Jorgito esta Desaprobado';
} 
else {
    echo 'Jorgito esta Aprobado';
}
?>
</body>
</html>