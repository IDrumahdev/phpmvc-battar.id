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

    //database handler
    private $dbh;
    private $stmt;

    public function __construct(){
        //data source name
        $dsn = 'mysql:host=127.0.0.1;dbname=phpmvc';

        try {
            //code...
            $this->dbh = new PDO($dsn,'root','');
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public function getAllMahasiswa(){
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}