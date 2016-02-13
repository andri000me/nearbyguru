<?php

Class EnrollKelas extends CI_Controller { //butuh id_siswa

    public function __construct() {
        parent::__construct();
        $this->load->model('Enroll_Model');
        $this->load->library('form_validation');
    }
//    public function index($ID) {
//        $ID=1;//untuk uji coba id_siswa
//        $param['id_siswa'] = $ID;
//        $param['asal'] = "coba";
//        $param['data'] = $this->Enroll_Model->getDataAvailableCourses()->result_array();
//        
//        
//        $this->load->view('include/header', $param);
//        $this->load->view('cari-kelas', $param);
//        $this->load->view('include/footer');
//    }
    public function view($ID) {
         $param['id_siswa'] = $ID;
        $param['asal'] = "coba";
        $param['data'] = $this->Enroll_Model->getDataAvailableCourses()->result_array();
        
        
        $this->load->view('include/header', $param);
        $this->load->view('cari-kelas', $param);
        $this->load->view('include/footer');
    }
    public function addKelas(){
        $IDSiswa = $this->uri->segment(3);
        $IDHarga= $this->uri->segment(4);
        $this->Enroll_Model->addKelas($IDSiswa, $IDHarga);
        redirect('/homesiswa/view/'.$IDSiswa, 'refresh');
    }
}
?>
