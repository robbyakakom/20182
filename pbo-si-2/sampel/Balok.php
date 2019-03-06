<?php
include_once("Persegi.php") ;
class Balok extends Persegi
{
  public $tinggi ;
  public function __construct($p, $l, $t)
  {
    $this->panjang = $p ;
    $this->lebar = $l ;
    $this->tinggi = $t ;
  }
  public function hitungVolume()
  {
    return $this->panjang * $this->lebar * $this->tinggi ;
  }
}
?>