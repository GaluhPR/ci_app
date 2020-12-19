<?php

class Home extends CI_Controller {
    public function index( $nama = 'Galuh' )
    {
        $data['judul'] = 'Halman Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $nama);
        $this->load->view('templates/footer');
    }
}