<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DetailKpiModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/Dashboard');
    }

    public function adminkpi()
    {
        $adminkpi = new DetailKpiModel();
        $data['adminkpi'] = $adminkpi->findAll();
        return view('/admin/AdminKpi', $data);
    }

    public function tambahkpi()
    {
        return view('/admin/TambahKpi');
    }

    public function tambahbutirkpi()
    {
        return view('/admin/TambahButirKpi');
    }

    public function listbutirkpi()
    {
        return view('/admin/ListKpiButir');
    }

    public function editadminkpi($id = null)
    {
        $model = new DetailKpiModel();
        $data['detail_kpi'] = $model->where('id', $id)->first();
        return view('/admin/EditKpi', $data);
    }
    public function updateadminkpi()
    {
        $model = new DetailKPIModel();
        $id = $this->request->getVar('id');

        $data = [
            'tahun_akademik' => $this->request->getPost('tahun_akademik'),
            'prodi_unit' => $this->request->getPost('prodi_unit'),
            'nama_prodi_unit' => $this->request->getPost('nama_prodi_unit'),
            'nama_kpi' => $this->request->getPost('nama_kpi'),
            'nama_butir' => $this->request->getPost('nama_butir'),
            'pic' => $this->request->getPost('pic'),
            'nama_pic' => $this->request->getPost('nama_pic'),
            'rencana_realisasi' => $this->request->getPost('rencana_realisasi'),
            'ketercapaian' => $this->request->getPost('ketercapaian'),
            'skor' => $this->request->getPost('skor'),
            'file' => $this->request->getPost('file'),
            'created_at' => $this->request->getPost('created_at')
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('admin/AdminKPI'));
    }
    public function deleteadminkpi($id = null)
    {
        $model = new DetailKpiModel();
        $data['detail_kpi'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('admin/AdminKPI'));
    }
}
