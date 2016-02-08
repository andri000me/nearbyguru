<?php

Class Mentor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mentor_Model');
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
                'pekerjaan_mentor' => $pekerjaan_mentor,
                'bio_mentor' => $bio_mentor,
                'tentang_mentor' => $tentang_mentor,
            );
            $this->Mentor_Model->insert($data);
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
                $this->Mentor_Model->insertSejarah($dataSejarah);
            }

            $nama_pengalaman = $this->input->post('nama_pengalaman');
            for ($i = 0; $i < count($nama_pengalaman); $i++) {
                $dataPengalaman = array(
                    'id_mentor' => $mentor_id,
                    'nama_pengalaman' => $nama_pengalaman[$i],
                );
                $this->Mentor_Model->insertPengalaman($dataPengalaman);
            }

            $nama_kualifikasi = $this->input->post('nama_kualifikasi');
            $tambahan_kualifikasi = $this->input->post('tambahan_kualifikasi'); // inputan dalam bentuk file seharusnya
            for ($i = 0; $i < count($nama_kualifikasi); $i++) {
                $dataKualifikasi = array(
                    'id_mentor' => $mentor_id,
                    'nama_kualifikasi' => $nama_kualifikasi[$i],
                    'tambahan_kualifikasi' => $tambahan_kualifikasi[$i], //insert data file ganti tipe file jadi blob
                );
                $this->Mentor_Model->insertKualifikasi($dataKualifikasi);
            }

            $hari_ketersediaan = $this->input->post('hari_ketersediaan');
            $waktu_ketersediaan = $this->input->post('waktu_ketersediaan');
            for ($i = 0; $i < count($hari_ketersediaan); $i++) {
                $dataJadwal = array(
                    'id_mentor' => $mentor_id,
                    'hari_ketersediaan' => $hari_ketersediaan[$i],
                    'waktu_ketersediaan' => date("H:i", strtotime($waktu_ketersediaan[$i])),
                );
                $this->Mentor_Model->insertJadwal($dataJadwal);
            }

            redirect('/admin/mentor', 'refresh');
        }
        $this->load->view('include/header');
        $this->load->view('detail-mentor');
        $this->load->view('include/footer');
    }

    function edit($ID) {
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
                    $this->Mentor_Model->insertSejarah($dataSejarah);
                }
            }

            $nama_pengalaman = $this->input->post('nama_pengalaman');
            if ($nama_pengalaman != NULL) {
                for ($i = 0; $i < count($nama_pengalaman); $i++) {
                    $dataPengalaman = array(
                        'id_mentor' => $mentor_id,
                        'nama_pengalaman' => $nama_pengalaman[$i],
                    );
                    $this->Mentor_Model->insertPengalaman($dataPengalaman);
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
                    $this->Mentor_Model->insertKualifikasi($dataKualifikasi);
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
                $this->Mentor_Model->insertJadwal($dataJadwal);
            }
            
            $this->Mentor_Model->edit($ID, $data); //buat edit data utama dari mentor
            redirect('/admin/mentor');
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
        $this->Mentor_Model->delete($ID);
        redirect('/admin/mentor');
    }

    function deleteSejarah() {
        $IDMentor = $this->uri->segment(4);
        $IDPendidikan = $this->uri->segment(5);
        $this->Mentor_Model->deleteSejarah($IDPendidikan);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

    function deletePengalaman() {
        $IDMentor = $this->uri->segment(4);
        $IDPengalaman = $this->uri->segment(5);
        $this->Mentor_Model->deletePengalaman($IDPengalaman);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

    function deleteKualifikasi() {
        $IDMentor = $this->uri->segment(4);
        $IDKualifikasi = $this->uri->segment(5);
        $this->Mentor_Model->deleteKualifikasi($IDKualifikasi);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

    function deleteJadwal() {
        $IDMentor = $this->uri->segment(4);
        $IDJadwal = $this->uri->segment(5);
        $this->Mentor_Model->deleteJadwal($IDJadwal);
        redirect('/admin/mentor/edit/' . $IDMentor, 'refresh');
    }

}
