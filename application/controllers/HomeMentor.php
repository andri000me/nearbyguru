<?php

Class HomeMentor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mentor_Model');
        $this->load->model('Harga_Model');
        $this->load->model('Kelas_Model');
        $this->load->library('form_validation'); //SAAT ANDROID TIDAK DIGUNAKAN, HAPUS/UBAH BEBERAPA CODE INI UNTUK MENYIMPAN DATA
        
    }

//    public function index() {
//       // $ID = 1; //untuk uji coba id mentor 1 
//        $param['asal'] = "coba";
//
//        $param['data'] = $this->Mentor_Model->getById($ID)->row_array(); //ambil data profil utama
//        $param['dataSejarah'] = $this->Mentor_Model->getSejarah($ID)->result_array();
//        $param['dataPengalaman'] = $this->Mentor_Model->getPengalaman($ID)->result_array();
//        $param['dataKualifikasi'] = $this->Mentor_Model->getKualifikasi($ID)->result_array();
//        $param['dataJadwal'] = $this->Mentor_Model->getJadwal($ID)->result_array();
//
//        $param['dataHarga'] = $this->Harga_Model->getHargaMentor($ID)->result_array();
//        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdMentor($ID)->result_array();
//        //buat include template
//        $this->load->view('include/header', $param);
//        $this->load->view('homementor', $param);
//        $this->load->view('include/footer');
//        //--------------------------------------------
//    }
//    public function login($json) {
//        $data = json_decode($json);
//        $ID = $this->Mentor_Model->login($data)->row_array();
//        if($ID != NULL){
//            //ambil ID dan panggil method view dengan ID yang didapakan
//             $response["success"] = 1;
//             $response["message"] = 'Login Sukses';
//             echo json_encode($response);
//            $this->view($ID);
//        }
//        else{
//            //return response error ke android
//            $response["success"] = 0;
//            $response["message"] = 'Login Gagal';
//            echo json_encode($response);
//        }
//        
//    }
    public function view($ID) {
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
        
        //-----------UNTUK ANDROID---------------------------------------------
//        $response['data'] = $this->Mentor_Model->getById($ID)->row_array(); //ambil data profil utama
//        $response['dataSejarah'] = $this->Mentor_Model->getSejarah($ID)->result_array();
//        $response['dataPengalaman'] = $this->Mentor_Model->getPengalaman($ID)->result_array();
//        $response['dataKualifikasi'] = $this->Mentor_Model->getKualifikasi($ID)->result_array();
//        $response['dataJadwal'] = $this->Mentor_Model->getJadwal($ID)->result_array();
//
//        $response['dataHarga'] = $this->Harga_Model->getHargaMentor($ID)->result_array();
//        $response['dataKelas'] = $this->Kelas_Model->getKelasByIdMentor($ID)->result_array();
//        
//        echo(json_encode($response));
        //---------------------------------------------------------------------
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
        //------------UNTUK ANDROID--TERGANTUNG ULWAN NGIRIMNYA SPT APA-------------------------------------------------
//        $ID = json_decode($ID);
//        //nambahin data mapel dalam bentuk array diambil nanti,, cari cara decodenyaaaaa.. sama ulwan ngirim spt apa ya..
//        if ($tingkat_mapel != NULL) {
//                for ($i = 0; $i < count($tingkat_mapel); $i++) {
//                    $dataHarga = array(
//                        'tingkat_mapel' => $tingkat_mapel[$i],
//                        'nama_mapel' => $nama_mapel[$i],
//                        'harga' => $harga[$i],
//                    );
//                    $this->Harga_Model->insertHargaMentor($dataHarga, $ID);
//                }
//            }
//        $response['dataHarga'] = $this->Harga_Model->getHargaMentor($ID)->result_array();
//        echo(json_encode($response));
        //-------------------------------------------------------------------------------------
    }

    public function deleteHarga() {
        $IDMentor = $this->uri->segment(3);
        $IDHarga = $this->uri->segment(4);
        $result = $this->Harga_Model->delete($IDHarga);
        echo json_encode($result);
        redirect('/homementor/editHarga/' . $IDMentor, 'refresh');
        //-----------------UNTUK ANDROID-----------------------------------------
        //get idharga dari android
        //decode id diatas itu
        //delete harga sesuai dengan id_harga
        //response ke android
        //-----------------------------------------------------------------------
    }

    public function editKelasByMentor($ID) { //menampilkan semua kelas aktif yang diikuti oleh mentor
        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdMentor($ID)->result_array();
        $this->load->view('include/header');
        $this->load->view('edit-kelas-mentor', $param);
        $this->load->view('include/footer');
        //-----UNTUK ANDROID----------------------------------------------------
        //ambil id_mentor dari android, decode
        //terus ambil data dari database
        //kirim hasil data ke android dengan json
        //----------------------------------------------------------------------
    }

    public function deleteKelasByMentor() {
        $IDMentor = $this->uri->segment(3);
        $IDKelas = $this->uri->segment(4);
        $result = $this->Kelas_Model->delete($IDKelas);
        echo json_encode($result);
        redirect('/homementor/editKelasByMentor/' . $IDMentor, 'refresh');
        //-----------------UNTUK ANDROID-----------------------------------------
        //get idkelas dari android
        //decode id diatas itu
        //delete harga sesuai dengan id_harga
        //response ke android
        //-----------------------------------------------------------------------
    }

    public function editJadwalKelas() {
        $IDMentor = $this->uri->segment(3);
        $IDKelas = $this->uri->segment(4);

        $this->form_validation->set_rules('waktu_masuk', 'Waktu Masuk', 'required');
        $this->form_validation->set_rules('waktu_keluar', 'Waktu Keluar', 'required');

        if ($input = $this->input->post()) {
            $waktu_masuk = $input['waktu_masuk'];
            $waktu_keluar = $input['waktu_keluar'];

            $data = array(
                'waktu_masuk' =>date("H:i", strtotime($waktu_masuk)),
                'waktu_keluar' => date("H:i", strtotime($waktu_keluar))
            );
            if ($this->form_validation->run() == TRUE) {
                $result = $this->Kelas_Model->edit($IDKelas, $data);
                echo json_encode($result);
                redirect('/homementor/editKelasByMentor/' . $IDMentor, 'refresh');
            }
        }
        $param['data'] = $this->Kelas_Model->getById($IDKelas)->row_array();//ambil data kelas sesuai idKelas
        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdMentorandIDKelas($IDMentor, $IDKelas)->row_array(); //ambil data kelas, mata pelajaran, harga dam jadwal dari beberapa tabel dengan parameter idkelas dan idmentor
        $param['id_mentor'] = $IDMentor;
        $this->load->view('include/header');
        $this->load->view('detail-kelas-mentor', $param);
        $this->load->view('include/footer');
        //-------------UNTUK ANDROID--------------------------------------------
        //ambil idkelas dan idmentor dari android decode
        //ambil data kelas KIRIM ke android dengan parameter idkelas
        //jika diedit maka ambil data dalam bentuk array/biasa oleh ulwan dan MASUKIN ke database
        //kirim response bahwa data berhasil diedit atau update
        //----------------------------------------------------------------------
    }

}
