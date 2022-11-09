<?php

class About extends Controller{
    // method
    public function index($nama = "Aiman",$kelas = "RPL",$absen = "18"){
        $data["nama"] = $nama;
        $data["kelas"] = $kelas;
        $data["absen"] = $absen;
        $data["judul"] = "About";
        // rangkai
        $this->view("template/header",$data);
        $this->view('about/index',$data);
        $this->view("template/footer");
    }

    public function page () {
        $data["judul"] = "Page";
        // rangkai
        $this->view("template/header",$data);
        $this->view('about/page');
        $this->view("template/footer");
    } 


}


?>