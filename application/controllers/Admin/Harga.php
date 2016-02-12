<?php

//validasi belum dikerjakan

Class Harga extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Harga_Model');
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('id_mentor', 'ID Mentor', 'required');
        $this->form_validation->set_rules('id_mapel', 'ID Mata Pelajaran', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
            $id_mentor = $input['id_mentor'];
            $id_mapel = $input['id_mapel'];
            $harga = $input['harga'];
            $data = array(
                'id_mentor' => $id_mentor,
                'id_mapel' => $id_mapel,
                'harga' => $harga,
            );
            if ($this->form_validation->run() == TRUE) {
            $result = $this->Harga_Model->insert($data);
            echo json_encode($result);
            redirect('/admin/harga');
            }
        }
        $this->load->view('include/header');
        $this->load->view('detail-harga');
        $this->load->view('include/footer');
    }

    function edit($ID) {
        if ($input = $this->input->post()) {
            $id_mentor = $input['id_mentor'];
            $id_mapel = $input['id_mapel'];
            $harga = $input['harga'];
            $data = array(
                'id_mentor' => $id_mentor,
                'id_mapel' => $id_mapel,
                'harga' => $harga,
            );

            $result= $this->Harga_Model->edit($ID,$data);
            echo json_encode($result);
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
