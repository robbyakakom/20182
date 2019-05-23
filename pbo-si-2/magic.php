<?php 
class Kelas
{
  public $properti  ;
  public function __construct($properti)
  {
    $this->properti = $properti ;
  }
//   public function __clone()
//   {
//     $this->properti = "Alan Sahlan" ;
//   }
}

$obj1 = new Kelas("Budi Budiman") ;
echo "nilai obyek 1 " . $obj1->properti . "</br/>" ; 
$obj2 = clone $obj1 ;
echo "nilai obyek 2 " . $obj2->properti . "</br/>" ;
?>
