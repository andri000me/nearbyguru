<?php

Class Kelas_Model extends CI_MODEL {

    public function getAll() {
        $this->db->order_by('id_kelas');
        return $this->db->get('kelas');
    }

    public function insert($data) {
        return $this->db->insert('kelas', $data);
    }

    public function delete($ID) {
        $this->db->where('id_kelas', $ID);
        return $this->db->delete('kelas');
    }

    public function getById($ID) {
        return $this->db->get_where('kelas', array('id_kelas' => $ID));
    }

    public function edit($ID, $data) {
        $this->db->where('id_kelas', $ID);
        return $this->db->update('kelas', $data);
    }

    public function getKelasByIdSiswa($ID) {
        $q = $this->db->query('select mata_pelajaran.tingkat_mapel as tingkat_mapel, ' .
                ' mata_pelajaran.nama_mapel as nama_mapel, ' .
                ' mentor.nama_mentor as nama_mentor, ' .
                ' mentor.alamat_mentor as alamat_mentor, ' .
                ' mentor.no_ponsel_mentor as no_ponsel_mentor, ' .
                ' harga.harga as harga, ' .
                ' kelas.waktu_masuk as waktu_masuk, ' .
                ' kelas.waktu_keluar as waktu_keluar, ' .
                ' kelas.id_kelas as id_kelas, ' .
                ' kelas.id_siswa as id_siswa, ' .
                ' harga.id_harga as id_harga, ' .
                ' mentor.id_mentor as id_mentor ' .
                ' from kelas, harga, mentor, mata_pelajaran ' .
                ' where kelas.id_siswa = ' . $ID .
                ' and harga.id_harga = kelas.id_harga ' .
                ' and mentor.id_mentor = harga.id_mentor ' .
                ' and mata_pelajaran.id_mapel = harga.id_mapel');
        return $q;
    }

    public function getKelasByIdMentor($ID) {
        $q = $this->db->query('select mata_pelajaran.tingkat_mapel as tingkat_mapel, ' .
                ' mata_pelajaran.nama_mapel as nama_mapel, ' .
                ' siswa.nama_siswa as nama_siswa, ' .
                ' siswa.alamat_siswa as alamat_siswa, ' .
                ' siswa.no_ponsel_siswa as no_ponsel_siswa, ' .
                ' harga.harga as harga, ' .
                ' kelas.waktu_masuk as waktu_masuk, ' .
                ' kelas.waktu_keluar as waktu_keluar, ' .
                ' kelas.id_kelas as id_kelas, ' .
                ' harga.id_mentor as id_mentor, ' .
                ' kelas.id_harga as id_harga, ' .
                ' siswa.id_siswa as id_siswa ' .
                ' from harga, kelas, mata_pelajaran, siswa ' .
                ' where harga.id_mentor = ' . $ID .
                ' and kelas.id_harga = harga.id_harga ' .
                ' and mata_pelajaran.id_mapel = harga.id_mapel ' .
                ' and siswa.id_siswa = kelas.id_siswa ');
        return $q;
    }

    public function getKelasByIdMentorandIDKelas($IDMentor, $IDKelas) {
        $q = $this->db->query('select mata_pelajaran.tingkat_mapel as tingkat_mapel, ' .
                ' mata_pelajaran.nama_mapel as nama_mapel, ' .
                ' siswa.nama_siswa as nama_siswa, ' .
                ' siswa.alamat_siswa as alamat_siswa, ' .
                ' siswa.no_ponsel_siswa as no_ponsel_siswa, ' .
                ' harga.harga as harga, ' .
                ' kelas.waktu_masuk as waktu_masuk, ' .
                ' kelas.waktu_keluar as waktu_keluar, ' .
                ' kelas.id_kelas as id_kelas, ' .
                ' harga.id_mentor as id_mentor, ' .
                ' kelas.id_harga as id_harga, ' .
                ' siswa.id_siswa as id_siswa ' .
                ' from harga, kelas, mata_pelajaran, siswa ' .
                ' where harga.id_mentor = ' . $IDMentor .
                ' and kelas.id_kelas = ' . $IDKelas .
                ' and kelas.id_harga = harga.id_harga ' .
                ' and mata_pelajaran.id_mapel = harga.id_mapel ' .
                ' and siswa.id_siswa = kelas.id_siswa ');
        return $q;
    }

}

?>