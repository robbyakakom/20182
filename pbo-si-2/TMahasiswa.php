<?php 
class TMahasiswa
{
    protected $db ;

    public function __construct()
    {
        $this->db = new Db ;
    }
    
    public function tampil()
    {
        $sql = "SELECT mahasiswa.id, mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.alamat_mahasiswa, mahasiswa.id_program_studi, program_studi.kode, program_studi.nama_prodi
                FROM mahasiswa 
                LEFT JOIN program_studi ON program_studi.id = mahasiswa.id_program_studi" ;
        $result = $this->db->query($sql) ;
        $dataMahasiswa = [] ;
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                $dataMahasiswa[] = $row ;
            }
        }
        return $dataMahasiswa ;
    }

    public function lihat($id)
    {
        $sql = "SELECT mahasiswa.id, mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.alamat_mahasiswa, mahasiswa.id_program_studi, program_studi.kode, program_studi.nama_prodi
                FROM mahasiswa 
                LEFT JOIN program_studi ON program_studi.id = mahasiswa.id_program_studi
                WHERE mahasiswa.id='{$id}'" ;
        $result = $this->db->query($sql) ;
        $dataMahasiswa = ['id'=>'', 'nim'=>'','nama_mahasiswa'=>'', 'alamat_mahasiswa'=>'', 'id_program_studi'=>'', 'kode'=>'', 'nama_prodi'=>''] ;
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                $dataMahasiswa = $row ;
            }
        }
        return $dataMahasiswa ;
    }

    public function tambah($dataMahasiswa)
    {
        $sql = "INSERT INTO mahasiswa (nim, nama_mahasiswa, alamat_mahasiswa, id_program_studi) 
                VALUES('{$dataMahasiswa['nim']}', '{$dataMahasiswa['nama_mahasiswa']}', '{$dataMahasiswa['alamat_mahasiswa']}', '{$dataMahasiswa['id_program_studi']}' ) " ;

        $result = $this->db->query($sql) ;

        return $result ;
    }

    public function edit($dataMahasiswa)
    {
        $sql = "UPDATE mahasiswa 
                SET 
                    nim = '{$dataMahasiswa['nim']}', 
                    nama_mahasiswa = '{$dataMahasiswa['nama_mahasiswa']}', 
                    alamat_mahasiswa = '{$dataMahasiswa['alamat_mahasiswa']}', 
                    id_program_studi = '{$dataMahasiswa['id_program_studi']}'
                WHERE 
                    id = '{$dataMahasiswa['id']}' " ;

        $result = $this->db->query($sql) ;

        return $result ;
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM mahasiswa WHERE id = '{$id}'" ;

        $result = $this->db->query($sql) ;

        return $result ;
    }
} 
?>