<?php
class About{

    public function index($nama= "ibnudirsan" , $pekerjaan="Web Development"){
        echo "Hallo nama saya adalah {$nama}, saya seorang {$pekerjaan}.";
    }

    public function page(){
        echo "About/Page";
    }

}