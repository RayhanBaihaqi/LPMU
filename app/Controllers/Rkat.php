<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\SetRkatModel;
use App\Models\UsersModel;

class Rkat extends BaseController
{
    public function __construct()
    {
        $this->DetailRkatModel = new DetailRkatModel();
    }

    //User Rencana Anggaran
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
            'set_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'pk' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'PK')->findAll(),
            'ops' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'OPS')->findAll(),
            'inv' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'INV')->findAll(),
            // 'detail_rkat' => $this->DetailRkatModel->gabung($username),
        ];
        return view('rkat/RincianRkat', $data);
    }
    public function createbyuser()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
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
        $id_set = $this->request->getVar('id_set');
        $tahunAkademik = $this->request->getVar('tahunAkademik');
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
                'tahunAkademik' => $tahunAkademik,
                'id_set' => $id_set,
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
        $id = $_POST['id'];
        $serapGanjil = $_POST['serapGanjil'];
        $serapGenap = $_POST['serapGenap'];
        $totalSerap = $_POST['totalSerap'];
        // $bukti = $_POST['bukti'];

        foreach ($id as $key => $n) {
            
            $id = $n;
            $data = [
                'serapGanjil' => $serapGanjil[$key],
                'serapGenap' => $serapGenap[$key],
                'totalSerap' => $totalSerap[$key],
                // 'bukti' => $bukti[$key],
            ];

            $save = $model->update($id, $data);

            // print "The serapGanjil is " . $n . ", serapGenap is " . $serapGenap[$key] .
            //     ", and totalSerap is " . $totalSerap[$key] . ". Thank you\n";
        }
        // if (!$this->validate([
		// 	'keterangan' => [
		// 		'rules' => 'required',
		// 		'errors' => [
		// 			'required' => '{field} Tidak boleh kosong'
		// 		]
		// 	],
		// 	'bukti' => [
		// 		'rules' => 'uploaded[bukti]|mime_in[bukti,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
		// 		'errors' => [
		// 			'uploaded' => 'Harus Ada File yang diupload',
		// 			'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
		// 			'max_size' => 'Ukuran File Maksimal 2 MB'
		// 		]
 
		// 	]
		// ])) {
		// 	session()->setFlashdata('error', $this->validator->listErrors());
		// 	return redirect()->back()->withInput();
		// }
        
        // $dataBukti = $this->request->getFile('bukti');
		// $fileName = $dataBukti->getRandomName();
		// $model->insert([
		// 	'bukti' => $fileName,
		// ]);
        // $dataBukti->move('upload/', $fileName);
        // session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('CapaianRkat/createcapaianbyuser'));
    }
    public function deletebyuser($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id', $id)->delete();

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
        return redirect()->to(base_url('kpi/form_ubahpass'));
    }

    //User Capaian Anggaran 
    public function indexcapaianbyuser()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $this->DetailRkatModel->gabung();

        return view('rkat/ListData', $data);
    }
    public function createcapaianbyuser()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->orderBy('id', 'ASC')->findAll();
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

        for ($i = 0; $i < $jumlah; $i++) {
            $this->DetailRkatModel->insert([
                'nama_kegiatan' => $nama_kegiatan[$i],
                'semester' => $semester[$i],
                'anggaran' => $anggaran[$i],
                'keterangan' => $keterangan[$i],
                'jenis_kpi' => $jenis_kpi[$i],
                'jenis_anggaran' => $jenis_anggaran[$i],
                'butir' => $butir[$i],
                'id_set' => $id_set[$i],
            ]);
        }
        return redirect()->to(base_url('setrkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
    }
    public function editcapaianbyuser($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id', $id)->first();

        return view('rkat/EditDataRkat', $data);
    }
    public function updatecapaianbyuser()
    {
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
        $save = $model->update($id, $data);

        return redirect()->to(base_url('rkat/indexbyuser'));
    }
    public function deletecapaianbyuser($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('rkat/indexbyuser'));
    }

    ////////////////////////////admin////////////////////////////////
    public function indexbyadmin()
    {
        $model = new DetailRkatModel();

        $data['detail_rkat'] = $model->orderBy('id', 'DESC')->findAll();

        return view('admin/ListRkat', $data);
    }
    public function createbyadmin()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
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
        $id_set = $this->request->getVar('id_set');
        $tahunAkademik = $this->request->getVar('tahunAkademik');
        $serapGanjil = $this->request->getVar('serapGanjil');
        $serapGenap = $this->request->getVar('serapGenap');
        $totalSerap = $this->request->getVar('totalSerap');
        //print_r($id_set); die();
        for ($i = 0; $i < $jumlah; $i++) {
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
                'tahunAkademik' => $tahunAkademik,
                'id_set' => $id_set,
                'serapGanjil' => $serapGanjil,
                'serapGenap' => $serapGenap,
                'totalSerap' => $totalSerap,
            ]);
        }
        return redirect()->to(base_url('setrkat/createbyadmin'))->with('status', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
    }
    public function editbyadmin($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->where('id', $id)->first();
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

    public function indexBuatTabel()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat'] = $model->orderBy('id', 'DESC')->findAll();
        return view('admin/BuatTabel', $data);
    }

    //Grafik
    public function kesimpulan()
	{
        $model = new DetailRkatModel();
        $data = $model->tampilDataSetRKAT();
 
        return view('grafik', compact('data'));
	}
}
