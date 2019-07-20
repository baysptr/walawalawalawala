<?php


class Bobot_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
			return $this->db->get('bobot')->result_array();
	}
	public function getWhere($id_bobot){
		return $this->db->get_where('bobot', array('id' => $id_bobot))->row();
	}

	public function save($data){
		return $this->db->insert('bobot', $data);
	}

	public function edit($id_bobot, $data){
		return $this->db->update('bobot', $data, array('id' => $id_bobot));
	}

	public function hapus($id_bobot){
		return $this->db->delete('bobot', array('id' => $id_bobot));
	}
}
