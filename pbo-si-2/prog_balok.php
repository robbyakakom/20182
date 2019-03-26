<?php
include("Persegi.php") ;
include("Balok.php") ;

$balok = new Balok(10, 5, 3) ;
// echo "Luas Balok ".$balok->hitungLuas()."<br/>" ;
echo "Keliling Balok ".$balok->hitungKeliling()."<br/>" ;
echo "Volume Balok ".$balok->hitungVolume()."<br/>" ;
echo "Luas Alas Balok ".$balok->hitungLuasAlas()."<br/>" ;

?>