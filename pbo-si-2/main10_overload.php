<?php 
include("autoload.php") ;

$mhs = new Mahasiswa10("9999","Amir") ;
echo $mhs ;

$mhs2 = clone $mhs ;
echo $mhs2 ;

/*
echo "NIM ".$mhs->nim ;
echo "<br/>" ;
echo "NIM ".$mhs->nama ;
echo "<br/>" ;
$mhs->nim = "87777" ;
echo "NIM ".$mhs->nim ;
echo "<br/>" ;

var_dump(isset($mhs->nim)) ;
unset($mhs->nim) ;
echo "<br/>" ;echo "<br/>" ;
$mhs->cobaMethod("isi1", "isi2") ;
*/
?>