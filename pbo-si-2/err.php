<?php 
function checkNum($number) {
  if($number>10) {
    throw new Exception ("Nilai Harus Kurang dari 10");
  }
  return true;
}

try{
    checkNum(20) ;
}

catch(Exception $e){
    echo $e->getMessage();
}
?>