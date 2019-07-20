<?php


class Sarpras_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		return $this->db->get('sarpras')->result_array();
	}

	public function getWhere($id_sarpras){
		return $this->db->get_where('sarpras', array('id' => $id_sarpras))->row();
	}

	public function save($data){
		return $this->db->insert('sarpras', $data);
	}

	public function edit($id_sarpras, $data){
		return $this->db->update('sarpras', $data, array('id' => $id_sarpras));
	}

	public function hapus($id_sarpras){
		return $this->db->delete('sarpras', array('id' => $id_sarpras));
	}
}
