<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\TahunAkademikModel;
use App\Models\PersenSerapModel;
use App\Models\PaguRkatModel;
use App\Models\UsersModel;

class Rkat extends BaseController
{
    public function __construct()
    {
        $this->DetailRkatModel = new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
        $this->PaguModel = new PaguRkatModel();
        $this->UsersModel = new UsersModel();
    }

    //User
    public function indexbyuser()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data['detail_rkat'] = $this->DetailRkatModel->gabung($username);

        return view('rkat/kesimpulan', $data);
    }

    public function listrkat()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data['detail_rkat'] = $this->DetailRkatModel->gabung($username);

        return view('rkat/ListData', $data);
    }
    public function rincian()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'detail_rkat' => $this->DetailRkatModel->gabung($username),
            'set_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'pk' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'PK')->findAll(),
            'ops' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'OPS')->findAll(),
            'inv' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'INV')->findAll(),
            'tahunAkademik' => $model-> join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat.id_tahun')->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
        ];
        return view('rkat/RincianRkat', $data);
    }
    public function createbyuser()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];

        return view('rkat/inputData', $data);
    }
    public function save()
    {

        $jumlah = $this->request->getVar('jumlah');
        $kategori = $this->request->getVar('kategori');
        $anggaranGenap = $this->request->getVar('anggaranGenap');
        $anggaranGasal = $this->request->getVar('anggaranGasal');
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
                'anggaranGasal' => $anggaranGasal[$i],
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
        $data['detail_rkat'] = $model->where('id', $id)->first();

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
                // 'persenSerapGanjil' => $persenSerapGanjil[$key],
                // 'persenSerapGenap' => $persenSerapGenap[$key],
                // 'bukti' => $bukti[$key],
            ];

            $save = $model->update($id, $data);

            // print "The serapGanjil is " . $n . ", serapGenap is " . $serapGenap[$key] .
            //     ", and totalSerap is " . $totalSerap[$key] . ". Thank you\n";
        }
        $persenSerapGanjil = $_POST['persenSerapGanjil'];
        $persenSerapGenap = $_POST['persenSerapGenap'];
        $id_tahun = $_POST['id_tahun'];
        $id_user = $_POST['id_user'];
        
            $data2 = [
                'persenSerapGanjil' => $persenSerapGanjil,
                'persenSerapGenap' => $persenSerapGenap,
                'id_tahun' => $id_tahun,
                'id_user' => $id_user,
                
            ];
            $tambahPersen = $modelPersen->insert($data2);
        return redirect()->to(base_url('CapaianRkat/createcapaianbyuser'));
    }

    public function deletebyuser($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('rkat/indexbyuser'));
    }

    //Ubah Pssword User
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
        return redirect()->to(base_url('kpi/form_ubahpass'));
    }

    ////////////////////////////admin////////////////////////////////

    public function indexbyadmin()
    {
        $model = new DetailRkatModel();
        $data = [
            'detail_rkat' => $model->join('user', 'user.id=detail_rkat.id_user')->orderBy('id_rkat', 'DESC')->findAll(),

        ];
        return view('admin/ListRkat', $data);
    }
    public function createbyadmin()
    {
        $model = new UsersModel();
        $model2 = new PaguRkatModel();
        $data = [
            'user' => $model->orderBy('id', 'DESC')->findAll(),
            'pagu' => $model2->join('user', 'user.id=pagu_rkat.id_user')->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];
        return view('admin/inputData', $data);
    }
    public function savebyadmin()
    {
        $jumlah = $this->request->getVar('jumlah');
        $kategori = $this->request->getVar('kategori');
        $anggaranGenap = $this->request->getVar('anggaranGenap');
        $anggaranGasal = $this->request->getVar('anggaranGasal');
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
                'anggaranGasal' => $anggaranGasal[$i],
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
        return redirect()->to(base_url('rkat/createbyadmin'))->with('status', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
    }
    public function editbyadmin($id_rkat = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id_rkat', $id_rkat)->first();
        // print_r($data);exit();

        return view('/admin/EditRkat', $data);
    }
    public function updatebyadmin()
    {
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
            'serapGanjil' => $this->request->getVar('serapGanjil'),
            'serapGenap' => $this->request->getVar('serapGenap'),
            'totalSerap' => $this->request->getVar('totalSerap'),
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('rkat/indexbyadmin'));
    }
    public function deletebyadmin($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('rkat/indexbyadmin'));
    }

    //Grafik
    public function kesimpulan()
	{
        $model = new DetailRkatModel();
        $data = $model->tampilDataSetRKAT();
 
        return view('grafik', compact('data'));
	}
}
