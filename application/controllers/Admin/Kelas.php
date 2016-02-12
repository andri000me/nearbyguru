<?php

//validasi belum dikerjakan
//Belum selesai untuk ini

Class Kelas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_Model');
        $this->load->library('form_validation');
    }

    public function index() {
        $param['data'] = $this->Kelas_Model->getAll()->result_array();
        $param['asal'] = "kelas";
        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('tabel-kelas', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

    public function input() {
        $this->form_validation->set_rules('id_siswa', 'ID Siswa', 'required');
        $this->form_validation->set_rules('id_harga', 'ID Harga', 'required');
        if ($input = $this->input->post()) {
            $id_siswa = $input['id_siswa'];
            $id_harga = $input['id_harga'];
            $waktu_masuk = $input['waktu_masuk'];
            $waktu_keluar = $input['waktu_keluar'];

            $data = array(
                'id_siswa' => $id_siswa,
                'id_harga' => $id_harga,
                'waktu_masuk' => $waktu_masuk,
                'waktu_keluar' => $waktu_keluar,
            );
            if ($this->form_validation->run() == TRUE) {
            $result = $this->Kelas_Model->insert($data);
            echo json_encode($result);
            redirect('/admin/kelas');
            }
        }
        $this->load->view('include/header');
        $this->load->view('detail-kelas');
        $this->load->view('include/footer');
    }

    public function edit($ID) {
        if ($input = $this->input->post()) {
            $id_siswa = $input['id_siswa'];
            $id_harga = $input['id_harga'];
            $waktu_masuk = $input['waktu_masuk'];
            $waktu_keluar = $input['waktu_keluar'];

            $data = array(
                'id_siswa' => $id_siswa,
                'id_harga' => $id_harga,
                'waktu_masuk' => $waktu_masuk,
                'waktu_keluar' => $waktu_keluar,
            );

            $result = $this->Kelas_Model->edit($ID, $data);
            echo json_encode($result);
            redirect('/admin/kelas');
        }
        $param['data'] = $this->Kelas_Model->getById($ID)->row_array();
        echo json_encode($param['data']);
        $this->load->view('include/header');
        $this->load->view('detail-kelas', $param);
        $this->load->view('include/footer');
    }

    public function delete($ID) {
        $result = $this->Kelas_Model->delete($ID);
        echo json_encode($result);
        redirect('/admin/kelas');
    }

}
