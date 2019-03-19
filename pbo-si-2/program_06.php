<?php
include("Mahasiswa.php") ;
include("CalonMahasiswa.php") ;

$mhsAkakom = new CalonMahasiswa("0999","Budi","Yogyakarta","SMA N 1 Sleman") ;

echo "<h1>Data Calon Mahasiswa</h1>" ;
echo "NIM : ".$mhsAkakom->getNim()."<br/>" ;
echo "Nama : ".$mhsAkakom->getNama()."<br/>" ;
echo "Alamat : ".$mhsAkakom->getAlamat()."<br/>" ;
echo "Asal Sekolah : ".$mhsAkakom->getSekolahAsal()."<br/>" ;

?>