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
        $username = session('username');
        $data['detail_rkat'] = $this->DetailRkatModel->gabung($username);

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
    public function save() {
        $model = new DetailRkatModel();

        $jjj1 = $this->request->getVar('anggaranGasal1');
        $jjj2 = $this->request->getVar('pagu2');
        $jjj3 = $this->request->getVar('pagu3');

		$data1 = [
            'kategori' => $this->request->getVar('kategori1'),
            'anggaranGenap' => $this->request->getVar('anggaranGenap1'),
            'anggaranGasal' => $this->request->getVar('anggaranGasal1'),
            'no_kegiatan' => $this->request->getVar('no_kegiatan1'),
            'indikator' => $this->request->getVar('indikator1'),
            'kpi' => $this->request->getVar('kpi1'),
            'butir' => $this->request->getVar('butir1'),
            'target' => $this->request->getVar('target1'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan1'),
            'total' => $this->request->getVar('total1'),
            'id_set' => $this->request->getVar('id_set1'),
		];
        $data2 = [
            'kategori' => $this->request->getVar('kategori2'),
            'anggaranGenap' => $this->request->getVar('anggaranGenap2'),
            'anggaranGasal' => $this->request->getVar('anggaranGasal2'),
            'no_kegiatan' => $this->request->getVar('no_kegiatan2'),
            'indikator' => $this->request->getVar('indikator2'),
            'kpi' => $this->request->getVar('kpi2'),
            'butir' => $this->request->getVar('butir2'),
            'target' => $this->request->getVar('target2'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan2'),
            'total' => $this->request->getVar('total2'),
            'id_set' => $this->request->getVar('id_set2'),
		];
        $data3 = [
            'kategori' => $this->request->getVar('kategori3'),
            'anggaranGenap' => $this->request->getVar('anggaranGenap3'),
            'anggaranGasal' => $this->request->getVar('anggaranGasal3'),
            'no_kegiatan' => $this->request->getVar('no_kegiatan3'),
            'indikator' => $this->request->getVar('indikator3'),
            'kpi' => $this->request->getVar('kpi3'),
            'butir' => $this->request->getVar('butir3'),
            'target' => $this->request->getVar('target3'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan3'),
            'total' => $this->request->getVar('total3'),
            'id_set' => $this->request->getVar('id_set3'),
		];
        $data4 = [
            'kategori' => $this->request->getVar('kategori4'),
            'anggaranGenap' => $this->request->getVar('anggaranGenap4'),
            'anggaranGasal' => $this->request->getVar('anggaranGasal4'),
            'no_kegiatan' => $this->request->getVar('no_kegiatan4'),
            'indikator' => $this->request->getVar('indikator4'),
            'kpi' => $this->request->getVar('kpi4'),
            'butir' => $this->request->getVar('butir4'),
            'target' => $this->request->getVar('target4'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan4'),
            'total' => $this->request->getVar('total4'),
            'id_set' => $this->request->getVar('id_set4'),
		];
        $data5 = [
            'kategori' => $this->request->getVar('kategori5'),
            'anggaranGenap' => $this->request->getVar('anggaranGenap5'),
            'anggaranGasal' => $this->request->getVar('anggaranGasal5'),
            'no_kegiatan' => $this->request->getVar('no_kegiatan5'),
            'indikator' => $this->request->getVar('indikator5'),
            'kpi' => $this->request->getVar('kpi5'),
            'butir' => $this->request->getVar('butir5'),
            'target' => $this->request->getVar('target5'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan5'),
            'total' => $this->request->getVar('total5'),
            'id_set' => $this->request->getVar('id_set5'),
		];
        print_r($jjj1);print_r($jjj2);print_r($jjj3);exit();
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
    
    function tambah_post() {
        $model = new DetailRkatModel();
        $data['anggaranGasal']  = (int)$this->input->post('anggaranGasal',true);
        $data['anggaranGenap']  = (int)$this->input->post('anggaranGenap',true);
        $data['total_perkegiatan'] = $data['anggaranGasal']+$data['anggaranGenap']; //hasil sesuai simbol plus
      
        $this->response($data, 200); //menampilkan variabel $data dengan status 200
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