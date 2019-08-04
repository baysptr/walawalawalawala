<?php
date_default_timezone_set("Asia/Jakarta");
class Auth extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
	}
	public function index(){
		$this->load->view('login');
	}
	public function daftar(){
		$this->load->view('daftar');
	}
	public function do_login(){
		$user = $this->input->post('user');
		$pass = md5($this->input->post('pass'));
		$my_data = $this->Auth_m->getData($user, $pass);
//		print_r($my_data);
		if($my_data->num_rows() > 0){
			$data = $my_data->result_array();

			$dt_session = array(
				"id" =>  $data[0]['id'],
				"nama" => $data[0]['nama'],
				"id_level" => $data[0]['id_level'],
				"kode_level" => $data[0]['kode'],
				"level" => $data[0]['nama_level']
			);
			$this->session->set_userdata($dt_session);
			if($data[0]['id_level'] == '1'){
				redirect(site_url().'admin');
			}else if($data[0]['id_level'] == '2'){
				redirect(site_url().'wakakur');
			}else if($data[0]['id_level'] == '3'){
				redirect(site_url().'kakom');
			}else if($data[0]['id_level'] == '4'){
				redirect(site_url().'kabkk');
			}else if($data[0]['id_level'] == '5'){
				redirect(site_url().'sarpras');
			}else if($data[0]['id_level'] == '6'){
				redirect(site_url().'guest');
			}
		}else{
			echo "<script>alert('Maaf data yang anda masukan tidak kami ketahui!');window.location='".site_url()."auth';</script>";
		}
	}
	public function do_logout(){
		$this->session->sess_destroy();

		redirect(base_url());
	}

	public function do_daftar(){
		$data = array(
			"nama" => $this->input->post('nama'),
			"no_telp" => $this->input->post('telp'),
			"email" => $this->input->post('email'),
			"user" => $this->input->post('user'),
			"password" => md5($this->input->post('pass')),
			"id_level" => "6",
			"tgl_update" => date("Y-m-d H:i:s"),
		);
		$sql = $this->Auth_m->save($data);
		if($sql){
			echo "<script>alert('Login berhasil, Silahkan anda login');window.location='".site_url()."auth';</script>";
		}else{
			echo "<script>alert('Maaf anda gagal mendaftar, mohon hubungi admin');window.location='".site_url()."auth/daftar';</script>";
		}
	}
}
