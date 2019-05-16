<?php 
// include ("../Person.php") ;

include ("Person.php") ;

use app\Person ;



$orang1 = new \Pbosi\app\Person() ;
// $orang2 = new Person() ;

$orang1->namaOrang = "Budi" ;
echo $orang1->namaOrang ;
echo "<br/>" ;
$orang2->namaOrang = "Amir" ;
echo $orang2->namaOrang ;
?>