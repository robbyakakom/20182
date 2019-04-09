<?php
function hitunglah(Hitung $objek)
{
  return $objek->operasi() ;
}
include("Hitung.php") ;
include("Kali.php") ;
include("Tambah.php") ;

echo  hitunglah(new Kali(9,10)) ;
echo "<hr/>" ;
echo  hitunglah(new Kali(98,120)) ;
echo "<hr/>" ;
echo  hitunglah(new Tambah(98,120)) ;
echo "<hr/>" ;

?>