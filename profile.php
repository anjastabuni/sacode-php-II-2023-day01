<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- style -->
    <style>
        body{
            background-color: #16a085;
        }
    </style>
</head>
<body>
    <!-- heading dengan tag html -->
    <h1>Profile Page</h1>

    <!-- paragraf dengan syntax PHP -->
    <?php
    // menampilkan string ke layar
    echo "<p>Hello PHP</p>";

    /*
    syntax php bisa dijalankan 
    */

    // membuat variabel

    // penjumlahan
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 + $angka2;

    // pengurangan
    $pengurangan = $angka1 - $angka2;
    echo $pengurangan;
    ?>
    <h1>hasil penjumlahan</h1>
    <?= $jumlah; ?>
    
    <h3>hasil pengurangan</h3>
    <?= $pengurangan; ?>
</body>
</html>