<?php
include_once("Angka.php") ;
include_once("Angka2.php") ;
$angka = new Angka ;
$angka->isiData(3,4,5) ;

// echo $angka->a ;
// echo $angka->b ; //menampilkan pesan akses private
// echo $angka->c ; //menampilkan pesan akses protected

$angka2 = new Angka2 ;
$angka2->isiData(7,8,9) ;

$angka2->tampil() ;

// echo $angka2->a ;
// echo $angka2->b ; //menampilkan pesan akses private
// echo $angka2->c ; //menampilkan pesan akses protected
?>