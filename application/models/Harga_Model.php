<?php

Class Harga_Model extends CI_MODEL {

    public function getAll() {
        $this->db->order_by('id_harga');
        return $this->db->get('harga');
    }

    public function insert($data) {
        return $this->db->insert('harga', $data);
    }

    public function delete($ID) {
        $this->db->where('id_harga', $ID);
        return $this->db->delete('harga');
    }

    public function getById($ID) {
        return $this->db->get_where('harga', array('id_harga' => $ID));
    }

    public function edit($ID, $data) {
        $this->db->where('id_harga', $ID);
        return $this->db->update('harga', $data);
    }

    public function getHargaMentor($ID) {
        return $this->db->query('select harga.id_harga,harga.id_mentor,harga.harga, mata_pelajaran.nama_mapel, mata_pelajaran.tingkat_mapel from harga,mata_pelajaran where ' . $ID . ' = harga.id_mentor and harga.id_mapel = mata_pelajaran.id_mapel');
    }

    public function insertHargaMentor($data, $ID) { //error ambil hasil id_mapelnya
        // $IDMapel =  $this->db->query("SELECT id_mapel FROM mata_pelajaran WHERE tingkat_mapel = '".$data['tingkat_mapel']."' AND nama_mapel = '".$data['nama_mapel']."'")->row();
        $this->db->select('id_mapel');
        $this->db->from('mata_pelajaran');
        $where = "tingkat_mapel = '" . $data['tingkat_mapel'] . "' AND nama_mapel = '" . $data['nama_mapel'] . "'";
        $this->db->where($where);
        $q = $this->db->get()->row()->id_mapel;
        
        $data = array(
            'id_mentor' => $ID,
            'id_mapel' => $q,
            'harga' => $data['harga'],
        );
        return $this->db->insert('harga', $data);
    }

}

?>