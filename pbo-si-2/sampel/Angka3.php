<?php
class Angka3 
{
  public $a ;
  
  public function __construct($a)
  {
    $this->a = $a ;
    echo "Konstruk kelas <br/>" ;
  }
  
  public function __destruct()
  {
    echo "Destruk kelas <br/>" ;
  }
}
?>