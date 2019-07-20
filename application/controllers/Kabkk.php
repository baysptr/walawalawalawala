<?php


class Kabkk extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Layout_m');
		$this->load->model('Kerja_m');
		$this->load->model('Alternative_m');
		$this->is_logged_in();
	}
	public function is_logged_in(){
		if (!isset($this->session->userdata['id'])) {
			echo "<script>alert('Sorry, kamu belum login !!! login please');window.location = '".base_url()."'</script>";
		}elseif ($this->session->userdata['id_level'] != "4"){
			echo "<script>alert('Sorry, kamu bukan KA. BKK');window.location = '".base_url()."'</script>";
		}
	}
	public function index(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();

		$this->load->view('kabkk/index', $data);
	}
	public function dunia_kerja(){
		$data['head'] = $this->Layout_m->head();
		$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
		$data['footer'] = $this->Layout_m->footer();
		$data['javascript'] = $this->Layout_m->javascript();
		$data['alternatives'] = $this->Alternative_m->getAll();
		$data['kerjas'] = $this->Kerja_m->getAll();

		$this->load->view('kabkk/kerja', $data);
	}
	public function do_dunia_kerja(){
		$id = $this->input->post('id');
		$jurusan = $this->input->post('jurusan');
		$tahun = $this->input->post('tahun');
		$bobot = $this->input->post('bobot');
		$kerja = $this->input->post('kerja');
		$wirausaha = $this->input->post('wirausaha');
		$blm_kerja = $this->input->post('blm_kerja');
		$kuliah = $this->input->post('kuliah');
		$total = $this->input->post('total');
		$tgl = date("Y-m-d H:i:s");

		$data = array(
			"id_jurusan" => $jurusan,
			"tahun" => $tahun,
			"bobot" => $bobot,
			"jml_kerja" => $kerja,
			"jml_wirausaha" => $wirausaha,
			"jml_blmkerja" => $blm_kerja,
			"jml_kuliah" => $kuliah,
			"total" => $total,
			"tgl_update" => $tgl
		);
		if($id == "" || $id == null){
			$exec = $this->Kerja_m->save($data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}else{
			$exec = $this->Kerja_m->edit($id, $data);
			if($exec){
				echo "TRUE";
			}else{
				echo "FALSE";
			}
		}
	}
	public function get_dunia_kerja($id){
		$data = $this->Kerja_m->getWhere($id);
		echo json_encode($data);
	}
	public function hapus_dunia_kerja($id){
		$this->Kerja_m->hapus($id);
		echo "TRUE";
	}
}
