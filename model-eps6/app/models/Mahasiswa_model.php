<?php

class Mahasiswa_model{

    // private $mhs = [
    //     [
    //         "nama" => "aiman",
    //         "nis" => "123",
    //         "gmail" => "@man",
    //         "jurusan" => "Rpl"
    //     ],
    //     [
    //         "nama" => "aflah",
    //         "nis" => "123",
    //         "gmail" => "@man",
    //         "jurusan" => "Rpl"
    //     ],
    //     [
    //         "nama" => "faisal",
    //         "nis" => "123",
    //         "gmail" => "@man",
    //         "jurusan" => "Rpl"
    //     ]
    // ];

    private $db ;
    private $stmt ;

    public function __construct(){
        // menyambungkan ke database versi supaya aman
        $db = "mysql:host=localhost; dbname=phpmvc";

        try {
            $this->db = new PDO($db,'root','');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }



    public function getAll(){
        // melaksanakan query
        $this->stmt = $this->db->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
