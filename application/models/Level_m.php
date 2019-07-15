<?php


class Level_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		$this->db
			->select("*")
			->from("level");
		return $this->db->get()->result_array();
	}
}
