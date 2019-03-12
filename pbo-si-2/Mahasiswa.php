<?php
class Mahasiswa
{
  private $nim ;
  private $nama ;
  private $alamat ;
  
  public function __construct($nim, $nama, $alamat)
  {
    $this->nim = $nim ;
    $this->nama = $nama ;
    $this->alamat = $alamat ;
  }
  
  public function __destruct()
  {
    return $this->nim ;
  }
  
  public function getNim()
  {
    return $this->nim ;
  }
  
  public function getNama()
  {
    return $this->nama ;
  }  
  
  public function getAlamat()
  {
    return $this->alamat ;
  }
}
?>