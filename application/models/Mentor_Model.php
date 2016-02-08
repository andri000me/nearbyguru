<?php

Class Mentor_Model extends CI_MODEL { //tambahin buat ngatur aneh2 itu

    public function getAll() {
        $this->db->order_by('id_mentor');
        return $this->db->get('mentor');
    }

    public function insert($data) {
        $this->db->insert('mentor', $data);
    }
    public function lastInsert(){
        $this->db->select_max('id_mentor');
        $result= $this->db->get('mentor')->result_array();
        return $result[0]['id_mentor'];
    }

    public function delete($ID) {
        $this->db->where('id_mentor', $ID);
        $this->db->delete('mentor');
    }

    public function edit($ID, $data) {
        $this->db->where('id_mentor', $ID);
        $this->db->update('mentor', $data);
    }

    public function insertSejarah($data) {
        $this->db->insert('sejarah_pendidikan', $data);
    }

    public function getSejarah($ID) {
        $this->db->where('id_mentor', $ID);
        return $this->db->get('sejarah_pendidikan');
    }

    public function deleteSejarah($ID) {
        $this->db->where('id_pendidikan', $ID);
        $this->db->delete('sejarah_pendidikan');
    }

    public function insertPengalaman($data) {
        $this->db->insert('pengalaman_mengajar', $data);
    }

    public function getPengalaman($ID) {
        $this->db->where('id_mentor', $ID);
        return $this->db->get('pengalaman_mengajar');
    }

    public function deletePengalaman($ID) {
        $this->db->where('id_pengalaman', $ID);
        $this->db->delete('pengalaman_mengajar');
    }

    public function insertKualifikasi($data) {
        $this->db->insert('kualifikasi', $data);
    }

    public function getKualifikasi($ID) {
        $this->db->where('id_mentor', $ID);
        return $this->db->get('kualifikasi');
    }

    public function deleteKualifikasi($ID) {
        $this->db->where('id_kualifikasi', $ID);
        $this->db->delete('kualifikasi');
    }

    public function insertJadwal($data) {
        $this->db->insert('jadwal_ketersediaan_mengajar', $data);
    }

    public function getJadwal($ID) {
        $this->db->where('id_mentor', $ID);
        return $this->db->get('jadwal_ketersediaan_mengajar');
    }

    public function deleteJadwal($ID) {
        $this->db->where('id_jadwal_ketersediaan', $ID);
        $this->db->delete('jadwal_ketersediaan_mengajar');
    }

    public function getById($ID) {
        return $this->db->get_where('mentor', array('id_mentor' => $ID));
    }

}

?>