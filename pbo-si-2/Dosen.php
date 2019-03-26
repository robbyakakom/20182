<?php
Class Dosen extends Person implements CRUD
{
  private $idDosen ;
  private $namaDosen ;
  
  public function __construct($id,$nama)
  {
    $this->setId($id) ;
    $this->setNama($nama) ;
  }
  
  //method overriding dari abstract Person
  public function setId($id) {
    $this->idDosen=$id ;
  } 
  public function getId(){
    return $this->id  ;
  } 
  public function setNama($nama) {
    $this->namaDosen=$nama ;
  } 
  public function getNama() {
    return $this->namaDosen  ;
  } 
  
  //method overriding dari interface CRUD
  public function connect() {
    $kon = mysqli_connect("localhost","root","","akademik") ;
    echo "koneksi" ;
  } 
  public function insert(){
    $kon = $this->connect() ;
    $sql = "insert into dosen (id, nama) value ('".$this->idDosen."','".$this->namaDosen."') " ;
    $query = mysqli_query($sql, $kon) ;
    if($query)
      $ket = "Simpan data sukses" ;
    else
      $kon = "Simpan data gagal" ;
    echo $ket ;
  }
  public function update(){
    $kon = $this->connect() ;
    $sql = "update dosen set id='".$this->idDosen."', nama='".$nama."'" ;
    $query = mysqli_query($sql, $kon) ;
    if($query)
      $ket = "Update data sukses" ;
    else
      $kon = "Update data gagal" ;
    echo $ket ;
  } 
  public function delete(){
    $kon = $this->connect() ;
    $sql = "delete from dosen where id='".$this->idDosen."'" ;
    $query = mysqli_query($sql, $kon) ;
    if($query)
      $ket = "Delete data sukses" ;
    else
      $kon = "Delete data gagal" ;
    echo $ket ;
  } 
  public function select(){
    $kon = $this->connect() ;
    $sql = "delete from dosen where id='".$this->idDosen."'" ;
    $sql = "select * from dosen where id='".$this->idDosen."'" ;
    $query = mysqli_query($sql, $kon) ;
    $row = mysqli_fetch_assoc($query) ;
    echo "<h1>Hasil Baca Tabel Dosen</h1>" ;
    echo "ID Dosen".$row['id']."<br/>" ;
    echo "Nama Dosen ".$row['nama']."<br/>" ;
  }   
}
?>