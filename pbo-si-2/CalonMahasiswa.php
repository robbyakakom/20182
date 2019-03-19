<?php
class CalonMahasiswa extends Mahasiswa 
{
  protected $sekolahAsal ;
  
  public function __construct($nim, $nama, $alamat, $sekolahAsal)
  {
    $this->nim = $nim ;
    $this->nama = $nama ;
    $this->alamat = $alamat ;
    $this->sekolahAsal = $sekolahAsal ;
  }
  
  public function getSekolahAsal()
  {
     return $this->sekolahAsal ;
  }
}
?>