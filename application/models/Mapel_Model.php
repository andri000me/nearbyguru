<?php
	Class Mapel_Model extends CI_MODEL {
		public function getAll()
		{
                    $this->db->order_by('id_mapel');
                    return $this->db->get('mata_pelajaran');
		}
		
		public function insert($data)
		{
			return $this->db->insert('mata_pelajaran', $data);
		}
                
                public function delete($ID)
		{
			$this->db->where('id_mapel', $ID);
			return $this->db->delete('mata_pelajaran');
		}
		public function getById($ID)
		{
			return $this->db->get_where('mata_pelajaran', array('id_mapel' => $ID));
		}
		public function edit($ID, $data)
		{
			$this->db->where('id_mapel', $ID);
			return $this->db->update('mata_pelajaran', $data);
		}
	}
?>