<?php 
$konek = new mysqli("localhost","root","","akademik_pbo");
$sql = "select * from mahasiswa" ;
$hasil = $konek->query($sql) ;
$baris = $hasil->fetch_assoc() ;
var_dump($baris) ;
?>