<?php

class Home extends Controller{
    // method
    public function index()
    {
       $data["judul"] = "Home";
    //    menggunakan model
       $data["nama"] = $this->model('User_model')->getUser();
       $this->view("template/header",$data);
       $this->view("home/index",$data);
       $this->view("template/footer");
    }


}