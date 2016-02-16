<?php

Class HomeSiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_Model');
        $this->load->model('Kelas_Model');
        $this->load->model('Harga_Model');
    }
//    public function index() {
//        $ID=1;//untuk uji coba id_siswa
//        
//        $param['asal'] = "coba";
//        $param['data'] = $this->Student_Model->getById($ID)->row_array();//ambil data profil utama
//        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdSiswa($ID)->result_array();//ambil data kelas yang diikuti siswa
//        
//        
//        $this->load->view('include/header', $param);
//        $this->load->view('homesiswa', $param);
//        $this->load->view('include/footer');
//
//    }
//    public function login($json) {
//        $data = json_decode($json);
//        $ID = $this->Student_Model->login($data)->row_array();
//         if($ID != NULL){
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
//    }
    
    public function view($ID) {
         $param['asal'] = "coba";
        $param['data'] = $this->Student_Model->getById($ID)->row_array();//ambil data profil utama
        $param['dataKelas'] = $this->Kelas_Model->getKelasByIdSiswa($ID)->result_array();//ambil data kelas yang diikuti siswa
        
        
        $this->load->view('include/header', $param);
        $this->load->view('homesiswa', $param);
        $this->load->view('include/footer');
        //--------UNTUK ANDROID-------------------------------------------------
        //ambil id
        //ambil data profil dari database, KIRIM ke android
        //ambil data  kelas dari database, KIRIM ke android
        //kirim response ke android
        //----------------------------------------------------------------------
    }
}
?>
