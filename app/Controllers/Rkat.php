<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\SetRkatModel;

class Rkat extends BaseController
{
    public function __construct(){
        $this->DetailRkatModel= new DetailRkatModel();
    }

    //User Rencana Anggaran
    public function indexbyuser()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $this->DetailRkatModel->gabungkpi();

        return view('rkat/ListData', $data);
    }
    public function createbyuser() {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
        ]; 

        return view('rkat/inputData', $data);
    }
    public function save()
	{
        $model = new DetailRkatModel();
		$data = [
			'kategori' => $this->request->getVar('kategori'),
           'anggaranGenap' => $this->request->getVar('anggaranGenap'),
           'anggaranGasal' => $this->request->getVar('anggaranGasal'),
           'no_kegiatan' => $this->request->getVar('no_kegiatan'),
           'indikator' => $this->request->getVar('indikator'),
           'kpi' => $this->request->getVar('kpi'),
           'butir' => $this->request->getVar('butir'),
           'target' => $this->request->getVar('target'),
           'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
           'total' => $this->request->getVar('total'),
           'id_set' => $this->request->getVar('id_set'),
		];
		$model->save($data);
		return redirect()->to(base_url('rkat/createbyuser'))->with('status', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
        
        //memasukan data ke array
        // $kategori = $_POST['kategori'];
        // $anggaranGenap = $_POST['anggaranGenap'];
        // $anggaranGasal = $_POST['anggaranGasal'];
        // $no_kegiatan = $_POST['no_kegiatan'];
        // $indikator = $_POST['indikator'];
        // $kpi = $_POST['kpi'];
        // $butir = $_POST['butir'];
        // $target = $_POST['target'];
        // $nama_kegiatan = $_POST['nama_kegiatan'];
        // $total = $_POST['total'];
        // $id_set = $_POST['id_set'];
        
        // $baris = count($kategori);
        // //melakukan perulangan input
        // for ($i=0; $i < $baris; $i++) { 
        //    $this->DetailRkatModel->insert([
        //        'kategori'=>$kategori[$i],
        //        'anggaranGenap'=>$anggaranGenap[$i],  
        //        'anggaranGasal'=>$anggaranGasal[$i],  
        //        'no_kegiatan'=>$no_kegiatan[$i],  
        //        'indikator'=>$indikator[$i],  
        //        'kpi'=>$kpi[$i],  
        //        'butir'=>$butir[$i],  
        //        'target'=>$target[$i],  
        //        'nama_kegiatan'=>$nama_kegiatan[$i],  
        //        'total'=>$total[$i],
        //        'id_set'=>$id_set[$i],  
        //    ]);
        // }
        // return redirect()->to(base_url('rkat/createbyadmin'))->with('status', 'Data Berhasil ditambah');
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
    //User Capaian Anggaran 
    public function indexcapaianbyuser()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $this->DetailRkatModel->gabung();

        return view('rkat/ListData', $data);
    }
    public function createcapaianbyuser() {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->orderBy('id','ASC')->findAll();
        return view('rkat/FormCapaian', $data);
    }
    public function savecapaian()
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
    public function editcapaianbyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->first();

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
            'jenis_kpi' => $this->request->getVar('jenis_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
            'butir' => $this->request->getVar('butir'),
            'id_set' => $this->request->getVar('id_set'),

        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('rkat/indexbyuser'));
    }
    public function deletecapaianbyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('rkat/indexbyuser'));
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
        return view('admin/TambahRkat', $data);
    }
    public function savebyadmin()
	{
        $nama_kegiatan = $this->request->getVar('nama_kegiatan');
        $semester = $this->request->getVar('semester');
        $anggaran = $this->request->getVar('anggaran');
        $keterangan = $this->request->getVar('keterangan');
        $jenis_kpi = $this->request->getVar('jenis_kpi');
        $jenis_anggaran = $this->request->getVar('jenis_anggaran');
        $butir = $this->request->getVar('butir');
        $id_set = $this->request->getVar('id_prodi');
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

            // $sql = $this->DetailRkatModel->tambahBatch($data);
            // $model->insertBatch($data);
            return redirect()->to(base_url('setrkat/createbyadmin'))->with('status', 'Data Berhasil ditambah');
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
            'semester' => $this->request->getVar('semester'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'jenis_kpi' => $this->request->getVar('jenis_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
            'butir' => $this->request->getVar('butir'),
            'id_set' => $this->request->getVar('id_set'),
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