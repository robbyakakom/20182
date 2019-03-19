<?php
class Mahasiswa
{
  protected $nim ;
  protected $nama ;
  protected $alamat ;
  
  public function __construct($nim, $nama, $alamat)
  {
    $this->nim = $nim ;
    $this->nama = $nama ;
    $this->alamat = $alamat ;
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