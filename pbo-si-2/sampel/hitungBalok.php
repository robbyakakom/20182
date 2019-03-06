<?php
include_once("Persegi.php") ;
include_once("Balok.php") ;
$balok = new Balok(3,4,5) ;
echo "Panjang " . $balok->panjang . "<br/>" ;
echo "Lebar " . $balok->lebar . "<br/>" ;
echo "Tinggi " . $balok->tinggi . "<br/>" ;
echo "Luas " . $balok->hitungLuas() . "<br/>" ;
echo "Keliling " . $balok->hitungKeliling() . "<br/>" ;
echo "Volume " . $balok->hitungVolume() . "<br/>" ;
?>