<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\SetRkatModel;
use App\Models\UsersModel;

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
    public function save() 
    {
        $model = new DetailRkatModel();

        $tahunAkademik = $this->request->getVar('tahunAkademik');

        $kategori1 = $this->request->getVar('kategori1');
        $anggaranGenap1 = $this->request->getVar('anggaranGenap1');
        $anggaranGasal1 = $this->request->getVar('anggaranGasal1');
        $no_kegiatan1 = $this->request->getVar('no_kegiatan1');
        $indikator1 = $this->request->getVar('indikator1');
        $kpi1 = $this->request->getVar('kpi1');
        $butir1 = $this->request->getVar('butir1');
        $target1 = $this->request->getVar('target1');
        $nama_kegiatan1 = $this->request->getVar('nama_kegiatan1');
        $total1 = $this->request->getVar('total1');
        $id_set1 = $this->request->getVar('id_set1');
        $total1 = $this->request->getVar('total1');

        $kategori2 = $this->request->getVar('kategori2');
        $anggaranGenap2 = $this->request->getVar('anggaranGenap2');
        $anggaranGasal2 = $this->request->getVar('anggaranGasal2');
        $no_kegiatan2 = $this->request->getVar('no_kegiatan2');
        $indikator2 = $this->request->getVar('indikator2');
        $kpi2 = $this->request->getVar('kpi2');
        $butir2 = $this->request->getVar('butir2');
        $target2 = $this->request->getVar('target2');
        $nama_kegiatan2 = $this->request->getVar('nama_kegiatan2');
        $total2 = $this->request->getVar('total2');
        $id_set2 = $this->request->getVar('id_set2');
        $total2 = $this->request->getVar('total2');

        $kategori3 = $this->request->getVar('kategori3');
        $anggaranGenap3 = $this->request->getVar('anggaranGenap3');
        $anggaranGasal3 = $this->request->getVar('anggaranGasal3');
        $no_kegiatan3 = $this->request->getVar('no_kegiatan3');
        $indikator3 = $this->request->getVar('indikator3');
        $kpi3 = $this->request->getVar('kpi3');
        $butir3 = $this->request->getVar('butir3');
        $target3 = $this->request->getVar('target3');
        $nama_kegiatan3 = $this->request->getVar('nama_kegiatan3');
        $total3 = $this->request->getVar('total3');
        $id_set3 = $this->request->getVar('id_set3');
        $total3 = $this->request->getVar('total3');

        $kategori4 = $this->request->getVar('kategori4');
        $anggaranGenap4 = $this->request->getVar('anggaranGenap4');
        $anggaranGasal4 = $this->request->getVar('anggaranGasal4');
        $no_kegiatan4 = $this->request->getVar('no_kegiatan4');
        $indikator4 = $this->request->getVar('indikator4');
        $kpi4 = $this->request->getVar('kpi4');
        $butir4 = $this->request->getVar('butir4');
        $target4 = $this->request->getVar('target4');
        $nama_kegiatan4 = $this->request->getVar('nama_kegiatan4');
        $total4 = $this->request->getVar('total4');
        $id_set4 = $this->request->getVar('id_set4');
        $total4 = $this->request->getVar('total4');

        $kategori5 = $this->request->getVar('kategori5');
        $anggaranGenap5 = $this->request->getVar('anggaranGenap5');
        $anggaranGasal5 = $this->request->getVar('anggaranGasal5');
        $no_kegiatan5 = $this->request->getVar('no_kegiatan5');
        $indikator5 = $this->request->getVar('indikator5');
        $kpi5 = $this->request->getVar('kpi5');
        $butir5 = $this->request->getVar('butir5');
        $target5 = $this->request->getVar('target5');
        $nama_kegiatan5 = $this->request->getVar('nama_kegiatan5');
        $total5 = $this->request->getVar('total5');
        $id_set5 = $this->request->getVar('id_set5');
        $total5 = $this->request->getVar('total5');

		$data1 = [
            'kategori' => $kategori1,
            'anggaranGenap' => $anggaranGenap1,
            'anggaranGasal' => $anggaranGasal1,
            'no_kegiatan' => $no_kegiatan1,
            'indikator' => $indikator1,
            'kpi' => $kpi1,
            'butir' => $butir1,
            'target' => $target1,
            'nama_kegiatan' => $nama_kegiatan1,
            'total' => $total1,
            'id_set' => $id_set1,
            'tahunAkademik'=>$tahunAkademik, 
		];
        $data2 = [
            'kategori' => $kategori2,
            'anggaranGenap' => $anggaranGenap2,
            'anggaranGasal' => $anggaranGasal2,
            'no_kegiatan' => $no_kegiatan2,
            'indikator' => $indikator2,
            'kpi' => $kpi2,
            'butir' => $butir2,
            'target' => $target2,
            'nama_kegiatan' => $nama_kegiatan2,
            'total' => $total2,
            'id_set' => $id_set2,
            'tahunAkademik'=>$tahunAkademik, 
		];
        $data3 = [
            'kategori' => $kategori3,
            'anggaranGenap' => $anggaranGenap3,
            'anggaranGasal' => $anggaranGasal3,
            'no_kegiatan' => $no_kegiatan3,
            'indikator' => $indikator3,
            'kpi' => $kpi3,
            'butir' => $butir3,
            'target' => $target3,
            'nama_kegiatan' => $nama_kegiatan3,
            'total' => $total3,
            'id_set' => $id_set3,
            'tahunAkademik'=>$tahunAkademik, 
		];
        $data4 = [
            'kategori' => $kategori4,
            'anggaranGenap' => $anggaranGenap4,
            'anggaranGasal' => $anggaranGasal4,
            'no_kegiatan' => $no_kegiatan4,
            'indikator' => $indikator4,
            'kpi' => $kpi4,
            'butir' => $butir4,
            'target' => $target4,
            'nama_kegiatan' => $nama_kegiatan4,
            'total' => $total4,
            'id_set' => $id_set4,
            'tahunAkademik'=>$tahunAkademik, 
		];
        $data5 = [
            'kategori' => $kategori5,
            'anggaranGenap' => $anggaranGenap5,
            'anggaranGasal' => $anggaranGasal5,
            'no_kegiatan' => $no_kegiatan5,
            'indikator' => $indikator5,
            'kpi' => $kpi5,
            'butir' => $butir5,
            'target' => $target5,
            'nama_kegiatan' => $nama_kegiatan5,
            'total' => $total5,
            'id_set' => $id_set5,
            'tahunAkademik'=>$tahunAkademik, 
		];

		$model->save($data1);
        if ($no_kegiatan2 != "" & $nama_kegiatan2 != "") {
            $model->save($data2);
        }
        if ($no_kegiatan3 != "" & $nama_kegiatan3 != "") {
            $model->save($data3);
        }
        if ($no_kegiatan4 != "" & $nama_kegiatan4 != "") {
            $model->save($data4);
        }
        if ($no_kegiatan5 != "" & $nama_kegiatan5 != "") {
            $model->save($data5);
        }
		return redirect()->to(base_url('rkat/createbyuser'))->with('status', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
        // $jumlah = $this->request->getVar('jumlah');
        // $kategori = $this->request->getVar('kategori');
        // $anggaranGenap = $this->request->getVar('anggaranGenap');
        // $anggaranGasal = $this->request->getVar('anggaranGasal');
        // $no_kegiatan = $this->request->getVar('no_kegiatan');
        // $indikator = $this->request->getVar('indikator');
        // $kpi = $this->request->getVar('kpi');
        // $butir = $this->request->getVar('butir');
        // $target = $this->request->getVar('target');
        // $nama_kegiatan = $this->request->getVar('nama_kegiatan');
        // $total = $this->request->getVar('total');
        // $id_set = $this->request->getVar('id_set');
        // $tahunAkademik = $this->request->getVar('tahunAkademik');
        // // print_r($tahunAkademik); die();
        //     for ($i=0; $i <= $jumlah; $i++) {
        //         $this->DetailRkatModel->insert([
        //             'kategori'=>$kategori[$i],
        //             'anggaranGenap'=>$anggaranGenap[$i],  
        //             'anggaranGasal'=>$anggaranGasal[$i],  
        //             'no_kegiatan'=>$no_kegiatan[$i],  
        //             'indikator'=>$indikator[$i],  
        //             'kpi'=>$kpi[$i],  
        //             'butir'=>$butir[$i],  
        //             'target'=>$target[$i],  
        //             'nama_kegiatan'=>$nama_kegiatan[$i],  
        //             'total'=>$total[$i],  
        //             'tahunAkademik'=>$tahunAkademik,  
        //             'id_set'=>$id_set,  
        //         ]);
        //     }
		// return redirect()->to(base_url('rkat/createbyuser'))->with('status', '
        //    <div class="alert alert-success">
        //        <button type="button" class="close" data-dismiss="alert">&times;</button>
        //        <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
        //    </div>
        // ');
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
    
    public function form_ubahpass($id = null)
	{
		$model = new UsersModel();
		$username = session('username');
		$data['user'] = $model->where('id', $id)->first();
		return view('/rkat/ubah_pwd', $data);
	}
    public function ubahpwd()
	{
		$model = new UsersModel();
		$id = session('id');
		//exit();
		$data = [
			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
		];
		$save = $model->update($id, $data);

		if ($save) {
			session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Password anda telah berubah.
		</div>');
		} else {
			session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Password anda tidak berubah.
		</div>');
		}
		//print_r($save);
		//exit();


		return redirect()->to(base_url('kpi/form_ubahpass'));
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

    ////////////////////////////admin////////////////////////////////
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
        // print_r($data);exit();

        return view('/admin/EditRkat',$data);
    }
    public function updatebyadmin() {
        $model = new DetailRkatModel();
        $id = $this->request->getVar('id');

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
            'tahunAkademik' => $this->request->getVar('tahunAkademik'),

        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('rkat/indexbyadmin'));
    }
    public function deletebyadmin($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('rkat/indexbyadmin'));
    }

    public function indexBuatTabel()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->orderBy('id','DESC')->findAll();
        return view('admin/BuatTabel', $data);

    }


}