<?php

Class HomeMentor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mentor_Model');
        $this->load->model('Harga_Model');
        $this->load->model('Kelas_Model');
    }

    public function index() {
        $ID = 1; //untuk uji coba id mentor 1 
        $param['asal'] = "coba";

        $param['data'] = $this->Mentor_Model->getById($ID)->row_array(); //ambil data profil utama
        $param['dataSejarah'] = $this->Mentor_Model->getSejarah($ID)->result_array();
        $param['dataPengalaman'] = $this->Mentor_Model->getPengalaman($ID)->result_array();
        $param['dataKualifikasi'] = $this->Mentor_Model->getKualifikasi($ID)->result_array();
        $param['dataJadwal'] = $this->Mentor_Model->getJadwal($ID)->result_array();

        $param['dataHarga'] = $this->Harga_Model->getHargaMentor($ID)->result_array();
        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdMentor($ID)->result_array();
        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('homementor', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

    public function editHarga($ID) {
        if ($input = $this->input->post()) {

            $tingkat_mapel = $this->input->post('tingkat_mapel');
            $nama_mapel = $this->input->post('nama_mapel');
            $harga = $this->input->post('harga');

            if ($tingkat_mapel != NULL) {
                for ($i = 0; $i < count($tingkat_mapel); $i++) {
                    $dataHarga = array(
                        'tingkat_mapel' => $tingkat_mapel[$i],
                        'nama_mapel' => $nama_mapel[$i],
                        'harga' => $harga[$i],
                    );
                    $this->Harga_Model->insertHargaMentor($dataHarga, $ID);
                }
            }
            redirect('/homementor');
        }
        $param['dataHarga'] = $this->Harga_Model->getHargaMentor($ID)->result_array();

        $this->load->view('include/header');
        $this->load->view('edit-harga-mentor', $param);
        $this->load->view('include/footer');
    }

    public function deleteHarga() {
        $IDMentor = $this->uri->segment(3);
        $IDHarga = $this->uri->segment(4);
        $this->Harga_Model->delete($IDHarga);
        redirect('/homementor/editHarga/' . $IDMentor, 'refresh');
    }

    public function editKelasByMentor($ID) {
        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdMentor($ID)->result_array();
        $this->load->view('include/header');
        $this->load->view('edit-kelas-mentor', $param);
        $this->load->view('include/footer');
    }

    public function deleteKelasByMentor() {
        $IDMentor = $this->uri->segment(3);
        $IDKelas = $this->uri->segment(4);
        $this->Kelas_Model->delete($IDKelas);
        redirect('/homementor/editKelasByMentor/' . $IDMentor, 'refresh');
    }

    public function editJadwalKelas() {
        $IDMentor = $this->uri->segment(3);
        $IDKelas = $this->uri->segment(4);
        
        if ($input = $this->input->post()) {
            $waktu_masuk = $input['waktu_masuk'];
            $waktu_keluar = $input['waktu_keluar'];

            $data = array(
                'waktu_masuk' => $waktu_masuk,
                'waktu_keluar' => $waktu_keluar,
            );

            $this->Kelas_Model->edit($IDKelas, $data);
            redirect('/homementor/editKelasByMentor/' . $IDMentor, 'refresh');
        }
        $param['data'] = $this->Kelas_Model->getById($IDKelas)->row_array();
        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdMentorandIDKelas($IDMentor,$IDKelas)->row_array();
        $param['id_mentor'] = $IDMentor;
        $this->load->view('include/header');
        $this->load->view('detail-kelas-mentor', $param);
        $this->load->view('include/footer');
    }

}
