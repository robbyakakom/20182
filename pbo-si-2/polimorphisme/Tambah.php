<?php
class Tambah extends Hitung
{
  public $a ;
  public $b ;
  public function __construct($a, $b)
  {
    $this->a = $a ;
    $this->b = $b ;
  }
  public function operasi()
  {
    return $this->a + $this->b ;
  }
}
?>