<?php

Class Student_Model extends CI_MODEL {

    public function getAll() {
        $this->db->order_by('id_siswa');
        return $this->db->get('siswa');
    }

    public function insert($data) {
        return $this->db->insert('siswa', $data);
    }

    public function delete($ID) {
        $this->db->where('id_siswa', $ID);
        return $this->db->delete('siswa');
    }

    public function getById($ID) {
        return $this->db->get_where('siswa', array('id_siswa' => $ID));
    }

    public function edit($ID, $data) {
        $this->db->where('id_siswa', $ID);
        return $this->db->update('siswa', $data);
    }

    public function login($data) {
        $q = $this->db->query('select id_siswa from siswa where username_siswa = ' . $data['username_siswa'] .
                ' and password_siswa = ' . $data['password_siswa']);
        return $q;
    }

}

?>