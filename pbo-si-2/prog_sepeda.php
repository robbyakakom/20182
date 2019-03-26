<?php
include("Transport.php") ;

include("Sepeda.php") ;
include("SepedaMotor.php") ;

$sepedaBudi = new Sepeda("Polygon") ;
$sepedaBudi->diam() ;

$hondaBudi = new SepedaMotor("Honda","4 tak") ;
$hondaBudi->diam() ;

?>