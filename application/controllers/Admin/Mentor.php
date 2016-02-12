<?php

Class Mentor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mentor_Model');
        $this->load->library('form_validation');
    }

    public function index() {
        $param['data'] = $this->Mentor_Model->getAll()->result_array();
        $param['asal'] = "data";

        //buat include template
        $this->load->view('include/header', $param);
        $this->load->view('tabel-mentor', $param);
        $this->load->view('include/footer');
        //--------------------------------------------
    }

    function input() {

        $this->form_validation->set_rules('nama_mentor', 'Nama Mentor', 'required');
        $this->form_validation->set_rules('no_ponsel_mentor', 'Nomor Ponsel', 'required');
        $this->form_validation->set_rules('alamat_mentor', 'Alamat', 'required');
        $this->form_validation->set_rules('email_mentor', 'Email', 'required');
        $this->form_validation->set_rules('password_mentor', 'Password', 'required');

        if ($input = $this->input->post()) {
            $nama_mentor = $input['nama_mentor'];
            $no_identitas_mentor = $input['no_identitas_mentor'];
            $jenis_kelamin_mentor = $input['jenis_kelamin_mentor'];
            $tempat_lahir_mentor = $input['tempat_lahir_mentor'];
            $tanggal_lahir_mentor = $input['tanggal_lahir_mentor'];
            $no_ponsel_mentor = $input['no_ponsel_mentor'];
            $email_mentor = $input['email_mentor'];
            $password_mentor = $input['password_mentor'];

            $latitude_mentor = $input['latitude_mentor'];
            $longitude_mentor = $input['longitude_mentor'];
            $alamat_mentor = $input ['alamat_mentor'];

            $pekerjaan_mentor = $input ['pekerjaan_mentor'];
            $bio_mentor = $input['bio_mentor'];
            $tentang_mentor = $input['tentang_mentor'];

            $data = array(
                'nama_mentor' => $nama_mentor,
                'no_identitas_mentor' => $no_identitas_mentor,
                'jenis_kelamin_mentor' => $jenis_kelamin_mentor,
                'tempat_lahir_mentor' => $tempat_lahir_mentor,
                'tanggal_lahir_mentor' => date("d-m-Y", strtotime($tanggal_lahir_mentor)),
                'no_ponsel_mentor' => $no_ponsel_mentor,
                'email_mentor' => $email_mentor,
                'password_mentor' => $password_mentor,
                'latitude_mentor' => $latitude_mentor,
                'alamat_mentor' => $alamat_mentor,
                'longitude_mentor' => $longitude_mentor,
                'pekerjaan_mentor' => $pekerjaan_mentor,
                'bio_mentor' => $bio_mentor,
                'tentang_mentor' => $tentang_mentor,
            );
            if ($this->form_validation->run() == TRUE) { //CHECK LAGI MUNGKIN ADA SALAH
                $result = $this->Mentor_Model->insert($data);
                echo json_encode($result);
            }
            $mentor_id = $this->Mentor_Model->lastInsert();
            //buat masukin ke tabel yang lain
            $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
            $instansi_pendidikan = $this->input->post('instansi_pendidikan');
            for ($i = 0; $i < count($jenjang_pendidikan); $i++) {
                $dataSejarah = array(
                    'id_mentor' => $mentor_id,
                    'jenjang_pendidikan' => $jenjang_pendidikan[$i],
                    'instansi_pendidikan' => $instansi_pendidikan[$i],
                );
                $resultSejarah = $this->Mentor_Model->insertSejarah($dataSejarah);
                echo json_encode($resultSejarah);
            }

            $nama_pengalaman = $this->input->post('nama_pengalaman');
            for ($i = 0; $i < count($nama_pengalaman); $i++) {
                $dataPengalaman = array(
                    'id_mentor' => $mentor_id,
                    'nama_pengalaman' => $nama_pengalaman[$i],
                );
                $resultPengalaman = $this->Mentor_Model->insertPengalaman($dataPengalaman);
                echo json_encode($resultPengalaman);
            }

            $nama_kualifikasi = $this->input->post('nama_kualifikasi');
            $tambahan_kualifikasi = $this->input->post('tambahan_kualifikasi'); // inputan dalam bentuk file seharusnya
            for ($i = 0; $i < count($nama_kualifikasi); $i++) {
                $dataKualifikasi = array(
                    'id_mentor' => $mentor_id,
                    'nama_kualifikasi' => $nama_kualifikasi[$i],
                    'tambahan_kualifikasi' => $tambahan_kualifikasi[$i], //insert data file ganti tipe file jadi blob
                );
                $resultKualifikasi = $this->Mentor_Model->insertKualifikasi($dataKualifikasi);
                echo json_encode($resultKualifikasi);
            }

            $hari_ketersediaan = $this->input->post('hari_ketersediaan');
            $waktu_ketersediaan = $this->input->post('waktu_ketersediaan');
            for ($i = 0; $i < count($hari_ketersediaan); $i++) {
                $dataJadwal = array(
                    'id_mentor' => $mentor_id,
                    'hari_ketersediaan' => $hari_ketersediaan[$i],
                    'waktu_ketersediaan' => date("H:i", strtotime($waktu_ketersediaan[$i])),
                );
                $resultJadwal = $this->Mentor_Model->insertJadwal($dataJadwal);
                echo json_encode($resultJadwal);
            }

            redirect('/admin/mentor', 'refresh');
        }
        $this->load->view('include/header');
        $this->load->view('detail-mentor');
        $this->load->view('include/footer');
    }

    function edit($ID) {
        $this->form_validation->set_rules('nama_mentor', 'Nama Mentor', 'required');
        $this->form_validation->set_rules('no_ponsel_mentor', 'Nomor Ponsel', 'required');
        $this->form_validation->set_rules('jenis_kelamin_mentor', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat_mentor', 'Alamat', 'required');
        $this->form_validation->set_rules('email_mentor', 'Email', 'required');
        $this->form_validation->set_rules('password_mentor', 'Password', 'required');
        if ($input = $this->input->post()) {
            $nama_mentor = $input['nama_mentor'];
            $no_identitas_mentor = $input['no_identitas_mentor'];
            $jenis_kelamin_mentor = $input['jenis_kelamin_mentor'];
            $tempat_lahir_mentor = $input['tempat_lahir_mentor'];
            $tanggal_lahir_mentor = $input['tanggal_lahir_mentor'];
            $no_ponsel_mentor = $input['no_ponsel_mentor'];
            $email_mentor = $input['email_mentor'];
            $password_mentor = $input['password_mentor'];

            $latitude_mentor = $input['latitude_mentor'];
            $longitude_mentor = $input['longitude_mentor'];
            $alamat_mentor = $input ['alamat_mentor'];

            $pekerjaan_mentor = $input ['pekerjaan_mentor'];
            $bio_mentor = $input['bio_mentor'];
            $tentang_mentor = $input['tentang_mentor'];
            $data = array(
                'nama_mentor' => $nama_mentor,
                'no_identitas_mentor' => $no_identitas_mentor,
                'jenis_kelamin_mentor' => $jenis_kelamin_mentor,
                'tempat_lahir_mentor' => $tempat_lahir_mentor,
                'tanggal_lahir_mentor' => date("d-m-Y", strtotime($tanggal_lahir_mentor)),
                'no_ponsel_mentor' => $no_ponsel_mentor,
                'email_mentor' => $email_mentor,
                'password_mentor' => $password_mentor,
                'latitude_mentor' => $latitude_mentor,
                'longitude_mentor' => $longitude_mentor,
                'alamat_mentor' => $alamat_mentor,
                'pekerjaan_mentor' => $pekerjaan_mentor,
                'bio_mentor' => $bio_mentor,
                'tentang_mentor' => $tentang_mentor,
            );
            $mentor_id = $ID; //ngambil ID si Mentor buat nambahin data yang baru

            $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
            $instansi_pendidikan = $this->input->post('instansi_pendidikan');
            if ($jenjang_pendidikan != NULL) {
                for ($i = 0; $i < count($jenjang_pendidikan); $i++) {
                    $dataSejarah = array(
                        'id_mentor' => $mentor_id,
                        'jenjang_pendidikan' => $jenjang_pendidikan[$i],
                        'instansi_pendidikan' => $instansi_pendidikan[$i],
                    );
                    $resultSejarah = $this->Mentor_Model->insertSejarah($dataSejarah);
                    echo json_encode($resultSejarah);
                }
            }

            $nama_pengalaman = $this->input->post('nama_pengalaman');
            if ($nama_pengalaman != NULL) {
                for ($i = 0; $i < count($nama_pengalaman); $i++) {
                    $dataPengalaman = array(
                        'id_mentor' => $mentor_id,
                        'nama_pengalaman' => $nama_pengalaman[$i],
                    );
                    $resultPengalaman = $this->Mentor_Model->insertPengalaman($dataPengalaman);
                    echo json_encode($resultPengalaman);
                }
            }

            $nama_kualifikasi = $this->input->post('nama_kualifikasi');
            $tambahan_kualifikasi = $this->input->post('tambahan_kualifikasi'); // inputan dalam bentuk file seharusnya
            if ($nama_kualifikasi != NULL) {
                for ($i = 0; $i < count($nama_kualifikasi); $i++) {
                    $dataKualifikasi = array(
                        'id_mentor' => $mentor_id,
                        'nama_kualifikasi' => $nama_kualifikasi[$i],
                        'tambahan_kualifikasi' => $tambahan_kualifikasi[$i], //insert data file ganti tipe file jadi blob
                    );
                    $resultKualifikasi = $this->Mentor_Model->insertKualifikasi($dataKualifikasi);
                    echo json_encode($resultKualifikasi);
                }
            }
            $hari_ketersediaan = $this->input->post('hari_ketersediaan');
            $waktu_ketersediaan = $this->input->post('waktu_ketersediaan');
            if ($hari_ketersediaan != NULL) {
                for ($i = 0; $i < count($hari_ketersediaan); $i++) {
                    $dataJadwal = array(
                        'id_mentor' => $mentor_id,
                        'hari_ketersediaan' => $hari_ketersediaan[$i],
                        'waktu_ketersediaan' => date("H:i", strtotime($waktu_ketersediaan[$i])),
                    );
                }
                $resultJadwal = $this->Mentor_Model->insertJadwal($dataJadwal);
                echo json_encode($resultJadwal);
            }
            if ($this->form_validation->run() == TRUE) {
                $result = $this->Mentor_Model->edit($ID, $data); //buat edit data utama dari mentor
                echo json_encode($result);
                redirect('/admin/mentor');
            }
        }
        $param['data'] = $this->Mentor_Model->getById($ID)->row_array(); //edit profil utama, edit data banyak nanti aja
        $param['dataSejarah'] = $this->Mentor_Model->getSejarah($ID)->result_array();
        $param['dataPengalaman'] = $this->Mentor_Model->getPengalaman($ID)->result_array();
        $param['dataKualifikasi'] = $this->Mentor_Model->getKualifikasi($ID)->result_array();
        $param['dataJadwal'] = $this->Mentor_Model->getJadwal($ID)->result_array();

        $this->load->view('include/header');
        $this->load->view('detail-mentor', $param);
        $this->load->view('include/footer');
    }

    function delete($ID) {
        $result = $this->Mentor_Model->delete($ID);
        echo json_encode($result);
        redirect('/admin/mentor');
    }

    function deleteSejarah() {
        $IDMentor = $this->uri->segment(4);
        $IDPendidikan = $this->uri->segment(5);
        $result = $this->Mentor_Model->deleteSejarah($IDPendidikan);
        echo json_encode($result);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

    function deletePengalaman() {
        $IDMentor = $this->uri->segment(4);
        $IDPengalaman = $this->uri->segment(5);
        $result = $this->Mentor_Model->deletePengalaman($IDPengalaman);
        echo json_encode($result);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

    function deleteKualifikasi() {
        $IDMentor = $this->uri->segment(4);
        $IDKualifikasi = $this->uri->segment(5);
        $result = $this->Mentor_Model->deleteKualifikasi($IDKualifikasi);
        echo json_encode($result);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

    function deleteJadwal() {
        $IDMentor = $this->uri->segment(4);
        $IDJadwal = $this->uri->segment(5);
        $result = $this->Mentor_Model->deleteJadwal($IDJadwal);
        echo json_encode($result);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

}
