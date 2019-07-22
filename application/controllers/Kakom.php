<?php

date_default_timezone_set("Asia/Jakarta");
class Kakom extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Layout_m');
		$this->load->model('Bobot_m');
		$this->load->model('Kelulusan_m');
		$this->load->model('Alternative_m');
		$this->is_logged_in();
	}
	public function is_logged_in(){
		if (!isset($this->session->userdata['id'])) {
			echo "<script>alert('Sorry, kamu belum login !!! login please');window.location = '".base_url()."'</script>";
		}elseif ($this->session->userdata['id_level'] != "3"){
			echo "<script>alert('Sorry, kamu bukan Kakom');window.location = '".base_url()."'</script>";
		}
	}
	public function index(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();

		$this->load->view('kakom/index', $data);
	}
	public function perbobotan(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();
		$data['bobots'] = $this->Bobot_m->getAll();

		$this->load->view('kakom/bobot', $data);
	}
	public function do_bobot(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$kriteria = $this->input->post('kriteria');
		$bobot = $this->input->post('bobot');
		$tgl = date("Y-m-d H:i:s");

		$data = array(
			"kode" => $kode,
			"kriteria" => $kriteria,
			"bobot" => $bobot,
			"tgl_update" => $tgl
		);
		if($id == "" || $id == null){
			$exec = $this->Bobot_m->save($data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}else{
			$exec = $this->Bobot_m->edit($id, $data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}
	}
	public function get_bobot($id){
		$data = $this->Bobot_m->getWhere($id);
		echo json_encode($data);
	}
	public function hapus_bobot($id){
		$this->Bobot_m->hapus($id);
		echo "TRUE";
	}

	public function kelulusan(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();
		$data['kelulusans'] = $this->Kelulusan_m->getAll();
		$data['jurusans'] = $this->Alternative_m->getAll();

		$this->load->view('kakom/lulus', $data);
	}
	public function do_kelulusan(){
		$id = $this->input->post('id');
		$tgl = date("Y-m-d H:i:s");

		$data = array(
			"id_jurusan" => $this->input->post('jurusan'),
			"bobot" => $this->input->post('bobot'),
			"persentase" => $this->input->post('persentase'),
			"tahun" => $this->input->post('tahun'),
			"tgl_update" => $tgl
		);
		if($id == "" || $id == null){
			$exec = $this->Kelulusan_m->save($data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}else{
			$exec = $this->Kelulusan_m->edit($id, $data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}
	}
	public function get_kelulusan($id){
		$data = $this->Kelulusan_m->getWhere($id);
		echo json_encode($data);
	}
	public function hapus_kelulusan($id){
		$this->Kelulusan_m->hapus($id);
		echo "TRUE";
	}
}
