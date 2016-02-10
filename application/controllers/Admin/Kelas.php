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
        $param['asal'] = "kelas";
        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('tabel-kelas', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

    public function input() {
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

            $this->Kelas_Model->insert($data);
            redirect('/admin/kelas');
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

            $this->Kelas_Model->edit($ID, $data);
            redirect('/admin/kelas');
        }
        $param['data'] = $this->Kelas_Model->getById($ID)->row_array();
        $this->load->view('include/header');
        $this->load->view('detail-kelas', $param);
        $this->load->view('include/footer');
    }

    public function delete($ID) {
        $this->Kelas_Model->delete($ID);
        redirect('/admin/kelas');
    }

}
