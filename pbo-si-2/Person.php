<?php
abstract class Person implements CRUD
{
  abstract public function setId($id) ;
  abstract public function getId() ;
  abstract public function setNama($nama) ;
  abstract public function getNama() ;
}
?>