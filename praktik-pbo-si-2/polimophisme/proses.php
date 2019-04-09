<?php
include("Program.php") ;
include("Akademik.php") ;
include("Mahasiswa.php") ;
include("Dosen.php") ;

if(isset($_POST['kelas']))
{
  $kelas = $_POST['kelas'] ;
  $data = $_POST ;
  Program::lakukanIsiData(new $kelas, $data) ;
}else{
  echo "URL alamat salah!" ;
}
?>