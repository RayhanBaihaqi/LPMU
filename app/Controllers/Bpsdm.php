<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataKpiModel;
use App\Models\DataKpiButirModel;
use App\Models\DataCapaianKpiModel;


class Bpsdm extends BaseController
{

    public function index()
    {
        return view('bpsdm/Dashboard');
    }
}
