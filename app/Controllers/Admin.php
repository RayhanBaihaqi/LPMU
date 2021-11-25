<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataKpiModel;
use App\Models\DataKpiButirModel;


class Admin extends BaseController
{
    public function index()
    {
        return view('admin/Dashboard');
    }
    public function listkpi()
    {
        $listkpi = new DataKpiModel();
        $data = [
            'tampildata' => $listkpi->tampildata()->getResult()
        ];
        echo view('/admin/ListKpi', $data);
    }
    public function listbutirkpi()
    {
        $listbutirkpi = new DataKpiButirModel();
        $data = [
            'tampildata' => $listbutirkpi->tampildatabutir()->getResult()
        ];
        echo view('/admin/ListKpiButir', $data);
    }
    public function listcapaiankpi()
    {

        echo view('/admin/ListCapaianKpi');
    }
    public function form_tambahkpi()
    {
        helper('form');
        return view('/admin/TambahKpi');
    }
    public function form_tambahbutirkpi()
    {
        helper('form');
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

    public function simpankpi()
    {
        $data = [
            'nama_kpi' => $this->request->getpost('nama_kpi'),
        ];
        $listkpi = new DataKpiModel();
        $save = $listkpi->save1($data);

        if ($save) {
            return redirect()->to('/admin/listkpi');
        }
    }
    public function ubahkpi()
    {
    }
    public function hapuskpi()
    {
    }
    public function tambahbutirkpi()
    {
    }
    public function simpanbutirkpi()
    {
        $data = [
            'idkpi' => $this->request->getpost('idkpi'),
            'angka_butir' => $this->request->getpost('angka_butir'),
            'nama_butir' => $this->request->getpost('nama_butir'),
            'unit_utama' => $this->request->getpost('unit_utama'),
            'unit_pendukung' => $this->request->getpost('unit_pendukung'),
            'target' => $this->request->getpost('target'),
            'kategori' => $this->request->getpost('kategori'),
            'kegiatan' => $this->request->getpost('kegiatan'),
            'bobot' => $this->request->getpost('bobot'),
        ];
        $listbutirkpi = new DataKpiButirModel();
        $simpan = $listbutirkpi->simpan($data);

        if ($simpan) {
            return redirect()->to('/admin/listbutirkpi');
        }
    }
    public function ubahbutirkpi()
    {
    }
    public function hapusbutirkpi()
    {
    }
}
