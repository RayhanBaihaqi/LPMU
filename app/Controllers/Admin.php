<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataKpiModel;


class Admin extends BaseController
{
    public function index()
    {
        return view('admin/Dashboard');
    }

    public function listbutirkpi()
    {
        $listbutirkpi = new DataKpiModel();
        $data = [
            'tampildata' => $listbutirkpi->tampildata()->getResult()
        ];
        echo view('/admin/ListKpiButir', $data);
    }
    public function form_tambahkpi()
    {
        return view('/admin/TambahKpi');
    }
    public function form_tambahbutirkpi()
    {
        return view('/admin/TambahButirKpi');
    }
    public function form_ubahkpi()
    {
        return view('/admin/UbahKpi');
    }


    //proses
    public function tambahkpi()
    {
    }
    public function ubahkpi()
    {
    }
    public function hapuskpi()
    {
    }
}
