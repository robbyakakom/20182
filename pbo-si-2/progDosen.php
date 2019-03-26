<?php
include("Person.php") ;
include("CRUD.php") ;
include("Dosen.php") ;
$budi = new Dosen("099","Budi") ;
echo "ID : ".$budi->getId() ;
echo "<br/>";
echo "Nama Dosen : ".$budi->getNama() ;

echo "<br/>";
echo "insert data "
$budi->insert() ;

echo "<br/>";
$budi->select() ;
?>