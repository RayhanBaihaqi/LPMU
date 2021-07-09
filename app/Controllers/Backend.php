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
}
