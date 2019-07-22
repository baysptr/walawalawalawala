<?php


class Detailkelompok_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll($id){
		$this->db
			->select('alternative.*, detail_kelompok.id as id_detail')
			->from('detail_kelompok')
			->join('alternative', 'alternative.id=detail_kelompok.id_jurusan')
			->where('detail_kelompok.id_kelompok', $id);
		return $this->db->get()->result_array();
//			return $this->db->get('detail_kelompok')->result_array();
	}

	public function getWhere($id_detail_kelompok){
		return $this->db->get_where('detail_kelompok', array('id' => $id_detail_kelompok))->row();
	}

	public function save($data){
		return $this->db->insert('detail_kelompok', $data);
	}

	public function edit($id_detail_kelompok, $data){
		return $this->db->update('detail_kelompok', $data, array('id' => $id_detail_kelompok));
	}

	public function hapus($id_detail_kelompok){
		return $this->db->delete('detail_kelompok', array('id' => $id_detail_kelompok));
	}
}
