<?php

class About extends Controller{
    public function index($nama = 'Reza', $profesi = 'mahasiswa', $game = 'Dota'){
        $data['nama']  = $nama;
        $data['profesi']  = $profesi;
        $data['game']  = $game;
        $data['judul']  = "About Me";
        $data['class'] = 'about';
        $this->view('templates/header', $data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul']  = "Page";
        $data['class'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>