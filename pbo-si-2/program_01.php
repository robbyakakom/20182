<?php
include("Angka.php") ;

$objek = new Angka ;

$objek->isiData(2345) ;

echo "<hr/>" ;

echo "A : ".$objek->tampilData() ;
?>