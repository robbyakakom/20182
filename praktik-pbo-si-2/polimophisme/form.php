<?php
include("Program.php") ;
include("Akademik.php") ;
include("Mahasiswa.php") ;
include("Dosen.php") ;

if(isset($_GET['kelas']))
{
  $kelas = $_GET['kelas'] ;
  Program::tampilForm(new $kelas) ;
}else{
  echo "URL alamat salah!" ;
}

?>