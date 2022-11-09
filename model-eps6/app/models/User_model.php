<?php

// membuat class model untuk mengambil data yang tersedia di model
class User_model {
    private $nama = "Aiman Fadillah";

    public function getUser(){
        return $this->nama;
    }

}

?>