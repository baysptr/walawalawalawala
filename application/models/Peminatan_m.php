<?php


class Peminatan_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAll(){
		$this->db
			->select('peminatan.id, peminatan.pernyataan, peminatan.bobot, kelompok.nama as nama_kelompok, alternative.kode')
			->from('peminatan')
			->join('alternative', 'alternative.id=peminatan.id_jurusan')
			->join('kelompok', 'kelompok.id=peminatan.id_kelompok');
		return $this->db->get()->result_array();
//			return $this->db->get('kelompok')->result_array();
	}

	public function getRand(){
		$this->db
			->select('*')
			->from('peminatan')
			->order_by('rand()');
		return $this->db->get()->result_array();
	}

	public function getWherePeminatan($id){
		$this->db
			->select('peminatan.id, peminatan.pernyataan, peminatan.bobot, kelompok.nama as nama_kelompok, alternative.nama as nama_jurusan, alternative.id as id_jurusan')
			->from('peminatan')
			->join('alternative', 'alternative.id=peminatan.id_jurusan')
			->join('kelompok', 'kelompok.id=peminatan.id_kelompok')
			->where('peminatan.id', $id);
		return $this->db->get()->row();
//			return $this->db->get('kelompok')->result_array();
	}

	public function getWhereId($id){
		$this->db
			->select('peminatan.id, peminatan.pernyataan, peminatan.bobot, kelompok.id as id_kelompok, alternative.id as id_jurusan')
			->from('peminatan')
			->join('alternative', 'alternative.id=peminatan.id_jurusan')
			->join('kelompok', 'kelompok.id=peminatan.id_kelompok')
			->where('peminatan.id', $id);
		return $this->db->get()->row();
//			return $this->db->get('kelompok')->result_array();
	}

	public function getWhere($id_peminatan){
		return $this->db->get_where('peminatan', array('id' => $id_peminatan))->row();
	}

	public function save($data){
		return $this->db->insert('peminatan', $data);
	}

	public function edit($id_peminatan, $data){
		return $this->db->update('peminatan', $data, array('id' => $id_peminatan));
	}

	public function hapus($id_peminatan){
		return $this->db->delete('peminatan', array('id' => $id_peminatan));
	}
}
