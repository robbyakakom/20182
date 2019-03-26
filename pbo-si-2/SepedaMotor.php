<?php
class SepedaMotor extends Sepeda
{
  public $tipeMesin ;
  
  public function __construct($merk, $tipeMesin)
  {
    $this->merk = $merk ;
    $this->tipeMesin = $tipeMesin ;
  }
  
  public function bergerak()
  {
    echo "Sepeda Motor Bergerak dikayuh <br/>" ;
  }
  public function diam()
  {
    parent::diam() ;
    echo "Sepeda Motor tidak dipakai <br/>" ;
  }
  public function tambahCepat()
  {
    echo "Sepeda Motor dipercepat <br/>" ;
  }
  public function perlambat()
  {
    echo "Sepeda Motor diperlambat <br/>" ;
  }
}

?>