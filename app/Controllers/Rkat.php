<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;

class Rkat extends BaseController
{
    public function index()
    {
        $model = new DetailRkatModel();

        $data['detail_rkat'] = $model->orderBy('id','DESC')->findAll();

        return view('rkat/form', $data);

    }
    public function create() {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->orderBy('id','ASC')->findAll();
        return view('rkat/form', $data);
    }
    public function store()
	{
		$model = new DetailRkatModel();
		$data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'jenis_biaya' => $this->request->getVar('jenis_biaya'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'jenis_kpi' => $this->request->getVar('jenis_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
		];
		$model->save($data);
		return redirect()->to(base_url('rkat/index'))->with('status', 'Data Berhasil ditambah');
	}
    public function edit($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->first();

        return view('/admin/Editdetail_rkats',$data);
    }
    public function update() {
        $model = new DetailRkatModel();
        $id = $this->request->getVar('id');

        $data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'jenis_biaya' => $this->request->getVar('jenis_biaya'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'jenis_kpi' => $this->request->getVar('jenis_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('rkat/index'));
    }
    public function delete($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('rkat/index'));
    }


    //admin
    public function indexbyadmin()
    {
        $model = new DetailRkatModel();

        $data['detail_rkat'] = $model->orderBy('id','DESC')->findAll();

        return view('admin/ListRkat', $data);

    }
    public function createbyadmin() {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->orderBy('id','ASC')->findAll();
        return view('admin/form_tambah_rkat', $data);
    }
    public function seve()
	{
		$model = new DetailRkatModel();
		$data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'jenis_biaya' => $this->request->getVar('jenis_biaya'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'jenis_kpi' => $this->request->getVar('jenis_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
            'pagu' => $this->request->getVar('pagu'),
            'butir' => $this->request->getVar('butir'),
            'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'semester' => $this->request->getVar('semester'),
		];
		$model->save($data);
		return redirect()->to(base_url('rkat/createbyadmin'))->with('status', 'Data Berhasil ditambah');
	}
    public function editbyadmin($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->first();

        return view('/admin/EditRkat',$data);
    }
    public function updatebyadmin() {
        $model = new DetailRkatModel();
        $id = $this->request->getVar('id');

        $data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'jenis_biaya' => $this->request->getVar('jenis_biaya'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'jenis_kpi' => $this->request->getVar('jenis_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
            'pagu' => $this->request->getVar('pagu'),
            'butir' => $this->request->getVar('butir'),
            'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'semester' => $this->request->getVar('semester'),
        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('rkat/indexbyadmin'));
    }
    public function deletebyadmin($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('rkat/indexbyadmin'));
    }
}
