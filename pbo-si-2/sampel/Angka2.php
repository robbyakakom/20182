<?php
include_once("Angka.php") ;
class Angka2 extends Angka
{
  public function isiData($a,$b,$c)
  {
    // $this($a,$b,$c) ;
    parent::isiData($a,$b,$c);
  }
  
  public function tampil()
  {
    var_dump($this) ;
  }
}
?>