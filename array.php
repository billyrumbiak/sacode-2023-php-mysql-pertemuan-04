<?php

    //cara lama
    $a = array('Jayapura', 'Biak', 'Wamena', 'Nabire');

    // cara baru
    $b = ['Papua', 'Papua Barat', 'Maluku', 'Maluku Utara'];

    // echo ($a);

    echo "<br>";

    // $namaKota sebagai inisialisasi

    foreach($a as $namaKota) {
        echo $namaKota . "<br>";
    }

    // Array Associatice - Kita Ganti Nomor dengan Nama
    $c = [
        "Billy" => "Biak",
        "Samuel" => "Sorong",
        "Calvin" => "Wamena"
    ];

    // var_dump($c);
    echo "<br>";
    echo $c['Billy'] . "<br>";
    echo $c['Samuel'] . "<br>";
    echo $c['Calvin'] . "<br>";

    $data_kendaraan = [
        [
            "nama_kendaraan" => "Motor Beat Honda",
            "tahun_beli" => "2022",
            "harga" => "20.000.000"
        ],
        [
            "nama_kendaraan" => "Mobil Avanza",
            "tahun_beli" => "2022",
            "harga" => "100.000.000"
        ],
        [
            "nama_kendaraan" => "Motor Beat Honda",
            "tahun_beli" => "2022",
            "harga" => "20.000.000"
        ],
        [
            "nama_kendaraan" => "Mobil Avanza",
            "tahun_beli" => "2022",
            "harga" => "100.000.000"
        ],
    ];

    var_dump($data_kendaraan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Kendaraan</th>
            <th>Tahun Beli</th>
            <th>Harga</th>
        </tr>
        <?php
           $no = 0; foreach($data_kendaraan as $dk) :
        ?>

        <tr>
            <td><?= ++$no ?></td>
            <td><?= $dk['nama_kendaraan'] ?></td>
            <td><?= $dk['tahun_beli'] ?></td>
            <td><?= $dk['harga'] ?></td>
        </tr>

        <?php endforeach ?>
    </table>
</body>
</html>