<?php
class Matakuliah
{
  protected $kodeMk ;
  protected $namaMk ;
  protected $sksMk ;
  
  public function __construct($kode, $nama, $sksMk)
  {
    $this->updateMk($kode, $nama, $sksMk);
  }
  
  public function tampilMK()
  {
    Format::cetakTebal(Format::kampus) ;
    Format::cetakTebal("Data Matakuliah") ;
    Format::garis() ;
    echo "Kode Matakuliah ".$this->kodeMk."<br/>";
    echo "Nama Matakuliah ".$this->namaMk."<br/>";
    echo "SKS Matakuliah ".$this->sksMk."<br/>";
    Format::garis() ;
  }
  
  public function updateMk($kode, $nama, $sksMk)
  {
    $this->kodeMk = $kode ;
    $this->namaMk = $nama ;
    $this->sksMk = $sksMk ;
  }  
}
?>