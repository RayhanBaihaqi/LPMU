<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\TahunAkademikModel;
use App\Models\PersenSerapModel;
use App\Models\PaguRkatModel;
use App\Models\ModelKpiAdmin;
use App\Models\usersModel;

class Rkat extends BaseController
{
    public function __construct()
    {
        $this->DetailRkatModel = new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
        $this->PaguModel = new PaguRkatModel();
        $this->usersModel = new usersModel();
        $this->ModelKpiAdmin = new ModelKpiAdmin();
    }

    //user
    public function indexbyuser()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data['detail_rkat2'] = $this->DetailRkatModel->gabung($username);

        return view('rkat/kesimpulan', $data);
    }

    public function listrkat()
    {
        $model = new DetailRkatModel();
        $model2 = new PersenSerapModel();
        $username = session('username');
        $data = [
            'detail_rkat2' => $this->DetailRkatModel->gabung($username),
            'totalGanjilPk' => $model->totalGanjilPk($username)->getResult(),
            'totalGenapPk' => $model->totalGenapPk($username)->getResult(),
            'totalPk' => $model->totalPk($username)->getResult(),
            'totalGanjilOps' => $model->totalGanjilOps($username)->getResult(),
            'totalGenapOps' => $model->totalGenapOps($username)->getResult(),
            'totalOps' => $model->totalOps($username)->getResult(),
            'totalGanjilInv' => $model->totalGanjilInv($username)->getResult(),
            'totalGenapInv' => $model->totalGenapInv($username)->getResult(),
            'totalInv' => $model->totalInv($username)->getResult(),
            'tahunAktif' => $model2->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ]; 
        return view('rkat/ListData', $data);
    }
    public function rincian()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        
        $data = [
            'detail_rkat2' => $this->DetailRkatModel->gabung($username),
            // 'pk' => $this->DetailRkatModel->jumlahPk(),
            // 'ops' => $this->DetailRkatModel->jumlahOps(),
            // 'inv' => $this->DetailRkatModel->jumlahInv(),
            'set_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'pk' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->where('aktif', '1')->join('user', 'user.id=detail_rkat2.id_user')->where('username', $username)->where('kategori', 'PK')->findAll(),
            'ops' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->where('aktif', '1')->join('user', 'user.id=detail_rkat2.id_user')->where('username', $username)->where('kategori', 'OPS')->findAll(),
            'inv' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->where('aktif', '1')->join('user', 'user.id=detail_rkat2.id_user')->where('username', $username)->where('kategori', 'INV')->findAll(),
            'tahunAkademik' => $model-> join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->join('user', 'user.id=pagu_rkat.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
        ];
        // $jumPk = $data["jumPk"];
        // var_dump($data);die();
        return view('rkat/RincianRkat', $data);
    }
    public function saveRincian() {
        $model = new PersenSerapModel();
        $jumlah = $this->request->getVar('jumlah');
        $id_tahun = $this->request->getVar('id_tahun');
        $id_user = $this->request->getVar('id_user');
        $persenPk = $this->request->getVar('persenPk');
        $persenOps = $this->request->getVar('persenOps');
        $persenInv = $this->request->getVar('persenInv');
        $persenPkOps = $this->request->getVar('persenPkOps');
        // print_r($persenPk); die();
        for ($i = 0; $i <= $jumlah; $i++) {
            $this->PersenSerapModel->insert([
                'id_tahun' => $id_tahun,
                'id_user' => $id_user,
                'persenPk' => $persenPk,
                'persenOps' => $persenOps,
                'persenInv' => $persenInv,
                'persenPkOps' => $persenPkOps,
            ]);
        }
        return redirect()->to(base_url('rkat/rincian'))->with('statusSimpan', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
    }
    public function updateRincian()
    {
        $model = new PersenSerapModel();
        // $id = $_POST['id'];
        // $id_tahun = $_POST['id_tahun'];
        // $id_user = $_POST['id_user'];
        // $persenPk = $_POST['persenPk'];
        // $persenOps = $_POST['persenOps'];
        // $persenInv = $_POST['persenInv'];
        // $persenPkOps = $_POST['persenPkOps'];
        
        // // $bukti = $_POST['bukti'];

        // foreach ($id as $key => $n) {
            
        //     $id = $n;
        //     $data = [
        //         'id_tahun' => $id_tahun[$key],
        //         'id_user' => $id_user[$key],
        //         'persenPk' => $persenPk[$key],
        //         'persenOps' => $persenOps[$key],
        //         'persenInv' => $persenInv[$key],
        //         'persenPkOps' => $persenPkOps[$key],

        //     ];

        //     $save = $model->update($id, $data);

        // }
        
        $id = $this->request->getVar('id_persen');

        $data = [
            'id_tahun' => $this->request->getVar('id_tahun'),
            'id_user' => $this->request->getVar('id_user'),
            'persenPk' => $this->request->getVar('persenPk'),
            'persenOps' => $this->request->getVar('persenOps'),
            'persenInv' => $this->request->getVar('persenInv'),
            'persenPkOps' => $this->request->getVar('persenPkOps'),
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('rkat/rincian'))->with('statusUpdate', '
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Data Anda Berhasil Terupdate.
        </div>
     ');
    }
    public function createbyuser()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'kpi' => $this->ModelKpiAdmin->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];

        return view('rkat/inputData', $data);
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
        return redirect()->to(base_url('rkat/createbyuser'))->with('status', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
    }
    public function editbyuser($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id', $id)->first();

        return view('rkat/EditDataRkat', $data);
    }
    public function updatebyuser()
    {
        
        $model = new DetailRkatModel();
        $modelPersen = new PersenSerapModel();
        $id = $_POST['id'];
        $serapGanjil = $_POST['serapGanjil'];
        $serapGenap = $_POST['serapGenap'];
        
        // $bukti = $_POST['bukti'];

        foreach ($id as $key => $n) {
            
            $id = $n;
            $data = [
                'serapGanjil' => $serapGanjil[$key],
                'serapGenap' => $serapGenap[$key],

            ];

            $save = $model->update($id, $data);

        }
        return redirect()->to(base_url('CapaianRkat/createcapaianbyuser'));
    }

    public function deletebyuser($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('rkat/indexbyuser'));
    }

    //Ubah Pssword user
    public function form_ubahpass($id = null)
    {
        $model = new usersModel();
        $username = session('username');
        $data['user'] = $model->where('id', $id)->first();
        return view('/rkat/ubah_pwd', $data);
    }
    public function ubahpwd()
    {
        $model = new usersModel();
        $id = session('id');
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
        return redirect()->to(base_url('rkat/form_ubahpass'));
    }

    //Grafik
    public function kesimpulan()
	{
        $model = new DetailRkatModel();
        $data = $model->tampilDataSetRKAT();
 
        return view('grafik', compact('data'));
	}
}
