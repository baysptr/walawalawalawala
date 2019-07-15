<?php

class Auth extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
	}
	public function index(){
		$this->load->view('login');
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
				redirect(site_url().'wakasarpras');
			}

//			echo "<br/>ID_User: ".$data[0]['id'];
//			echo "<br/>Nama: ".$data[0]['nama'];
//			echo "<br/>ID_Level: ".$data[0]['id_level'];
//			echo "<br/>Kode Level: ".$data[0]['kode'];
//			echo "<br/>Nama Level: ".$data[0]['nama_level'];
		}else{
			echo "Maaf data anda tidak kami ketahui";
		}
	}
	public function do_logout(){
		$this->session->sess_destroy();

		redirect(base_url());
	}
}
