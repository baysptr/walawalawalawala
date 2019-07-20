<?php


class Kelompok_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		$this->db
			->select('kelompok.*, alternative.nama as nama_jurusan, alternative.kode')
			->from('kelompok')
			->join('alternative', 'alternative.id=kelompok.id_alternative');
		return $this->db->get()->result_array();
//			return $this->db->get('kelompok')->result_array();
	}

	public function getWhere($id_kelompok){
		return $this->db->get_where('kelompok', array('id' => $id_kelompok))->row();
	}

	public function save($data){
		return $this->db->insert('kelompok', $data);
	}

	public function edit($id_kelompok, $data){
		return $this->db->update('kelompok', $data, array('id' => $id_kelompok));
	}

	public function hapus($id_kelompok){
		return $this->db->delete('kelompok', array('id' => $id_kelompok));
	}
}
