<?php

//validasi belum dikerjakan

Class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_Model');
        $this->load->library('form_validation');
    }

    public function index() {
        $param['data'] = $this->Student_Model->getAll()->result_array();
        $param['asal'] = "data";
        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('tabel-student', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

    function input() {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('no_ponsel_siswa', 'Nomor Ponsel', 'required');
        $this->form_validation->set_rules('jenis_kelamin_siswa', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat_siswa', 'Alamat', 'required');
        $this->form_validation->set_rules('email_siswa', 'Email', 'required');
        $this->form_validation->set_rules('password_siswa', 'Password', 'required');

        if ($input = $this->input->post()) {
            $nama_siswa = $input['nama_siswa'];
            $no_identitas_siswa = $input['no_identitas_siswa'];
            $jenis_kelamin_siswa = $input['jenis_kelamin_siswa'];
            $tempat_lahir_siswa = $input['tempat_lahir_siswa'];
            $tanggal_lahir_siswa = $input['tanggal_lahir_siswa'];
            $no_ponsel_siswa = $input['no_ponsel_siswa'];
            $sekolah_siswa = $input['sekolah_siswa'];
            $email_siswa = $input['email_siswa'];
            $password_siswa = $input['password_siswa'];

            $latitude_siswa = $input['latitude_siswa'];
            $longitude_siswa = $input['longitude_siswa'];
            $alamat_siswa = $input['alamat_siswa'];

            $data = array(
                'nama_siswa' => $nama_siswa,
                'no_identitas_siswa' => $no_identitas_siswa,
                'jenis_kelamin_siswa' => $jenis_kelamin_siswa,
                'tempat_lahir_siswa' => $tempat_lahir_siswa,
                'tanggal_lahir_siswa' => date("d-m-Y", strtotime($tanggal_lahir_siswa)),
                'no_ponsel_siswa' => $no_ponsel_siswa,
                'sekolah_siswa' => $sekolah_siswa,
                'email_siswa' => $email_siswa,
                'password_siswa' => $password_siswa,
                'latitude_siswa' => $latitude_siswa,
                'longitude_siswa' => $longitude_siswa,
                'alamat_siswa' => $alamat_siswa,
            );
            if ($this->form_validation->run() == TRUE) {
                $result = $this->Student_Model->insert($data);
                echo json_encode($result);
                redirect('/admin/student');
            }
        }
        $this->load->view('include/header');
        $this->load->view('detail-student');
        $this->load->view('include/footer');
    }

    function edit($ID) {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('no_ponsel_siswa', 'Nomor Ponsel', 'required');
        $this->form_validation->set_rules('jenis_kelamin_siswa', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat_siswa', 'Alamat', 'required');
        $this->form_validation->set_rules('email_siswa', 'Email', 'required');
        $this->form_validation->set_rules('password_siswa', 'Password', 'required');
        if ($input = $this->input->post()) {
            $nama_siswa = $input['nama_siswa'];
            $no_identitas_siswa = $input['no_identitas_siswa'];
            $jenis_kelamin_siswa = $input['jenis_kelamin_siswa'];
            $tempat_lahir_siswa = $input['tempat_lahir_siswa'];
            $tanggal_lahir_siswa = $input['tanggal_lahir_siswa'];
            $no_ponsel_siswa = $input['no_ponsel_siswa'];
            $sekolah_siswa = $input['sekolah_siswa'];
            $email_siswa = $input['email_siswa'];
            $password_siswa = $input['password_siswa'];

            $latitude_siswa = $input['latitude_siswa'];
            $longitude_siswa = $input['longitude_siswa'];
            $alamat_siswa = $input['alamat_siswa'];

            $data = array(
                'nama_siswa' => $nama_siswa,
                'no_identitas_siswa' => $no_identitas_siswa,
                'jenis_kelamin_siswa' => $jenis_kelamin_siswa,
                'tempat_lahir_siswa' => $tempat_lahir_siswa,
                'tanggal_lahir_siswa' => $tanggal_lahir_siswa,
                'no_ponsel_siswa' => $no_ponsel_siswa,
                'sekolah_siswa' => $sekolah_siswa,
                'email_siswa' => $email_siswa,
                'password_siswa' => $password_siswa,
                'latitude_siswa' => $latitude_siswa,
                'longitude_siswa' => $longitude_siswa,
                'alamat_siswa' => $alamat_siswa,
            );
            if ($this->form_validation->run() == TRUE) {
                $result = $this->Student_Model->edit($ID, $data);
                echo json_encode($result);
                redirect('/admin/student');
            }
        }
        $param['data'] = $this->Student_Model->getById($ID)->row_array();
        $this->load->view('include/header');
        $this->load->view('detail-student', $param);
        $this->load->view('include/footer');
    }

    function delete($ID) {
        $result = $this->Student_Model->delete($ID);
        echo json_encode($result);
        redirect('/admin/student');
    }

}
