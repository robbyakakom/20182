<?php
class Mahasiswa implements Akademik
{
    public $nim ;
    public $nama ;
    public $jurusan ;
    
    public function isiData($data = array())
    {
      $jumData = count($data);
      if($jumData > 0)
      {
        $this->nim = $data['nim'] ;
        $this->nama = $data['nama'] ;
        $this->jurusan = $data['jurusan'] ;
      }
    }
    
    public function tampilData()
    {
        echo "<h1>Data Mahasiwa</h1>" ;
        echo "NIM : ".$this->nim."<br/>";
        echo "Nama : ".$this->nama."<br/>";
        echo "Jurusan : ".$this->jurusan."<br/>";
    }
    
    public function form()
    {
      echo "<h1>Input data Mahasiswa</h1>" ;
      echo "<form action='proses.php' method='post'>";
      echo "<input type='hidden' name='kelas' value='".get_class($this)."' />" ;
      //fungsi get_class digunakan untuk menangkap nama kelas dari objek
      echo "NIM : <input type='text' name='nim' /> <br/>" ;
      echo "Nama : <input type='text' name='nama' /> <br/>" ;
      echo "Jurusan : <input type='text' name='jurusan' /> <br/>" ;
      echo "<button type='submit'>SIMPAN</button>" ;
      echo "</form";
    }
    
}

?>