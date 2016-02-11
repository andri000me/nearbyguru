<?php

Class EnrollKelas extends CI_Controller { //butuh id_siswa

    public function __construct() {
        parent::__construct();
        $this->load->model('Enroll_Model');
    }
    public function index() {
        $ID=1;//untuk uji coba id_siswa
        $param['id_siswa'] = $ID;
        $param['asal'] = "coba";
        $param['data'] = $this->Enroll_Model->getDataAvailableCourses()->result_array();
        
        
        $this->load->view('include/header', $param);
        $this->load->view('cari-kelas', $param);
        $this->load->view('include/footer');

    }
}
?>
