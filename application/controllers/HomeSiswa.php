<?php

Class HomeSiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_Model');
        $this->load->model('Kelas_Model');
        $this->load->model('Harga_Model');
        $this->load->library('form_validation');
    }
    public function index() {
        $ID=1;//untuk uji coba id_siswa
        
        $param['asal'] = "coba";
        $param['data'] = $this->Student_Model->getById($ID)->row_array();//ambil data profil utama
        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdSiswa($ID)->result_array();//ambil data kelas yang diikuti siswa
        
        
        $this->load->view('include/header', $param);
        $this->load->view('homesiswa', $param);
        $this->load->view('include/footer');

    }
}
?>
