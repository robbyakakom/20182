<?php
class Angka 
{
  private $a ;
  public function isiData($isi)
  {
    // isi properti a
    $this->a = $isi ; 
  }
  public function tampilData()
  {
    // tampilkan properti a
    return $this->a ;
  }
}
?>
