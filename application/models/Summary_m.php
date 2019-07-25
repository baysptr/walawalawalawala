<?php


class Summary_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		return $this->db->get('summary')->result_array();
	}

	public function getCount(){
		return $this->db->get("summary")->num_rows();
	}

	public function getKode($id_summary){
		return $this->db->get_where('summary', array('kode' => $id_summary))->row();
	}

	public function getSummary(){
		$this->db
			->select_sum('akl')
			->select_sum('otkp')
			->select_sum('bdp')
			->select_sum('tkj')
			->select_sum('mm');
		return $this->db->get('summary')->row();
	}

	public function getWhere($id_summary){
		return $this->db->get_where('summary', array('id' => $id_summary))->row();
	}

	public function save($data){
		return $this->db->insert('summary', $data);
	}

	public function edit($id_summary, $data){
		return $this->db->update('summary', $data, array('id' => $id_summary));
	}

	public function hapus($id_summary){
		return $this->db->delete('summary', array('id' => $id_summary));
	}
}
