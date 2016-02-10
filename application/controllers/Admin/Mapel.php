<?php
//validasi belum dikerjakan

Class Mapel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mapel_Model');
    }
    

    public function index() {
        $param['data'] = $this->Mapel_Model->getAll()->result_array();
        $param['asal'] = "data";
        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('tabel-mapel', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

    function input() {
        if ($input = $this->input->post()) {
            $tingkat_mapel = $input['tingkat_mapel'];
            $nama_mapel = $input['nama_mapel'];
            $data = array(
                'tingkat_mapel' => $tingkat_mapel,
                'nama_mapel' => $nama_mapel,
            );

            $this->Mapel_Model->insert($data);
            redirect('/admin/mapel');
        }
        $this->load->view('include/header');
        $this->load->view('detail-mapel');
        $this->load->view('include/footer');
    }

    function edit($ID) {
        if ($input = $this->input->post()) {
            $tingkat_mapel = $input['tingkat_mapel'];
            $nama_mapel = $input['nama_mapel'];

            $data = array(
                'tingkat_mapel' => $tingkat_mapel,
                'nama_mapel' => $nama_mapel,
            );

            $this->Mapel_Model->edit($ID, $data);
            redirect('/admin/mapel');
        }
        $param['data'] = $this->Mapel_Model->getById($ID)->row_array();
        $this->load->view('include/header');
        $this->load->view('detail-mapel', $param);
        $this->load->view('include/footer');
    }

    function delete($ID) {
        $this->Mapel_Model->delete($ID);
        redirect('/admin/mapel');
    }

}
