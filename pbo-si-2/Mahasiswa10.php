<?php 
class Mahasiswa10
{
    private $nim ;
    private $nama ;

    public function __construct($nim, $nama)
    {
        $this->nim = $nim ;
        $this->nama = $nama ;
    }

    public function __clone()
    {
        $this->nim = "8888" ;
        $this->nama = "Dedy" ;
    }

    public function __toString()
    {
        return  "NIM ". $this->nim."<br/>"."Nama ". $this->nama."<br/>" ;
    }

    public function __get($properti)
    {
        return $this->$properti ;
    }

    public function __set($properti, $value){
        $this->$properti = $value ;
    }

    public function __isset($properti)
    {
        echo "apakah ".$properti." sudah di set?" ;
        return isset($this->$properti) ;
    }

    public function __unset($properti)
    {
        echo $properti. " sudah dihapus" ;
    }

    public function __call($method, $argumen)
    {
        echo "method ".$method ;
        echo "<br/>" ;
        echo print_r($argumen) ;
    }
}
?>