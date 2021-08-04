<?php

namespace App\Controllers;

use App\Models\DataModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/Dashboard');
    }

    public function adminkpi()
    {
        return view('/admin/AdminKpi');
    }
}
