<?php

class Controller {
    public function view ($view,$data = [] ){
        require_once "../app/view/" . $view . ".php";
    }

    // menyambungkan dengan class model
    public function model ($model){
        require "../app/models/" . $model . ".php";
        return new $model;
    }
}


?>