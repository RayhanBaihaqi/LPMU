<?php

namespace App\Controllers;
use App\Models\DetailRkatModel;
use App\Models\TahunAkademikModel;
use App\Models\PersenSerapModel;
use App\Models\PaguRkatModel;
use App\Models\UsersModel;
use App\Models\DataModel;

class Backend extends BaseController
{
	public function __construct()
    {
        $this->DetailRkatModel = new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
        $this->PaguModel = new PaguRkatModel();
        $this->UsersModel = new UsersModel();
    }
	public function index()
	{
		return view('layout');
	}
	public function rkat()
	{
		$model = new DetailRkatModel();
        $username = session('username');
		$data = [
			'pk' => $model->join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->where('aktif', '1')->join('user', 'user.id=pagu_rkat.id_user')->where('username', $username)->where('kategori', 'PK')->findAll(),
            'ops' => $model->join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->where('aktif', '1')->join('user', 'user.id=pagu_rkat.id_user')->where('username', $username)->where('kategori', 'OPS')->findAll(),
            'inv' => $model->join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->where('aktif', '1')->join('user', 'user.id=pagu_rkat.id_user')->where('username', $username)->where('kategori', 'INV')->findAll(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];
		return view('/rkat/Dashboard', $data);
	}
	/*public function kpi()
	{
		return view('/kpi/Dashboard');
	}*/
	//RKAT Koneksi
	public function detail_chart()
	{
		return view('/rkat/detail/detail_chart');
	}
	public function form()
	{
		return view('/rkat/form');
	}
	public function profil()
	{
		return view('/rkat/profil');
	}
	//KPI koneksi

	/*
	public function listadmin()
	{
		return view('/admin/ListAdmin');
	}
	public function inputkpi()
	{
		return view('kpi/formkpi');
	}
	public function detail_keuangan()
	{
		return view('kpi/detail/keuangan');
	}
	public function detail_luarantridharma()
	{
		return view('kpi/detail/luarantridharma');
	}
	public function detail_mahasiswa()
	{
		return view('kpi/detail/mahasiswa');
	}
	public function detail_pendidikan()
	{
		return view('kpi/detail/pendidikan');
	}
	public function detail_penelitian()
	{
		return view('kpi/detail/penelitian');
	}
	public function detail_pengembanganprog()
	{
		return view('kpi/detail/pengembanganprog');
	}
	public function detail_pengmas()
	{
		return view('kpi/detail/pengmas');
	}
	public function detail_sdm()
	{
		return view('kpi/detail/sdm');
	}
	public function detail_tatakelola()
	{
		return view('kpi/detail/tatakelola');
	}
	public function detail_visimisi()
	{
		return view('kpi/detail/visimisi');
	}
	*/
}
