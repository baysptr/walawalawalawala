<?php


class Kelulusan_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		$this->db
			->select("kelulusan.*, alternative.nama, alternative.kode")
			->from("kelulusan")
			->join("alternative", 'alternative.id=kelulusan.id_jurusan')
			->order_by("kelulusan.persentase", "asc");
		return $this->db->get()->result_array();
//		return $this->db->get('kelulusan')->result_array();
	}

	public function getWhere($id_kelulusan){
		return $this->db->get_where('kelulusan', array('id' => $id_kelulusan))->row();
	}

	public function getBobot($id_kelulusan){
		return $this->db->get_where('kelulusan', array('id_jurusan' => $id_kelulusan))->row();
	}

	public function save($data){
		return $this->db->insert('kelulusan', $data);
	}

	public function edit($id_kelulusan, $data){
		return $this->db->update('kelulusan', $data, array('id' => $id_kelulusan));
	}

	public function hapus($id_kelulusan){
		return $this->db->delete('kelulusan', array('id' => $id_kelulusan));
	}
}
