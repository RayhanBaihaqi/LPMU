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
		return view('kpi/grafik');
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
		//$upload_file = $this->request->getPost('upload_file');
		$idkpi = $this->request->getPost('idkpi');
		$id_butir_kpi = $this->request->getPost('id_butir_kpi');

		$nilai_bobot = array();
		for ($i = 0; $i < count($id); $i++) {
			$nilai_bobot[$i] = $realisasi[$i] * $bobot[$i / 100];
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
			$nilai_bobot[$i] = ((int)$realisasi[$i] * (float)$bobot[$i] / 100);
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
				'id_butir_kpi' => $id_butir_kpi[$i],
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
