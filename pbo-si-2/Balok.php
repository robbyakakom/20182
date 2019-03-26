<?php
class Balok extends Persegi
{
  public $tinggi ;
  public function __construct($p, $l, $t)
  {
    $this->panjang = $p ;
    $this->lebar = $l ;
    $this->tinggi = $t ;
  }
  public function hitungLuas() //overriding method
  {
    $luas = 2*(( $this->panjang * $this->lebar ) + ( $this->panjang * $this->tinggi ) + ( $this->lebar * $this->tinggi)) ;
    return $luas ;
  }
  public function hitungKeliling() //overriding method
  {
    $kll = 4*($this->panjang + $this->lebar + $this->tinggi) ;
    return $kll ;
  }  
  public function hitungVolume() //method baru
  {
    return $this->panjang * $this->lebar * $this->tinggi ;
  }
  public function hitungLuasAlas()
  {
    return parent::hitungLuas() ;
  }
}
?>