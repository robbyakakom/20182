<?php
include ("Mahasiswa.php") ;

$mhs1 = new Mahasiswa ;

$mhs1->nim = "00009" ;

echo $mhs1->nim ;

echo "<hr/>" ;

$mhs1->nim = "000092" ;

echo $mhs1->nim ;

echo "<hr/>" ;

$mhs2 = new Mahasiswa ;

$mhs2->nim = "A023" ;

echo $mhs2->nim ;

unset($mhs2)
?>