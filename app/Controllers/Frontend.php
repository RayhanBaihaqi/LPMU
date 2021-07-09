<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Frontend extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function register()
	{
		session();
		$data = [
			'validate' => \Config\Services::validation(),
		];
		return view('register', $data);
	}
}
