<?php
class Staff implements SetGaji
{
  public $namaStaff ;
  public $jamMasuk ;
  public $jamPulang ;
  public function __construct($nama, $masuk, $pulang)
  {
    $this->namaStaff = $nama ;
    $this->jamMasuk = $masuk ;
    $this->jamPulang = $pulang ;
  }
  public function getGaji()
  {
    $gaji = ($this->jamPulang - $this->jamMasuk) * 5000 ;
    echo "Nama Staff : ". $this->namaStaff."<br/>" ;
    echo "Jam Masuk : ".$this->jamMasuk."<br/>" ;
    echo "Jam Pulang : ".$this->jamPulang."<br/>" ;
    echo "Gaji Staff : ".$gaji."<br/>" ;
  }
}
?>
