<?php
include("Mahasiswa.php") ;

$mhsAkakom = new Mahasiswa("0999","Budi","Yogyakarta") ;

echo "<h1>Data Mahasiswa</h1>" ;
echo "NIM : ".$mhsAkakom->getNim()."<br/>" ;
echo "Nama : ".$mhsAkakom->getNama()."<br/>" ;
echo "Alamat : ".$mhsAkakom->getAlamat()."<br/>" ;

echo unset($mhsAkakom) ;

?>