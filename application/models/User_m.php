<?php


class User_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		$this->db
			->select('user_log.*, level.kode')
			->from('user_log')
			->join('level', 'level.id=user_log.id_level');
		return $this->db->get()->result_array();
//		return $this->db->get('user_log')->result_array();
	}

	public function getWhere($id_user){
		return $this->db->get_where('user_log', array('id' => $id_user))->row();
	}

	public function save($data){
		return $this->db->insert('user_log', $data);
	}

	public function edit($id_user, $data){
		return $this->db->update('user_log', $data, array('id' => $id_user));
	}

	public function hapus($id_user){
		return $this->db->delete('user_log', array('id' => $id_user));
	}
}
