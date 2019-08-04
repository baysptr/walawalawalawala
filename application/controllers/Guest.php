<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Guest extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Kelulusan_m');
		$this->load->model('Kerja_m');
		$this->load->model('Sarpras_m');
		$this->load->model('Penghasilan_m');
		$this->load->model('Peminatan_m');
		$this->load->model('Bobot_m');
		$this->load->model('Summary_m');
	}

	public function index(){
		$data['kelulusans'] = $this->Kelulusan_m->getAll();
		$data['kerjas'] = $this->Kerja_m->getAll();
		$data['saranas'] = $this->Sarpras_m->getAll();
		$data['penghasilans'] = $this->Penghasilan_m->getAll();
		$data['peminatan'] = $this->Peminatan_m->getRand();
		$this->load->view('guest', $data);
	}

	public function do_peminatan(){
		$peminatan = $this->input->post('pernyataan');
		$akl = 0; $otkp = 0; $bdp = 0; $tkj = 0; $mm = 0;
		for($i=0;$i<12;$i++){
			$initial_data = $this->Peminatan_m->getWherePeminatan($peminatan[$i]);
			if($initial_data->id_jurusan == "1"){
				$akl += $initial_data->bobot;
			}elseif($initial_data->id_jurusan == "5"){
				$otkp += $initial_data->bobot;
			}elseif($initial_data->id_jurusan == "6"){
				$bdp += $initial_data->bobot;
			}elseif($initial_data->id_jurusan == "7"){
				$tkj += $initial_data->bobot;
			}elseif($initial_data->id_jurusan == "8"){
				$mm += $initial_data->bobot;
			}else{
				return 0;
			}
		}
		$bobot_penghasilan = $this->cariPenghasilan($this->input->post('penghasilan'));

		$bobot_mat = $this->mapel_bobot($this->input->post('mat'));
		$bobot_tik = $this->mapel_bobot($this->input->post('tik'));
		$bobot_inggris = $this->mapel_bobot($this->input->post('inggris'));
		$bobot_desain = $this->mapel_bobot($this->input->post('desain'));
		$bobot_indo = $this->mapel_bobot($this->input->post('indo'));
		$total_bobot_mapel = $bobot_mat+$bobot_tik+$bobot_inggris+$bobot_desain+$bobot_indo;

		$bobot_akl = $this->cariPeminatan($akl);
		$bobot_otkp = $this->cariPeminatan($otkp);
		$bobot_bdp = $this->cariPeminatan($bdp);
		$bobot_tkj = $this->cariPeminatan($tkj);
		$bobot_mm = $this->cariPeminatan($mm);
		$total_bobot_peminatan = $bobot_akl+$bobot_otkp+$bobot_bdp+$bobot_tkj+$bobot_mm;

		$hitung_akl = $this->hitungNotFinal($bobot_akl,$bobot_penghasilan, $total_bobot_mapel);
		$hitung_otkp = $this->hitungNotFinal($bobot_otkp,$bobot_penghasilan, $total_bobot_mapel);
		$hitung_bdp = $this->hitungNotFinal($bobot_bdp,$bobot_penghasilan, $total_bobot_mapel);
		$hitung_tkj = $this->hitungNotFinal($bobot_tkj,$bobot_penghasilan, $total_bobot_mapel);
		$hitung_mm = $this->hitungNotFinal($bobot_mm,$bobot_penghasilan, $total_bobot_mapel);
		$total_hitung_bobot = $hitung_akl+$hitung_otkp+$hitung_bdp+$hitung_tkj+$hitung_mm;

		$kd_summary = $this->Summary_m->getCount();
		$id = (int)$kd_summary+1;
		$kode = "PJSK".$id;
		$tgl = date("Y-m-d H:i:s");

		$data = array(
			"kode" => $kode,
			"akl" => $this->hitungFinal($hitung_akl, $total_hitung_bobot),
			"otkp" => $this->hitungFinal($hitung_otkp, $total_hitung_bobot),
			"bdp" => $this->hitungFinal($hitung_bdp, $total_hitung_bobot),
			"tkj" => $this->hitungFinal($hitung_tkj, $total_hitung_bobot),
			"mm" => $this->hitungFinal($hitung_mm, $total_hitung_bobot),
			"tgl_update" => $tgl
		);
		$this->Summary_m->save($data);

		echo json_encode($data);

//		echo "<br/>AKL: " . $hitung_akl . " = ".$this->hitungFinal($hitung_akl, $total_hitung_bobot);
//		echo "<br/>OTKP: " . $hitung_otkp . " = ".$this->hitungFinal($hitung_otkp, $total_hitung_bobot);
//		echo "<br/>BDP: " . $hitung_bdp. " = ".$this->hitungFinal($hitung_bdp, $total_hitung_bobot);
//		echo "<br/>TKJ: " . $hitung_tkj. " = ".$this->hitungFinal($hitung_tkj, $total_hitung_bobot);
//		echo "<br/>MM: " . $hitung_mm. " = ".$this->hitungFinal($hitung_mm, $total_hitung_bobot);
//		echo "<br/>Total: " .$total_hitung_bobot;
	}

	public function hitungFinal($peminatan, $total){
		$pertama = $peminatan/$total;
		$data = $pertama*100;
		return round($data);
	}

	public function hitungNotFinal($peminatan, $penghasilan, $total_mapel){
		$hitung = round($peminatan);
		$data = $hitung+$penghasilan+$total_mapel;
		return $data;
	}

	public function cariPeminatan($peminatan){
		$data_kriteria = $this->Bobot_m->getAll();
		$com_peminatan = (float)$data_kriteria[0]['bobot'];
		$data = (double)$peminatan * (double)$com_peminatan;
		return round($data);
	}

	public function cariPenghasilan($id){
		$data_penghasilan = $this->Penghasilan_m->getWhere($id);
		$bobot_penghasilan = $data_penghasilan->bobot;
		$data_kriteria = $this->Bobot_m->getAll();
		$com_penghasilan = (float)$data_kriteria[1]['bobot'];
		$hasil = (double)$bobot_penghasilan * (double)$com_penghasilan;
		return round($hasil);
	}

	function ambilKerja($level){
		$intialize = $this->Kerja_m->getWhere($level);
		$data_kriteria = $this->Bobot_m->getAll();
		$com_penghasilan = (float)$data_kriteria[3]['bobot'];
		$data = (double)$intialize->bobot * (double)$com_penghasilan;
		return round($data);
	}

	function ambilKelulusan($level){
		$intialize = $this->Kelulusan_m->getWhere($level);
		$data_kriteria = $this->Bobot_m->getWhere(5);
		$com_penghasilan = (float)$data_kriteria[2]['bobot'];
		$data = (double)$intialize->bobot * (double)$com_penghasilan;
		return round($data);
	}

	public function mapel_bobot($mapel){
		if($mapel > 0 && $mapel < 25){
			return round(1 * 0.15);
		}elseif($mapel > 25 && $mapel < 50){
			return round(2 * 0.15);
		}elseif($mapel > 50 && $mapel < 75){
			return round(3 * 0.15);
		}elseif($mapel > 75 && $mapel < 100){
			return round(4 * 0.15);
		}else{
			return 0;
		}
	}

	public function get_kode(){
		$data = $this->Summary_m->getKode($this->input->post('kode'));
		echo json_encode($data);
	}
}
