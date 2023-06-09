<?php

$kalori = 2500;

$senin = $kalori + $kalori + $kalori;
$selasa = $kalori + $kalori ;
$rabu = $kalori + $kalori;
$kamis = $kalori + $kalori + $kalori;
$jumat = $kalori + $kalori + $kalori;
$sabtu = $kalori + $kalori;
$minggu = $kalori;
echo  "Senin = $senin";
echo "</br>";
echo "Selasa = $selasa";
echo "</br>";
echo "Rabu = $rabu";
echo "</br>";
echo "Kamis = $kamis";
echo "</br>";
echo "Jum'at = $jumat";
echo "</br>";
echo "Sabtu = $sabtu";
echo "</br>";
echo "Minggu = $minggu";
$hasil_kalori =  $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "</br>";
echo "</br>";
echo "</br>";
echo "Selama 1 Minggu fu menghabiskan ",$hasil_kalori;
echo "</br>";
echo "</br>";
echo "</br>";

$jamtidur = 8;
$Senin = 5;
$Selasa = 6;
$Rabu =  8;
$Kamis = 8;
$Jumat =  5;
$Sabtu =  6;
$Minggu =  4;

echo "</br>";
echo "Senin = $Senin";
echo "</br>";
echo "Selasa = $Selasa";
echo "</br>";
echo "Rabu = $Rabu";
echo "</br>";
echo "Kamis = $Kamis";
echo "</br>";
echo "Jum'at = $Jumat";
echo "</br>";
echo "Sabtu = $Sabtu";
echo "</br>";
echo "Minggu = $Minggu";
$total_tidur = $Senin + $Selasa + $Rabu + $Kamis + $Jumat + $Sabtu + $Minggu;
echo "</br>";
echo "Selama 1 minggu jam tidur fu berkurang " , $total_tidur;

$jumlahkal = 4000;
$jumlahti = 42;



//jumlah kalori dan perminggu 
$jumlahkaloriperhari = 2500;
$jumlahkaloriperminggu = $jumlahkaloriperhari * 7;

// jumlah waktu istirahat perhari dan perminggu 
$jumlahwaktuinstirahatperhari = $total_tidur;
$jumlahwakktuistirahatperminggu = $total_tidur * 7;

$kalori = 4000;
$istirahat = 42;

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


if ($jumlahkaloriperminggu >= $kalori && $jumlahwakktuistirahatperminggu >= $istirahat) {
    echo "Fu sudah sembuh!";
}else {
    echo "Fu masih sakit";
}

