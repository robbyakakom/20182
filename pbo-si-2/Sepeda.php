<?php
class Sepeda extends Transport
{
  public $merk ;
  
  public function __construct($merk)
  {
    $this->merk = $merk ;
  }
  public function bergerak()
  {
    echo "Sepeda Bergerak dikayuh <br/>" ;
  }
  public function diam()
  {
    echo "Sepeda tidak dipakai <br/>" ;
  }
  public function tambahCepat()
  {
    echo "Sepeda dipercepat <br/>" ;
  }
  public function perlambat()
  {
    echo "Sepeda diperlambat <br/>" ;
  }
}
?>