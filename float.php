<?php
    $x = 10.5;
    $y = 13.3;

    $tambah = $x + $y;

    var_dump($tambah);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data Float</title>
</head>
<body>

    <p>Tipe Data Float (Bilangan Pecahan)</p>
    <p><?= $x ?></p>
    <p><?= $y ?></p>
    <p><?= $x ?> + <?= $y ?> = <?= $tambah ?></p>
    
</body>
</html>