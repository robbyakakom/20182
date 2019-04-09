<?php
class Program
{
  public static function tampilForm(Akademik $obj)
  {
    $obj->form() ;
  }  
  public static function lakukanIsiData(Akademik $obj, $data)
  {
    $obj->isiData($data) ;
    $obj->tampilData() ;
  }
}
?>