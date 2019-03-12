<?php
class Angka 
{
  private $a ;
  public function isiData($isi)
  {
    $this->a = $isi ;
  }
  public function tampilData()
  {
    return $this->a ;
  }
}
?>