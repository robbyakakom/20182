<?php
class Mahasiswa 
{
  var $nim ;
  var $nama ;
  var $alamat ;
  var $jurusan ;
  
  function isiData($nim, $nama, $alamat, $jurusan)
  {
    $this->nim = $nim ;
    $this->nama = $nama ;
    $this->alamat = $alamat ;
    $this->jurusan = $jurusan ;
  }
  
  function tampilData()
  {
    echo "Data Mahasiswa <br/>" ;
    echo "NIM " . $this->nim ."<br/>" ;
    echo "Nama " . $this->nama ."<br/>" ;
    echo "Alamat " . $this->alamat ."<br/>" ;
    echo "Jurusan " . $this->jurusan . "<br/>" ;
  }
  
  function haspusData()
  {
    $this->nim = null ;
    $this->nama = null ;
    $this->alamat = null ;
    $this->jurusan = null ;
  }
}
?>