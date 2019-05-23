<?php 
include ("autoload.php") ;
// instansiasi
$obyek = new Person10 ;
$obyek->nama = "Budi" ; //assigment properti (__set) 
$obyek->alamat = "Jakarta" ;
echo "Nama ".$obyek->nama."<br/>" ; //pemanggilan properti (__get)
echo "Alamat ".$obyek->alamat."<br/>" ;
?>