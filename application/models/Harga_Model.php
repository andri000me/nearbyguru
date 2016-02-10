<?php
	Class Harga_Model extends CI_MODEL {
		public function getAll()
		{
                    $this->db->order_by('id_harga');
                    return $this->db->get('harga');
		}
		
		public function insert($data)
		{
			$this->db->insert('harga', $data);
		}
                
                public function delete($ID)
		{
			$this->db->where('id_harga', $ID);
			$this->db->delete('harga');
		}
		public function getById($ID)
		{
			return $this->db->get_where('harga', array('id_harga' => $ID));
		}
		public function edit($ID, $data)
		{
			$this->db->where('id_harga', $ID);
			$this->db->update('harga', $data);
		}
                public function getHargaMentor($ID)
		{
                    return $this->db->query('select harga.harga, mata_pelajaran.nama_mapel, mata_pelajaran.tingkat_mapel from harga,mata_pelajaran where '.$ID.' = harga.id_mentor and harga.id_mapel = mata_pelajaran.id_mapel');
		}
                public function insertHargaMentor($data,$ID){
                    $IDMapel = $this->db->query('select mata_pelajaran.id_mapel '.
                                                    ' from mata_pelajaran '.
                                                    ' where mata_pelajaran.tingkat_mapel = '.$data['tingkat_mapel'].
                                                    ' and mata_pelajaran.nama_mapel = '.$data['nama_mapel']);
                    $this->db->query('insert into harga(id_mentor, id_mapel, harga) values (' .$ID. ' , ' .$IDMapel. ' , '.$data['harga'].' )');
                }
	}
?>