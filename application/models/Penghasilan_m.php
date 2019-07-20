<?php


class Penghasilan_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
			return $this->db->get('penghasilan')->result_array();
	}

	public function getWhere($id_penghasilan){
		return $this->db->get_where('penghasilan', array('id' => $id_penghasilan))->row();
	}

	public function save($data){
		return $this->db->insert('penghasilan', $data);
	}

	public function edit($id_penghasilan, $data){
		return $this->db->update('penghasilan', $data, array('id' => $id_penghasilan));
	}

	public function hapus($id_penghasilan){
		return $this->db->delete('penghasilan', array('id' => $id_penghasilan));
	}
}
