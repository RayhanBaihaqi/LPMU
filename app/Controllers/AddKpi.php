<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SetRkatModel;
use App\Models\UsersModel;
use App\Models\AuthModel;

class SetRkat extends BaseController
{
    public function __construct(){
        $this->SetRkatModel= new SetRkatModel();
    }
    public function indexbyuser()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $this->DetailRkatModel->gabung();

        return view('rkat/ListData', $data);
    }
    public function createbyuser() {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->orderBy('id','ASC')->findAll();
        return view('rkat/inputData', $data);
    }
    public function save()
	{
		$nama_kegiatan = $this->request->getVar('nama_kegiatan');
        $semester = $this->request->getVar('semester');
        $anggaran = $this->request->getVar('anggaran');
        $keterangan = $this->request->getVar('keterangan');
        $jenis_kpi = $this->request->getVar('jenis_kpi');
        $jenis_anggaran = $this->request->getVar('jenis_anggaran');
        $butir = $this->request->getVar('butir');
        $id_set = $this->request->getVar('id_set');
        $jumlah = $this->request->getVar('jumlah');

            for ($i=0; $i < $jumlah; $i++) { 
                $this->DetailRkatModel->insert([
                    'nama_kegiatan'=>$nama_kegiatan[$i],
                    'semester'=>$semester[$i],  
                    'anggaran'=>$anggaran[$i],  
                    'keterangan'=>$keterangan[$i],  
                    'jenis_kpi'=>$jenis_kpi[$i],  
                    'jenis_anggaran'=>$jenis_anggaran[$i],  
                    'butir'=>$butir[$i],  
                    'id_set'=>$id_set[$i],  
                ]);
            }
		return redirect()->to(base_url('setrkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
	}
    public function editbyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->first();

        return view('rkat/EditDataRkat',$data);
    }
    public function updatebyuser() {
        $model = new DetailRkatModel();
        $id = $this->request->getVar('id');
        $data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'semester' => $this->request->getVar('semester'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'jenis_kpi' => $this->request->getVar('jenis_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
            'butir' => $this->request->getVar('butir'),
            'id_set' => $this->request->getVar('id_set'),

        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('rkat/indexbyuser'));
    }
    public function deletebyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('rkat/indexbyuser'));
    }
    // admin
    public function createkpi() {
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 

        return view('admin/tambahRkat', $data);
    }
    public function tambahbyadmin()
	{
        $model = new SetRkatModel();
        $username = session('username');
        // $data = [
        //     'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        // ]; 
		return view('admin/InputData');
	}
}