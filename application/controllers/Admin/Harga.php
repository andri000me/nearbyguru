<?php

//validasi belum dikerjakan

Class Mapel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Harga_Model');
    }

    public function index() {
        $param['data'] = $this->Harga_Model->getAll()->result_array();
        $param['asal'] = "kelas";
        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('tabel-harga', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

    function input() {
        if ($input = $this->input->post()) {
            $id_mentor = $input['id_mentor'];
            $id_mapel = $input['id_mapel'];
            $harga = $input['harga'];
            $data = array(
                'id_mentor' => $id_mentor,
                'id_mapel' => $id_mapel,
                'harga' => $harga,
            );

            $this->Harga_Model->insert($data);
            redirect('/admin/harga');
        }
        $this->load->view('include/header');
        $this->load->view('detail-harga');
        $this->load->view('include/footer');
    }

    function edit() {
        $IDMentor = $this->uri->segment(4);
        $IDMapel = $this->uri->segment(5);
        if ($input = $this->input->post()) {
            $harga = $input['harga'];
            $data = array(
                'id_mentor' => $IDMentor,
                'id_mapel' => $IDMapel,
                'harga' => $harga,
            );

            $this->Harga_Model->edit($ID, $data);
            redirect('/admin/harga');
        }
        $param['data'] = $this->Harga_Model->getById($ID)->row_array();
        $this->load->view('include/header');
        $this->load->view('detail-harga', $param);
        $this->load->view('include/footer');
    }

    function delete($ID) {
        $this->Harga_Model->delete($ID);
        redirect('/admin/harga');
    }

}
