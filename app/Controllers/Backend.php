<?php

namespace App\Controllers;

class Backend extends BaseController
{
	public function index()
	{
		return view('layout');
	}
	public function rkat()
	{
		return view('/rkat/Dashboard');
	}
	public function kpi()
	{
		return view('/kpi/Dashboard');
	}
<<<<<<< HEAD
	//RKAT Koneksi
	public function detail_chart()
	{
		return view('/rkat/detail/detail_chart');
	}
	public function form()
	{
		return view('/rkat/form');
	}

	//KPI koneksi
=======
	public function admin()
	{
		return view('/admin/Dashboard');
	}
	public function listadmin()
	{
		return view('/admin/ListAdmin');
	}
>>>>>>> dd279302aa7b02a1816c64628c6e20ad7bb631da
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
