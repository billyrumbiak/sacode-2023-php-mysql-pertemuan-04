<?php 
    $angka_satu = 50;
    $angka_dua = 10;
    $angka_tiga = 77;

    // Tambah
    $tambah = $angka_satu + $angka_dua + $angka_tiga;

    // Kurang
    $kurang = $angka_satu - $angka_dua;

    // Kali
    $kali = $angka_satu * $angka_tiga;

    // bagi
    $bagi = $angka_dua / $angka_tiga;

    $perhitungan = 1 + 4 * 3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data Integer</title>
</head>
<body>

    <p>Penambahan</p>
    <p> <?= $tambah ?></p>
    
    <p>Pengurangan</p>
    <p> <?= $kurang ?></p>

    <p>Perkalian</p>
    <p> <?= $kali ?></p>

    <p>Pembagian</p>
    <p> <?= $bagi ?></p>
    <p> <?= $perhitungan ?></p>


</body>
</html>