<?php
	date_default_timezone_set('Asia/Jakarta');
	class Admin extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Layout_m');
			$this->load->model('Level_m');
			$this->load->model('User_m');
			$this->load->model('Alternative_m');
			$this->load->model('Penghasilan_m');
			$this->is_logged_in();
		}
		public function is_logged_in(){
			if (!isset($this->session->userdata['id'])) {
				echo "<script>alert('Sorry, kamu belum login !!! login please');window.location = '".base_url()."'</script>";
			}elseif ($this->session->userdata['id_level'] != "1"){
				echo "<script>alert('Sorry, kamu bukan admin');window.location = '".base_url()."'</script>";
			}
		}
		public function index(){
			$data['head'] = $this->Layout_m->head();
			$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
			$data['footer'] = $this->Layout_m->footer();
			$data['javascript'] = $this->Layout_m->javascript();

			$this->load->view('admin/index', $data);
		}
		public function user(){
			$data['head'] = $this->Layout_m->head();
			$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
			$data['footer'] = $this->Layout_m->footer();
			$data['javascript'] = $this->Layout_m->javascript();
			$data['level'] = $this->Level_m->getAll();
			$data['users'] = $this->User_m->getAll();

			$this->load->view('admin/user', $data);
		}
		public function do_user(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$user = $this->input->post('user');
			$pass = md5($this->input->post('pass'));
			$level = $this->input->post('level');
			$tgl = date("Y-m-d H:i:s");

			$data = array(
				"nama" => $nama,
				"no_telp" => $telp,
				"email" => $email,
				"user" => $user,
				"password" => $pass,
				"id_level" => $level,
				"tgl_update" => $tgl
			);
			if($id == "" || $id == null){
				$exec = $this->User_m->save($data);
				if($exec){
					echo "TRUE";
				}else{
					echo "FALSE";
				}
			}else{
				$exec = $this->User_m->edit($id, $data);
				if($exec){
					echo "TRUE";
				}else{
					echo "FALSE";
				}
			}
		}
		public function get_user($id){
			$data = $this->User_m->getWhere($id);
			echo json_encode($data);
		}
		public function hapus_user($id){
			$this->User_m->hapus($id);
			echo "TRUE";
		}

		public function alternative(){
			$data['head'] = $this->Layout_m->head();
			$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
			$data['footer'] = $this->Layout_m->footer();
			$data['javascript'] = $this->Layout_m->javascript();
			$data['alternatives'] = $this->Alternative_m->getAll();

			$this->load->view('admin/alternative', $data);
		}
		public function do_alternative(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$kode = $this->input->post('kode');
			$tgl = date("Y-m-d H:i:s");

			$data = array(
				"nama" => $nama,
				"kode" => $kode,
				"tgl_update" => $tgl
			);
			if($id == "" || $id == null){
				$exec = $this->Alternative_m->save($data);
				if($exec){
					echo "TRUE";
				}else{
					echo "FALSE";
				}
			}else{
				$exec = $this->Alternative_m->edit($id, $data);
				if($exec){
					echo "TRUE";
				}else{
					echo "FALSE";
				}
			}
		}
		public function get_alternative($id){
			$data = $this->Alternative_m->getWhere($id);
			echo json_encode($data);
		}
		public function hapus_Alternative($id){
			$this->Alternative_m->hapus($id);
			echo "TRUE";
		}

		public function penghasilan(){
			$data['head'] = $this->Layout_m->head();
			$data['header'] = $this->Layout_m->header($this->session->userdata['level']);
			$data['footer'] = $this->Layout_m->footer();
			$data['javascript'] = $this->Layout_m->javascript();
			$data['penghasilans'] = $this->Penghasilan_m->getAll();

			$this->load->view('admin/penghasilan', $data);
		}
		public function do_penghasilan(){
			$id = $this->input->post('id');
			$range = $this->input->post('range');
			$bobot = $this->input->post('bobot');
			$tgl = date("Y-m-d H:i:s");

			$data = array(
				"ranges" => $range,
				"bobot" => $bobot,
				"tgl_update" => $tgl
			);
			if($id == "" || $id == null){
				$exec = $this->Penghasilan_m->save($data);
				if($exec){
					echo "TRUE";
				}else{
					echo "FALSE";
				}
			}else{
				$exec = $this->Penghasilan_m->edit($id, $data);
				if($exec){
					echo "TRUE";
				}else{
					echo "FALSE";
				}
			}
		}
		public function get_penghasilan($id){
			$data = $this->Penghasilan_m->getWhere($id);
			echo json_encode($data);
		}
		public function hapus_penghasilan($id){
			$this->Penghasilan_m->hapus($id);
			echo "TRUE";
		}
	}
