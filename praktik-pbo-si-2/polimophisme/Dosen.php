<?php
class Dosen implements Akademik
{
    public $nidn ;
    public $namaDosen ;
    public function isiData($data = array())
    {
      $jumlahData = count($data) ;
      if($jumlahData > 0)
      {
        $this->nidn = $data['nidn'] ;
        $this->namaDosen = $data['namaDosen'] ;
      }
    }
    public function tampilData()
    {
        echo "<h1>Data Dosen</h1>" ;
        echo "NIDN : ".$this->nidn."<br/>";
        echo "Nama Dosen : ".$this->namaDosen."<br/>";
    }
    public function form()
    {
      echo "<h1>Input data Dosen</h1>" ;
      echo "<form action='proses.php' method='post'>";
      echo "<input type='hidden' name='kelas' value='".get_class($this)."' />" ;
      //fungsi get_class digunakan untuk menangkap nama kelas dari objek
      echo "NIM : <input type='text' name='nidn' /> <br/>" ;
      echo "Nama : <input type='text' name='namaDosen' /> <br/>" ;
      echo "<button type='submit'>SIMPAN</button>" ;
      echo "</form";
    }
}

?>