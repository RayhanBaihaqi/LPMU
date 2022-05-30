<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataKpiModel;
use App\Models\DataKpiButirModel;
use App\Models\DataCapaianKpiModel;
use App\Models\DetailRkatModel;
use App\Models\TahunAkademikModel;
use App\Models\PersenSerapModel;
use App\Models\PaguRkatModel;
use App\Models\ModelKpiAdmin;
use App\Models\UsersModel;


class Admin extends BaseController
{
    public function __construct()
    {
        $this->DetailRkatModel = new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
        $this->PaguModel = new PaguRkatModel();
        $this->UsersModel = new UsersModel();
        $this->ModelKpiAdmin = new ModelKpiAdmin();
    }

    public function index()
    {
        return view('admin/Dashboard');
    }

    //Proses RKAT 
    public function listRkatProdi()
    {
        $model = new DetailRkatModel();
        $data = [
            'detail_rkat' => $this->DetailRkatModel->gabungRektor(),
            'userprodi' => $this->UsersModel->where('level', 'prodi')->findAll(),
        ];
        $data['detail_rkat'] = $this->DetailRkatModel->gabungRektor();
        echo view('/admin/ListRkatProdi', $data);
    }
    public function listRkatUnit()
    {
        $model = new DetailRkatModel();
        $data = [
            'detail_rkat' => $this->DetailRkatModel->gabungRektor(),
            'userunit' => $this->UsersModel->where('level', 'unit')->findAll(),
        ];
        echo view('/admin/ListRkatUnit', $data);
    }
    public function create()
    {
        $model = new UsersModel();
        $model2 = new PaguRkatModel();
        $data = [
            'user' => $model->orderBy('id', 'DESC')->findAll(),
            'pagu' => $model2->join('user', 'user.id=pagu_rkat.id_user')-> join('tahun_akademik', 'tahun_akademik.id_tahun=pagu_rkat.id_tahun')->where('aktif', '1')->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];
        return view('admin/inputData', $data);
    }
    public function save()
    {
        $jumlah = $this->request->getVar('jumlah');
        $kategori = $this->request->getVar('kategori');
        $anggaranGenap = $this->request->getVar('anggaranGenap');
        $anggaranGanjil = $this->request->getVar('anggaranGanjil');
        $no_kegiatan = $this->request->getVar('no_kegiatan');
        $indikator = $this->request->getVar('indikator');
        $kpi = $this->request->getVar('kpi');
        $butir = $this->request->getVar('butir');
        $target = $this->request->getVar('target');
        $nama_kegiatan = $this->request->getVar('nama_kegiatan');
        $total = $this->request->getVar('total');
        $id_pagu = $this->request->getVar('id_pagu');
        $id_tahun = $this->request->getVar('id_tahun');
        $id_user = $this->request->getVar('id_user');
        //print_r($id_set); die();
        for ($i = 0; $i <= $jumlah; $i++) {
            $this->DetailRkatModel->insert([
                'kategori' => $kategori[$i],
                'anggaranGenap' => $anggaranGenap[$i],
                'anggaranGanjil' => $anggaranGanjil[$i],
                'no_kegiatan' => $no_kegiatan[$i],
                'indikator' => $indikator[$i],
                'kpi' => $kpi[$i],
                'butir' => $butir[$i],
                'target' => $target[$i],
                'nama_kegiatan' => $nama_kegiatan[$i],
                'total' => $total[$i],
                'id_tahun' => $id_tahun,
                'id_pagu' => $id_pagu,
                'id_user' => $id_user,
            ]);
        }
        return redirect()->to(base_url('admin/createbyadmin'))->with('status', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
    }
    public function edit($id_rkat = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id_rkat', $id_rkat)->first();
        // print_r($data);exit();

        return view('/admin/EditRkat', $data);
    }
    public function update()
    {
        $model = new DetailRkatModel();
        $id = $this->request->getVar('id');

        $data = [
            'kategori' => $this->request->getVar('kategori'),
            'anggaranGenap' => $this->request->getVar('anggaranGenap'),
            'anggaranGanjil' => $this->request->getVar('anggaranGanjil'),
            'no_kegiatan' => $this->request->getVar('no_kegiatan'),
            'indikator' => $this->request->getVar('indikator'),
            'kpi' => $this->request->getVar('kpi'),
            'butir' => $this->request->getVar('butir'),
            'target' => $this->request->getVar('target'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'total' => $this->request->getVar('total'),
            'id_set' => $this->request->getVar('id_set'),
            'tahunAkademik' => $this->request->getVar('tahunAkademik'),
            'serapGanjil' => $this->request->getVar('serapGanjil'),
            'serapGenap' => $this->request->getVar('serapGenap'),
            'totalSerap' => $this->request->getVar('totalSerap'),
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('admin/indexbyadmin'));
    }
    public function delete($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('admin/indexbyadmin'));
    }
    public function grafikSerap()
    {
        $model = new PersenSerapModel();
        $username = session('username');
		$data = [
			'tahun' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->findAll(),
            'tahunAktif' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
			'seluruhDataUserProdi' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->findAll(),
            'seluruhDataUserUnit' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->findAll(),
            'seluruhDataUserRektorat' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('level', 'rektorat')->findAll(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];
        return view('/admin/GrafikSerap', $data);
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
        $listcapaiankpi = new DataCapaianKpiModel();
        $data = [
            'tampilcapaiankpi' => $listcapaiankpi->tampilcapaiankpi()->getResult(),
        ];
        echo view('/admin/ListCapaianKpi', $data);
    }

    //RKAT


}
