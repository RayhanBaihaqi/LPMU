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



    //proses kpi
    public function form_tambahkpi()
    {
        helper('form');
        return view('/admin/TambahKpi');
    }
    public function simpankpi()
    {
        $data = [
            'idkpi' => $this->request->getpost('idkpi'),
            'nama_kpi' => $this->request->getpost('nama_kpi'),
        ];
        $listkpi = new DataKpiModel();
        $save = $listkpi->simpankpi($data);

        if ($save) {
            return redirect()->to('/admin/listkpi');
        }
    }
    public function form_updatekpi($idkpi)
    {
        helper('form');
        $listkpi = new DataKpiModel();
        $ambildatakpi = $listkpi->ambildatakpi($idkpi);
        if (count($ambildatakpi->getResult()) > 0) {
            $row = $ambildatakpi->getRow();
            $data = [
                'idkpi' => $idkpi,
                'nama_kpi' => $row->nama_kpi,
            ];
            echo view('admin/UpdateKpi', $data);
        }
    }

    public function updatekpi()
    {
        $idkpi = $this->request->getpost('idkpi');
        $data = [
            'nama_kpi' => $this->request->getpost('nama_kpi'),
        ];
        $listkpi = new DataKpiModel();
        $update1 = $listkpi->update1($data, $idkpi);

        if ($update1) {
            return redirect()->to('/admin/listkpi');
        }
    }
    public function hapuskpi($idkpi)
    {
        $listkpi = new DataKpiModel();
        $listkpi->hapuskpi($idkpi);
        return redirect()->to('/admin/listkpi');
    }

    //proses butir kpi
    public function listbutirkpi()
    {
        $listbutirkpi = new DataKpiButirModel();
        $data = [
            'tampildata' => $listbutirkpi->tampildatabutir()->getResult(),
            'sum' => $listbutirkpi->get_sum()->getResult()
        ];
        echo view('/admin/ListKpiButir', $data);
    }
    public function form_tambahbutirkpi()
    {
        helper('form');
        return view('/admin/TambahButirKpi');
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
        $simpan = $listbutirkpi->simpankpibutir($data);

        if ($simpan) {
            return redirect()->to('/admin/listbutirkpi');
        }
    }

    public function form_updatebutirkpi($id)
    {
        helper('form');
        $listbutirkpi = new DataKpiButirModel();
        $ambildatabutir = $listbutirkpi->ambildatabutir($id);
        if (count($ambildatabutir->getResult()) > 0) {
            $row = $ambildatabutir->getRow();
            $data = [
                'id' => $id,
                'idkpi' => $row->idkpi,
                'angka_butir' => $row->angka_butir,
                'nama_butir' => $row->nama_butir,
                'unit_utama' => $row->unit_utama,
                'unit_pendukung' => $row->unit_pendukung,
                'target' => $row->target,
                'kategori' => $row->kategori,
                'kegiatan' => $row->kegiatan,
                'bobot' => $row->bobot,
            ];
            echo view('admin/UpdateButirKpi', $data);
        }
    }
    public function updatebutirkpi()
    {
        $id = $this->request->getpost('id');
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
        $update2 = $listbutirkpi->update2($data, $id);

        if ($update2) {
            return redirect()->to('/admin/listbutirkpi');
        }
    }

    public function hapusbutirkpi($id)
    {
        $listbutirkpi = new DataKpiButirModel();
        $listbutirkpi->hapuskpibutir($id);
        return redirect()->to('/admin/listbutirkpi');
    }

    //proses list capaian kpi
    public function listcapaiankpi()
    {

        echo view('/admin/ListCapaianKpi');
    }
}
