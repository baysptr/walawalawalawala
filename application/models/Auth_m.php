<?php


class Auth_m extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function getData($user, $pass){
		$this->db
			->select('user_log.id, user_log.nama, user_log.id_level, level.kode, level.nama as nama_level')
			->from('user_log')
			->join('level', 'level.id=user_log.id_level')
			->where('user_log.user', $user)
			->where('user_log.password', $pass);
		return $this->db->get();
	}
}
