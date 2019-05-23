<?php 
class Person10
{
  private $arrProperti = array() ;
  public function __set($properti, $value)
  {
    $this->arrProperti[$properti] = $value ;
  }
  public function __get($properti)
  {
    return $this->arrProperti[$properti] ;
  }
}
?>