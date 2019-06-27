<?php 
$conn = new PDO("mysql:host=localhost;dbname=akademik_pbo", "root", "");

$sql = "INSERT INTO mahasiswa VALUE ('','0909','budi','Semarang','2')" ;
$r = $conn->exec($sql) ;
var_dump($r) ;

$sql = "SELECT * FROM mahasiswa" ;
foreach ($conn->query($sql) as $row) {
    var_dump($row);
}
?>