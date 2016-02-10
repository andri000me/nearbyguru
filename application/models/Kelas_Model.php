<?php
	Class Kelas_Model extends CI_MODEL {
		public function getAll()
		{
                    $this->db->order_by('id_kelas');
                    return $this->db->get('kelas');
		}
		public function insert($data)
		{
			$this->db->insert('kelas', $data);
		}
                public function delete($ID)
		{
			$this->db->where('id_kelas', $ID);
			$this->db->delete('kelas');
		}
		public function getById($ID)
		{
			return $this->db->get_where('kelas', array('id_kelas' => $ID));
		}
		public function edit($ID, $data)
		{
			$this->db->where('id_kelas', $ID);
			$this->db->update('kelas', $data);
		}
                public function getKelasMentor(){
                    $this->db->query('');
                }
	}
?>