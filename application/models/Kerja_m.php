<?php


class Kerja_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		$this->db
			->select("kerja.*, alternative.nama")
			->from('kerja')
			->join('alternative', 'alternative.id=kerja.id_jurusan');
		return $this->db->get()->result_array();
//			return $this->db->get('kerja')->result_array();
	}
	public function getWhere($id_kerja){
		return $this->db->get_where('kerja', array('id' => $id_kerja))->row();
	}

	public function save($data){
		return $this->db->insert('kerja', $data);
	}

	public function edit($id_kerja, $data){
		return $this->db->update('kerja', $data, array('id' => $id_kerja));
	}

	public function hapus($id_kerja){
		return $this->db->delete('kerja', array('id' => $id_kerja));
	}
}
