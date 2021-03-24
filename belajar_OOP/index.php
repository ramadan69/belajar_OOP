<?php
require_once "myClass.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    // pembuatan objek
    $pesawatA = new PesawatTerbang('abu-abu');
    echo "Warna pesawat diawal : ".$pesawatA->getWarna();
    echo "<br />";
    // memberikan nilai
    $pesawatA->setWarna('merah');
    // mendapatkan nilai
    echo "watna pesawat A adalah : ".
    $pesawatA->getWarna();

    echo "<br>";

    $mobilA = new Mobil('merah');
    echo "warna Mobil A adalah : ".$mobilA->getWarna();
    echo "<br>";
    echo "kecepatan mobil A adalah : ".$mobilA->getKecepatan();
    $mobilA->tambahKecepatan(20);
    echo "<br>";
    echo "kecepatan mobil A adalah : ".$mobilA->getKecepatan();
    echo "<hr>"; 
    // pemanggilan class child
    $mobilB = new MobilBalap('biru');
    echo "<br>";
    echo "Warna mobil B Adalah : ".$mobilB->getWarna();
    $mobilB->getKecepatan();
    $mobilB->TambahKecepatan(10);
    echo "<br>";
    echo "kecepatan mobil B adalah : ".$mobilB->getKecepatan();
    $mobilB->tambahKecepatan(20);
    echo "<br>kecepatan mobil B adalah : ".$mobilB->getKecepatan();
  ?>
</body>
</html>