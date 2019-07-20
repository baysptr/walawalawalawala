<?php

date_default_timezone_set("Asia/Jakarta");
class Wakakur extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Layout_m');
		$this->load->model('Kelompok_m');
		$this->load->model('Peminatan_m');
		$this->load->model('Alternative_m');
		$this->is_logged_in();
	}
	public function is_logged_in(){
		if (!isset($this->session->userdata['id'])) {
			echo "<script>alert('Sorry, kamu belum login !!! login please');window.location = '".base_url()."'</script>";
		}elseif ($this->session->userdata['id_level'] != "2"){
			echo "<script>alert('Sorry, kamu bukan Wakakur');window.location = '".base_url()."'</script>";
		}
	}
	public function index(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();

		$this->load->view('wakakur/index', $data);
	}

	public function kelompok(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();
		$data['kelompoks'] = $this->Kelompok_m->getAll();
		$data['jurusans'] = $this->Alternative_m->getAll();

		$this->load->view('wakakur/kelompok', $data);
	}
	public function do_kelompok(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$tgl = date("Y-m-d H:i:s");

		$data = array(
			"nama" => $nama,
			"id_alternative" => $mapel,
			"tgl_update" => $tgl
		);
		if($id == "" || $id == null){
			$exec = $this->Kelompok_m->save($data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}else{
			$exec = $this->Kelompok_m->edit($id, $data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}
	}
	public function get_kelompok($id){
		$data = $this->Kelompok_m->getWhere($id);
		echo json_encode($data);
	}
	public function hapus_kelompok($id){
		$this->Kelompok_m->hapus($id);
		echo "TRUE";
	}

	public function peminatan(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();
		$data['kelompoks'] = $this->Kelompok_m->getAll();
		$data['peminatans'] = $this->Peminatan_m->getAll();

		$this->load->view('wakakur/peminatan', $data);
	}
	public function select_jurusan($id_kelompok){
		$datas = $this->Alternative_m->select($id_kelompok);
		$jurusan = "<option selected disabled>-- Pilih Mapel --</option>";
		foreach ($datas as $data){
			$jurusan .= "<option value='".$data['id']."'>".$data['nama']."</option>";
		}
		echo $jurusan;
	}
	public function do_peminatan(){
		$id = $this->input->post('id');
		$pernyataan = $this->input->post('pernyataan');
		$bobot = $this->input->post('bobot');
		$jurusan = $this->input->post('mapel');
		$tgl = date("Y-m-d H:i:s");

		$data = array(
			"id_jurusan" => $jurusan,
			"bobot" => $bobot,
			"pernyataan" => $pernyataan,
			"tgl_update" => $tgl
		);
		if($id == "" || $id == null){
			$exec = $this->Peminatan_m->save($data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}else{
			$exec = $this->Peminatan_m->edit($id, $data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}
	}
	public function get_peminatan($id){
		$data = $this->Peminatan_m->getWhereId($id);
		echo json_encode($data);
	}
	public function hapus_peminatan($id){
		$this->Peminatan_m->hapus($id);
		echo "TRUE";
	}
}
