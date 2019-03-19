<?php
class Angka
{
  public $a ;
  public function __construct($a)
  {
    $this->a = $a ;
    echo "Konstruk kelas <br/>".$this->a ;
  }
  public function __destruct()
  {
    echo "Destruk kelas <br/>" ;
  }
}
?>