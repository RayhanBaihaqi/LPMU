<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\TahunAkademikModel;
use App\Models\PersenSerapModel;

class TahunAkademik extends BaseController
{
    public function __construct(){
        $this->DetailRkatModel= new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
    }
    
    //user capaian rkat
    public function indextahun()
    {
        $data = [
			'tahun_Akademik' => $this->TahunAkademikModel->orderBy('id_tahun', 'DESC')->findAll(),
		];

        return view('admin/listtahunakademik', $data);
    }
    public function create()
    {
        return view('admin/TambahTahun');
    }
    public function store() {
        $model = new TahunAkademikModel();
        $data = [
            // 'id_tahun' => $this->request->getVar('id_tahun'),
            'tahunAkademik' => $this->request->getVar('tahunAkademik'),
        ];
        $model->save($data);
		return redirect()->to(base_url('tahunakademik/create'))->with('status', '
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
        </div>
     ');
    }
    public function savecapaian()
	{
		$nama_kegiatan = $this->request->getVar('nama_kegiatan');
        $semester = $this->request->getVar('semester');
        $anggaran = $this->request->getVar('anggaran');
        $keterangan = $this->request->getVar('keterangan');
        $id_kpi = $this->request->getVar('id_kpi');
        $jenis_anggaran = $this->request->getVar('jenis_anggaran');
        $id_set = $this->request->getVar('id_set');
        $jumlah = $this->request->getVar('jumlah');


            for ($i=0; $i < $jumlah; $i++) { 
                $this->DetailRkatModel->insert([
                    'nama_kegiatan'=>$nama_kegiatan[$i],
                    'semester'=>$semester[$i],  
                    'anggaran'=>$anggaran[$i],  
                    'keterangan'=>$keterangan[$i],  
                    'id_kpi'=>$id_kpi[$i],  
                    'jenis_anggaran'=>$jenis_anggaran[$i],  
                    'id_set'=>$id_set[$i],  
                ]);
            }
		return redirect()->to(base_url('setrkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
	}
    public function editcapaianbyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id',$id)->first();

        return view('rkat/EditDataRkat',$data);
    }
    public function updatecapaianbyuser() {
        $model = new DetailRkatModel();
        $id = $this->request->getVar('id');
        $data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'semester' => $this->request->getVar('semester'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'id_kpi' => $this->request->getVar('id_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
            'id_set' => $this->request->getVar('id_set'),

        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('rkat/indexbyuser'));
    }
    public function deletecapaianbyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('rkat/indexbyuser'));
    }

}