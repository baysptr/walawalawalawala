<?php


class Alternative_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
			return $this->db->get('alternative')->result_array();
	}

	public function select($id_kelompok){
		$this->db
			->select('alternative.*')
			->from('kelompok')
			->join('alternative', 'alternative.id=kelompok.id_alternative');
		return $this->db->get()->result_array();
	}


	public function getWhere($id_alternative){
		return $this->db->get_where('alternative', array('id' => $id_alternative))->row();
	}

	public function save($data){
		return $this->db->insert('alternative', $data);
	}

	public function edit($id_alternative, $data){
		return $this->db->update('alternative', $data, array('id' => $id_alternative));
	}

	public function hapus($id_alternative){
		return $this->db->delete('alternative', array('id' => $id_alternative));
	}
}
