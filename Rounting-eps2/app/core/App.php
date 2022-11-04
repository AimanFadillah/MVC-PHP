<?php 

// membuat class
class App {

    public function __construct()
    {
        // Untuk melihat hasil url yang diambil
        $url = $this->parseURL();
        var_dump($url);
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