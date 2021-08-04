<?php

namespace App\Controllers;

//use CodeIgniter\Controller;
use App\Models\DetailKpiModel;

class Kpi extends BaseController
{
	
	public function index()
	{
		return view('/kpi/Dashboard');
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
}
