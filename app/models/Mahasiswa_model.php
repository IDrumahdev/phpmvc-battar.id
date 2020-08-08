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
}