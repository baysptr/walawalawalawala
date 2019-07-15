<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Layout_m');
	}

//	public function index()
//	{
//		$data['head'] = $this->Layout_m->head();
//		$data['header'] = $this->Layout_m->header();
//		$data['footer'] = $this->Layout_m->footer();
//		$data['javascript'] = $this->Layout_m->javascript();
//
//		$this->load->view('welcome_message', $data);
//	}

	public function index(){
		$this->load->view('login');
	}
}
