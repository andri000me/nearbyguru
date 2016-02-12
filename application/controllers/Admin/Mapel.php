<?php

//validasi belum dikerjakan

Class Mapel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mapel_Model');
        $this->load->library('form_validation');
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
        $response = array();
        $this->form_validation->set_rules('tingkat_mapel', 'Tingkat Mata Pelajaran', 'required');
        $this->form_validation->set_rules('nama_mapel', 'Nama Mata Pelajaran', 'required');
        if ($input = $this->input->post()) {
            $tingkat_mapel = $input['tingkat_mapel'];
            $nama_mapel = $input['nama_mapel'];
            $data = array(
                'tingkat_mapel' => $tingkat_mapel,
                'nama_mapel' => $nama_mapel,
            );
            if ($this->form_validation->run() == TRUE) {
                $result = $this->Mapel_Model->insert($data);
                $response['result'] = $result;

                if ($result) {
                    // successfully inserted into database
                    $response["success"] = 1;
                    $response["message"] = "Mapel successfully created.";

                    // echoing JSON response
                    echo json_encode($response);
                } else {
                    // failed to insert row
                    $response["success"] = 0;
                    $response["message"] = "Oops! An error occurred.";

                    // echoing JSON response
                    echo json_encode($response);
                }
                redirect('/admin/mapel');
            } else {
                // required field is missing
                $response["success"] = 0;
                $response["message"] = "Required field(s) is missing";

                // echoing JSON response
                echo json_encode($response);
            }
        }

        $this->load->view('include/header');
        $this->load->view('detail-mapel');
        $this->load->view('include/footer');
    }

    function edit($ID) {
        $response = array();
        if ($input = $this->input->post()) {
            $tingkat_mapel = $input['tingkat_mapel'];
            $nama_mapel = $input['nama_mapel'];

            $data = array(
                'tingkat_mapel' => $tingkat_mapel,
                'nama_mapel' => $nama_mapel,
            );

            $result = $this->Mapel_Model->edit($ID, $data);
            $response['result'] = $result;
            echo json_encode($response, TRUE);
            redirect('/admin/mapel');
        }
        $param['data'] = $this->Mapel_Model->getById($ID)->row_array();
        $this->load->view('include/header');
        $this->load->view('detail-mapel', $param);
        $this->load->view('include/footer');
    }

    function delete($ID) {
        $response = array();
        $result = $this->Mapel_Model->delete($ID);
        $response['result'] = $result;
        echo json_encode($response, TRUE);
        redirect('/admin/mapel');
    }

}
