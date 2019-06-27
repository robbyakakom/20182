
<?php

//trigger exception in a "try" block
try {
    $number = 0 ;
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }else{
        echo 'If you see this, the number is 1 or below';
    }
    echo "<hr/>end" ;
  }
  
  //catch exception
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
?> 