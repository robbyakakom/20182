<?php
  class Lingkaran
  {
    const phi = "3.14" ;
    public $jari ;
    public function __construct($jari){
      $this->jari = $jari ;
    }
    public function luas()
    {
      return self::phi * $this->jari * $this->jari ;
    }
    // public static function luasStatis()
    // {
      // return self::phi * $this->jari * $this->jari ;
    // }
  }
  //instansiasi
  $obj = new Lingkaran(100) ;
  echo "phi ".Lingkaran::phi."<br/>" ;
  echo "jari-jari ".$obj->jari."<br/>" ;
  echo "luas ".$obj->luas()."<br/>" ;
?>