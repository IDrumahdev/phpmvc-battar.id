<?php
class About extends Controller{
        public function index($nama = "ibnudirsan" , $pekerjaan = "Web Development", $umur = 29){

            $data['judul'] = 'About Me';
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['umur'] = $umur;

            $this->view('templates/header',$data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
    }

    public function page(){

            $data['judul'] = 'Pages';
            $this->view('templates/header',$data);
            $this->view('about/page');
            $this->view('templates/footer');
    
    }

}