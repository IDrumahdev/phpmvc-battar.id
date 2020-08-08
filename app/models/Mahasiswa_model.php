<?php
class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama"      => "Abu Ahsan",
    //         "nrp"       => "11010091",
    //         "email"     => "abu.ahsan@gmail",
    //         "jurusan"   => "Manajement Informatika"
    //     ],
    //     [
    //         "nama"      => "Ahsan",
    //         "nrp"       => "11010092",
    //         "email"     => "ahsan@gmail",
    //         "jurusan"   => "Manajement Informatika"
    //     ],
    //     [
    //         "nama"      => "Ummu Ahsan",
    //         "nrp"       => "11010093",
    //         "email"     => "ummuahsan@gmail",
    //         "jurusan"   => "Manajement Informatika"
    //     ],
    // ];

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
    }

    public function getMahasiswaByID($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){

        $query = "INSERT INTO mahasiswa (nama,nrp,email,jurusan) VALUES (:nama, :nrp, :email, :jurusan)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nrp', $data['nrp']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
    
    return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}