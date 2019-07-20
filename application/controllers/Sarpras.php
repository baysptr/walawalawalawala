<?php

date_default_timezone_set("Asia/Jakarta");
class Sarpras extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Layout_m");
		$this->load->model("Sarpras_m");
		$this->is_logged_in();
	}
	public function is_logged_in(){
		if (!isset($this->session->userdata['id'])) {
			echo "<script>alert('Sorry, kamu belum login !!! login please');window.location = '".base_url()."'</script>";
		}elseif ($this->session->userdata['id_level'] != "5"){
			echo "<script>alert('Sorry, kamu bukan Sarpras');window.location = '".base_url()."'</script>";
		}
	}
	public function index(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();

		$this->load->view('sarpras/index', $data);
	}
	public function sarpras(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();
		$data['sarprass'] = $this->Sarpras_m->getAll();

		$this->load->view('sarpras/sarpras', $data);
	}
	public function do_sarpras(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jumlah = $this->input->post('jumlah');
		$bobot = $this->input->post('bobot');
		$tgl = date("Y-m-d H:i:s");

		$data = array(
			"nama" => $nama,
			"jumlah" => $jumlah,
			"bobot" => $bobot,
			"tgl_update" => $tgl
		);
		if($id == "" || $id == null){
			$exec = $this->Sarpras_m->save($data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}else{
			$exec = $this->Sarpras_m->edit($id, $data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}
	}
	public function get_sarpras($id){
		$data = $this->Sarpras_m->getWhere($id);
		echo json_encode($data);
	}
	public function hapus_sarpras($id){
		$this->Sarpras_m->hapus($id);
		echo "TRUE";
	}
}
