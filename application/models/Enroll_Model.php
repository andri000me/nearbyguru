<?php

Class Enroll_Model extends CI_MODEL {

    public function getDataAvailableCourses() {
        $q = $this->db->query('select harga.id_harga as id_harga, ' .
                ' mata_pelajaran.tingkat_mapel as tingkat_mapel, ' .
                ' mata_pelajaran.nama_mapel as nama_mapel, ' .
                ' harga.harga as harga, ' .
                ' mentor.nama_mentor as nama_mentor ' .
                ' from harga,mata_pelajaran, mentor ' .
                ' where mata_pelajaran.id_mapel = harga.id_mapel ' .
                ' and mentor.id_mentor = harga.id_mentor ' .
                ' order by harga.id_harga ');
        return $q;
    }
    public function addKelas($idSiswa, $idHarga) {
        $data = array(
            'id_siswa' => $idSiswa,
            'id_harga' => $idHarga
        );
        $this->db->insert('kelas', $data);
    }

}
