<?php 

// membuat class
class App {
    // membuat controller delfault
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];
        
        public function __construct()
        {
        // Untuk mengabil url
        $url = $this->parseURL();

        // Jika url kosong 
        if($url === null){
            $url = ["Home","index"];
        }

        // controller [file_exists digunakan untuk mengecek file ada atau tidak]
        if( file_exists("../app/controllers/" . $url[0]. ".php") ){
            $this->controller = $url[0];
            unset($url[0]);
        }

        // ambil controller
        require_once "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // method [methohd_exists digunakan untuk mengecek method ada atau tidak]
        if( isset($url[1]) ){
            if( method_exists($this->controller,$url[1]) ){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // ambil params [array_values digunakan untuk mengambil array dan disimpen pada array]
        if( !empty($url) ){
            $this->params = array_values($url);
        }

        // digunakan untuk menjalakan controller,method dan params
        call_user_func_array( [$this->controller , $this->method] ,$this->params );


    }

// method untuk menyiapkan url agar siap digunakan
    public function parseURL(){

        if( isset($_GET["url"]) ){
            // untuk menghapus / bagian balakang
            $url = rtrim($_GET["url"],'/');

            // menghilangkan angka angka aneh pada url
            $url = filter_var($url,FILTER_SANITIZE_URL);

            // menghilangkan semua string
            $url = explode('/',$url);

            return $url;
        }


    }
}

?>