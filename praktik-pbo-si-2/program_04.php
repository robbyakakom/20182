<?php
include("Matakuliah.php") ;
$kode = $_POST["kode"] ;
$namaMk = $_POST["nama"] ;
$sks = $_POST["sks"] ;
$matakuliah = new Matakuliah($kode, $namaMk, $sks) ;
$matakuliah->tampilMk() ;
?>