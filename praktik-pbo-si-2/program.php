<?php
include("Mahasiswa.php") ;

$mhsA = new Mahasiswa ;

$mhsA->isiData("0999","Budi","Yogya","SI") ;

$mhsA->tampilData() ;


$mhsZ = new Mahasiswa ;
$mhsZ->tampilData() ;

$mhsZ->isiData("0910","Amir","Jakarta","SI") ;

$mhsZ->tampilData() ;
$mhsA->tampilData() ;


?>