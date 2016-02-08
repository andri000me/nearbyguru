<?php
//validasi belum dikerjakan
//Belum selesai untuk ini

Class Kelas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_Model');
    }

    public function index() {
        $param['data'] = $this->Kelas_Model->getAll()->result_array();
        $param['asal'] = "data";
        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('tabel-kelas', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

}
