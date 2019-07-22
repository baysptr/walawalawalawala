<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Kelulusan_m');
		$this->load->model('Kerja_m');
		$this->load->model('Sarpras_m');
	}

	public function index(){
		$data['kelulusans'] = $this->Kelulusan_m->getAll();
		$data['kerjas'] = $this->Kerja_m->getAll();
		$data['saranas'] = $this->Sarpras_m->getAll();
		$this->load->view('home', $data);
	}
}
