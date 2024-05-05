<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $w1=6;
    $w2=9;
    if ($w1<$w2) {
        echo "$w1, $w2";
    }
    elseif ($w2<$w1) {
        echo "$w2, $w1";
    }
    else {
        echo "Error";
    }
    ?>
</body>
</html>