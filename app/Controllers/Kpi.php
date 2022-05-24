<?php

namespace App\Controllers;

//use CodeIgniter\Controller;

use App\Models\ChangePass_Model;
use App\Models\DetailKpiModel;
use App\Models\ModelKpiAdmin;
use App\Models\DataKpiModel;
use App\Models\DataKpiButirModel;
use App\Models\UsersModel;
use App\Models\DataCapaianKpiModel;

class Kpi extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->DataCapaianKpiModel = new DataCapaianKpiModel();
	}
	public function index()
	{
		return view('/kpi/Dashboard');
	}

	public function rencana()
	{
		$listbutirkpi = new DataKpiButirModel();
		$data = [
			'tampildata' => $listbutirkpi->tampildatabutir()->getResult(),
			'sum' => $listbutirkpi->get_sum()->getResult()
		];
		return view('kpi/rencana', $data);
	}
	public function inputcapaian($kategori = null)
	{
		$listbutirkpi = new DataKpiButirModel();

		if ($kategori == null) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir()->getResult()
			];
			return view('kpi/form_capaian', $data);
		} elseif ($kategori == 1) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir1()->getResult()
			];
			return view('kpi/form_capaian1', $data);
		} elseif ($kategori == 2) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir2()->getResult()
			];
			return view('kpi/form_capaian2', $data);
		} elseif ($kategori == 3) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir3()->getResult()
			];
			return view('kpi/form_capaian3', $data);
		} elseif ($kategori == 4) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir4()->getResult()
			];
			return view('kpi/form_capaian4', $data);
		} elseif ($kategori == 5) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir5()->getResult()
			];
			return view('kpi/form_capaian5', $data);
		} elseif ($kategori == 6) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir6()->getResult()
			];
			return view('kpi/form_capaian6', $data);
		} elseif ($kategori == 7) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir7()->getResult()
			];
			return view('kpi/form_capaian7', $data);
		} elseif ($kategori == 8) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir8()->getResult()
			];
			return view('kpi/form_capaian8', $data);
		} elseif ($kategori == 9) {
			$data = [
				'tampildata' => $listbutirkpi->tampildatabutir9()->getResult()
			];
			return view('kpi/form_capaian9', $data);
		}
	}

	public function kesimpulan()
	{
		$listcapaiankpi = new DataCapaianKpiModel();
		$data = [
			'tampilcapaiankpi' => $listcapaiankpi->tampilcapaiankpi_user()->getResult(),
		];
		return view('kpi/grafik', $data);
	}

	public function kesimpulan_tabel()
	{
		$tabelcapaiankpi = new DataCapaianKpiModel();
		// $db      = \Config\Database::connect();
		// $builder = $db->table('tabel_capaian_kpi');
		$nama_prodi = session('nama_prodi');
		$data = [
			'tampiltabelkpi' => $tabelcapaiankpi->get_tabel(),
			//standar 1 per TA
			'hasilkpi1_18' => $tabelcapaiankpi->hitungkpi1_18($nama_prodi)->getResult(),
			'hasilkpi1_19' => $tabelcapaiankpi->hitungkpi1_19($nama_prodi)->getResult(),
			'hasilkpi1_20' => $tabelcapaiankpi->hitungkpi1_20($nama_prodi)->getResult(),
			'hasilkpi1_21' => $tabelcapaiankpi->hitungkpi1_21($nama_prodi)->getResult(),
			//standar 2 per TA
			'hasilkpi2_18' => $tabelcapaiankpi->hitungkpi2_18($nama_prodi)->getResult(),
			'hasilkpi2_19' => $tabelcapaiankpi->hitungkpi2_19($nama_prodi)->getResult(),
			'hasilkpi2_20' => $tabelcapaiankpi->hitungkpi2_20($nama_prodi)->getResult(),
			'hasilkpi2_21' => $tabelcapaiankpi->hitungkpi2_21($nama_prodi)->getResult(),
			//standar 3 per TA
			'hasilkpi3_18' => $tabelcapaiankpi->hitungkpi3_18($nama_prodi)->getResult(),
			'hasilkpi3_19' => $tabelcapaiankpi->hitungkpi3_19($nama_prodi)->getResult(),
			'hasilkpi3_20' => $tabelcapaiankpi->hitungkpi3_20($nama_prodi)->getResult(),
			'hasilkpi3_21' => $tabelcapaiankpi->hitungkpi3_21($nama_prodi)->getResult(),
			//standar 4 per TA
			'hasilkpi4_18' => $tabelcapaiankpi->hitungkpi4_18($nama_prodi)->getResult(),
			'hasilkpi4_19' => $tabelcapaiankpi->hitungkpi4_19($nama_prodi)->getResult(),
			'hasilkpi4_20' => $tabelcapaiankpi->hitungkpi4_20($nama_prodi)->getResult(),
			'hasilkpi4_21' => $tabelcapaiankpi->hitungkpi4_21($nama_prodi)->getResult(),
			//standar 5 per TA
			'hasilkpi5_18' => $tabelcapaiankpi->hitungkpi5_18($nama_prodi)->getResult(),
			'hasilkpi5_19' => $tabelcapaiankpi->hitungkpi5_19($nama_prodi)->getResult(),
			'hasilkpi5_20' => $tabelcapaiankpi->hitungkpi5_20($nama_prodi)->getResult(),
			'hasilkpi5_21' => $tabelcapaiankpi->hitungkpi5_21($nama_prodi)->getResult(),
			//standar 6 per TA
			'hasilkpi6_18' => $tabelcapaiankpi->hitungkpi6_18($nama_prodi)->getResult(),
			'hasilkpi6_19' => $tabelcapaiankpi->hitungkpi6_19($nama_prodi)->getResult(),
			'hasilkpi6_20' => $tabelcapaiankpi->hitungkpi6_20($nama_prodi)->getResult(),
			'hasilkpi6_21' => $tabelcapaiankpi->hitungkpi6_21($nama_prodi)->getResult(),
			//standar 7 per TA
			'hasilkpi7_18' => $tabelcapaiankpi->hitungkpi7_18($nama_prodi)->getResult(),
			'hasilkpi7_19' => $tabelcapaiankpi->hitungkpi7_19($nama_prodi)->getResult(),
			'hasilkpi7_20' => $tabelcapaiankpi->hitungkpi7_20($nama_prodi)->getResult(),
			'hasilkpi7_21' => $tabelcapaiankpi->hitungkpi7_21($nama_prodi)->getResult(),
			//standar 8 per TA
			'hasilkpi8_18' => $tabelcapaiankpi->hitungkpi8_18($nama_prodi)->getResult(),
			'hasilkpi8_19' => $tabelcapaiankpi->hitungkpi8_19($nama_prodi)->getResult(),
			'hasilkpi8_20' => $tabelcapaiankpi->hitungkpi8_20($nama_prodi)->getResult(),
			'hasilkpi8_21' => $tabelcapaiankpi->hitungkpi8_21($nama_prodi)->getResult(),
			//standar 9 per TA
			'hasilkpi9_18' => $tabelcapaiankpi->hitungkpi9_18($nama_prodi)->getResult(),
			'hasilkpi9_19' => $tabelcapaiankpi->hitungkpi9_19($nama_prodi)->getResult(),
			'hasilkpi9_20' => $tabelcapaiankpi->hitungkpi9_20($nama_prodi)->getResult(),
			'hasilkpi9_21' => $tabelcapaiankpi->hitungkpi9_21($nama_prodi)->getResult(),
			//jumlah nilai bobot KPI per TA
			'totalkpi18' => $tabelcapaiankpi->jmlkpi18($nama_prodi)->getResult(),
			'totalkpi19' => $tabelcapaiankpi->jmlkpi19($nama_prodi)->getResult(),
			'totalkpi20' => $tabelcapaiankpi->jmlkpi20($nama_prodi)->getResult(),
			'totalkpi21' => $tabelcapaiankpi->jmlkpi21($nama_prodi)->getResult(),
		];
		return view('kpi/grafik2', $data);
	}

	public function kesimpulan_grafik()
	{

		// $this->DataCapaianKpiModel = new DataCapaianKpiModel();
		$grafikcapaiankpi = new DataCapaianKpiModel();
		$nama_prodi = session('nama_prodi');
		//for ($i = 0; $i < count($id); $i++) {
		$data = [
			'tampilgrafikkpi' => $grafikcapaiankpi->get_grafik(),
			//standar 1 per TA
			'hasilkpi1_18' => $grafikcapaiankpi->hitungkpi1_18($nama_prodi)->getResultArray(),
			'hasilkpi1_19' => $grafikcapaiankpi->hitungkpi1_19($nama_prodi)->getResultArray(),
			'hasilkpi1_20' => $grafikcapaiankpi->hitungkpi1_20($nama_prodi)->getResultArray(),
			'hasilkpi1_21' => $grafikcapaiankpi->hitungkpi1_21($nama_prodi)->getResultArray(),
			//standar 2 per TA
			'hasilkpi2_18' => $grafikcapaiankpi->hitungkpi2_18($nama_prodi)->getResultArray(),
			'hasilkpi2_19' => $grafikcapaiankpi->hitungkpi2_19($nama_prodi)->getResultArray(),
			'hasilkpi2_20' => $grafikcapaiankpi->hitungkpi2_20($nama_prodi)->getResultArray(),
			'hasilkpi2_21' => $grafikcapaiankpi->hitungkpi2_21($nama_prodi)->getResultArray(),
			//standar 3 per TA
			'hasilkpi3_18' => $grafikcapaiankpi->hitungkpi3_18($nama_prodi)->getResultArray(),
			'hasilkpi3_19' => $grafikcapaiankpi->hitungkpi3_19($nama_prodi)->getResultArray(),
			'hasilkpi3_20' => $grafikcapaiankpi->hitungkpi3_20($nama_prodi)->getResultArray(),
			'hasilkpi3_21' => $grafikcapaiankpi->hitungkpi3_21($nama_prodi)->getResultArray(),
			//standar 4 per TA
			'hasilkpi4_18' => $grafikcapaiankpi->hitungkpi4_18($nama_prodi)->getResultArray(),
			'hasilkpi4_19' => $grafikcapaiankpi->hitungkpi4_19($nama_prodi)->getResultArray(),
			'hasilkpi4_20' => $grafikcapaiankpi->hitungkpi4_20($nama_prodi)->getResultArray(),
			'hasilkpi4_21' => $grafikcapaiankpi->hitungkpi4_21($nama_prodi)->getResultArray(),
			//standar 5 per TA
			'hasilkpi5_18' => $grafikcapaiankpi->hitungkpi5_18($nama_prodi)->getResultArray(),
			'hasilkpi5_19' => $grafikcapaiankpi->hitungkpi5_19($nama_prodi)->getResultArray(),
			'hasilkpi5_20' => $grafikcapaiankpi->hitungkpi5_20($nama_prodi)->getResultArray(),
			'hasilkpi5_21' => $grafikcapaiankpi->hitungkpi5_21($nama_prodi)->getResultArray(),
			//standar 6 per TA
			'hasilkpi6_18' => $grafikcapaiankpi->hitungkpi6_18($nama_prodi)->getResultArray(),
			'hasilkpi6_19' => $grafikcapaiankpi->hitungkpi6_19($nama_prodi)->getResultArray(),
			'hasilkpi6_20' => $grafikcapaiankpi->hitungkpi6_20($nama_prodi)->getResultArray(),
			'hasilkpi6_21' => $grafikcapaiankpi->hitungkpi6_21($nama_prodi)->getResultArray(),
			//standar 7 per TA
			'hasilkpi7_18' => $grafikcapaiankpi->hitungkpi7_18($nama_prodi)->getResultArray(),
			'hasilkpi7_19' => $grafikcapaiankpi->hitungkpi7_19($nama_prodi)->getResultArray(),
			'hasilkpi7_20' => $grafikcapaiankpi->hitungkpi7_20($nama_prodi)->getResultArray(),
			'hasilkpi7_21' => $grafikcapaiankpi->hitungkpi7_21($nama_prodi)->getResultArray(),
			//standar 8 per TA
			'hasilkpi8_18' => $grafikcapaiankpi->hitungkpi8_18($nama_prodi)->getResultArray(),
			'hasilkpi8_19' => $grafikcapaiankpi->hitungkpi8_19($nama_prodi)->getResultArray(),
			'hasilkpi8_20' => $grafikcapaiankpi->hitungkpi8_20($nama_prodi)->getResultArray(),
			'hasilkpi8_21' => $grafikcapaiankpi->hitungkpi8_21($nama_prodi)->getResultArray(),
			//standar 9 per TA
			'hasilkpi9_18' => $grafikcapaiankpi->hitungkpi9_18($nama_prodi)->getResultArray(),
			'hasilkpi9_19' => $grafikcapaiankpi->hitungkpi9_19($nama_prodi)->getResultArray(),
			'hasilkpi9_20' => $grafikcapaiankpi->hitungkpi9_20($nama_prodi)->getResultArray(),
			'hasilkpi9_21' => $grafikcapaiankpi->hitungkpi9_21($nama_prodi)->getResultArray(),


			// 'tampilgrafikkpi' => $this->DataCapaianKpiModel->get_grafik(),
		];
		//}
		return view('kpi/grafik3', $data);
	}



	public function form_ubahpass($id = null)
	{
		$model = new UsersModel();
		$username = session('username');
		$data['user'] = $model->where('id', $id)->first();
		return view('/kpi/ubah_pwd', $data);
	}
	public function ubahpwd()
	{
		$model = new UsersModel();
		$id = session('id');
		//exit();
		$data = [
			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
		];
		$save = $model->update($id, $data);

		if ($save) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Password anda telah berubah.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Password anda tidak berubah.
		</div>');
		}
		//print_r($save);
		//exit();


		return redirect()->to(base_url('kpi/form_ubahpass'));
	}

	public function savecapaian1()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getFile('uploadFile');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');


		//dd($upload_file);
		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			//$nilai_bobot[$i] = $realisasi[$i] * $bobot[$i / 100];
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $upload_file[$i],
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}


		return redirect()->to(base_url('kpi/inputcapaian/1'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}

	public function savecapaian2()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/2'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}

	public function savecapaian3()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/3'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}

	public function savecapaian4()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/4'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}

	public function savecapaian5()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/5'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}

	public function savecapaian6()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/6'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}

	public function savecapaian7()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/7'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}
	public function savecapaian8()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/8'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}

	public function savecapaian9()
	{
		$capaianmodel = new DataCapaianKpiModel();
		$db      = \Config\Database::connect();
		//$detail = $db->table('tabel_butir_kpi');
		$detail = $db->table('tabel_capaian_kpi');

		$id = $this->request->getPost('id');
		$realisasi = $this->request->getPost('txtRealisasi');
		$bobot = $this->request->getPost('bobot');
		$level = $this->request->getPost('level');
		$nama_prodi = $this->request->getPost('nama_prodi');
		$tahun_ajaran = $this->request->getPost('tahun_ajaran');
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
		}
		for ($i = 0; $i < count($id); $i++) {
			$data = [
				'level' => $level,
				'nama_prodi' => $nama_prodi,
				'tahun_ajaran' => $tahun_ajaran,
				'realisasi' => $realisasi[$i],
				'nilai_bobot' => $nilai_bobot[$i],
				//'upload_file' => $this->request->getPost('upload_file'),
				'idkpi' => $idkpi[$i],
				'id_butir_kpi' => $id[$i],
			];
			$save_capaian = $capaianmodel->simpancapaian($data);
		}
		if ($save_capaian) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
		}

		return redirect()->to(base_url('kpi/inputcapaian/9'));
		// echo "<br><br>";
		// print_r($nilai_bobot);
		// exit();
	}


	/*
	public function detail_keuangan()
	{
		$detail_keuangan = new DetailKpiModel();
		$data['detail_keuangan'] = $detail_keuangan->findAll();
		return view('kpi/detail/keuangan', $data);
	}
	public function detail_luarantridharma()
	{
		$detail_luarantridharma = new DetailKpiModel();
		$data['detail_luarantridharma'] = $detail_luarantridharma->findAll();
		return view('kpi/detail/luarantridharma', $data);
	}
	public function detail_mahasiswa()
	{
		$detail_mahasiswa = new DetailKpiModel();
		$data['detail_mahasiswa'] = $detail_mahasiswa->findAll();
		return view('kpi/detail/mahasiswa', $data);
	}
	public function detail_pendidikan()
	{
		$detail_pendidikan = new DetailKpiModel();
		$data['detail_pendidikan'] = $detail_pendidikan->findAll();
		return view('kpi/detail/pendidikan', $data);
	}
	public function detail_penelitian()
	{
		$detail_penelitian = new DetailKpiModel();
		$data['detail_penelitian'] = $detail_penelitian->findAll();
		return view('kpi/detail/penelitian', $data);
	}
	public function detail_pengembanganprog()
	{
		$detail_pengembanganprog = new DetailKpiModel();
		$data['detail_pengembanganprog'] = $detail_pengembanganprog->findAll();
		return view('kpi/detail/pengembanganprog', $data);
	}
	public function detail_pengmas()
	{
		$detail_pengmas = new DetailKpiModel();
		$data['detail_pengmas'] = $detail_pengmas->findAll();
		return view('kpi/detail/pengmas', $data);
	}
	public function detail_sdm()
	{
		$detail_sdm = new DetailKpiModel();
		$data['detail_sdm'] = $detail_sdm->findAll();
		return view('kpi/detail/sdm', $data);
	}
	public function detail_tatakelola()
	{
		$detail_tatakelola = new DetailKpiModel();
		$data['detail_tatakelola'] = $detail_tatakelola->findAll();
		return view('kpi/detail/tatakelola', $data);
	}
	public function detail_visimisi()
	{
		$detail_visimisi = new DetailKpiModel();
		$data['detail_visimisi'] = $detail_visimisi->findAll();
		return view('kpi/detail/visimisi', $data);
	}*/
}
