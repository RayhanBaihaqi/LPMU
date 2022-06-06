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
use App\Models\usersModel;


class Keuangan extends BaseController
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
    public function index()
    {
        return view('keuangan/layout');
    }
    public function home()
    {
        $model = new PersenSerapModel();
        $username = session('username');
        $data = [
            'avgPkOpsSeluruh1920' => $model->avgPkOpsSeluruh1920()->getResult(),
            'avgPkOpsSeluruh2021' => $model->avgPkOpsSeluruh2021()->getResult(),
            'avgPkOpsSeluruh2122' => $model->avgPkOpsSeluruh2122()->getResult(),
            'avgInvSeluruh1920' => $model->avgInvSeluruh1920()->getResult(),
            'avgInvSeluruh2021' => $model->avgInvSeluruh2021()->getResult(),
            'avgInvSeluruh2122' => $model->avgInvSeluruh2122()->getResult(),

            'avgPkOpsSeluruhUnit1920' => $model->avgPkOpsSeluruhUnit1920()->getResult(),
            'avgPkOpsSeluruhUnit2021' => $model->avgPkOpsSeluruhUnit2021()->getResult(),
            'avgPkOpsSeluruhUnit2122' => $model->avgPkOpsSeluruhUnit2122()->getResult(),
            'avgInvSeluruhUnit1920' => $model->avgInvSeluruhUnit1920()->getResult(),
            'avgInvSeluruhUnit2021' => $model->avgInvSeluruhUnit2021()->getResult(),
            'avgInvSeluruhUnit2122' => $model->avgInvSeluruhUnit2122()->getResult(),

            'avgInv' => $model->avgInv($username)->getResult(),
            'tahun' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->findAll(),
            'tahunAktif' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
            'seluruhDatauser' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->findAll(),
            // 'inv' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->where('aktif', '1')->join('user', 'user.id=detail_rkat2.id_user')->where('username', $username)->where('kategori', 'INV')->findAll(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];
        return view('/keuangan/Dashboard', $data);
    }
    //user
    public function indexbyuser()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data['detail_rkat2'] = $this->DetailRkatModel->gabung($username);

        return view('keuangan/kesimpulan', $data);
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
        return view('keuangan/ListData', $data);
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
            'tahunAkademik' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->join('user', 'user.id=pagu_rkat.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
        ];
        // $jumPk = $data["jumPk"];
        // var_dump($data);die();
        return view('keuangan/RincianRkat', $data);
    }
    public function saveRincian()
    {
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
        return redirect()->to(base_url('keuangan/rincian'))->with('statusSimpan', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
    }
    public function updateRincian()
    {
        $model = new PersenSerapModel();

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

        return redirect()->to(base_url('keuangan/rincian'))->with('statusUpdate', '
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

        return view('keuangan/inputData', $data);
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
        return redirect()->to(base_url('keuangan/createbyuser'))->with('status', '
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

        return view('keuangan/EditDataRkat', $data);
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
        return redirect()->to(base_url('Capaiankeuangan/createcapaianbyuser'));
    }

    public function deletebyuser($id = null)
    {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('keuangan/indexbyuser'));
    }

    //Ubah Pssword user
    public function form_ubahpass($id = null)
    {
        $model = new usersModel();
        $username = session('username');
        $data['user'] = $model->where('id', $id)->first();
        return view('/keuangan/ubah_pwd', $data);
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
        return redirect()->to(base_url('keuangan/form_ubahpass'));
    }

    public function grafikSerapProdi()
    {
        $model = new PersenSerapModel();
        $username = session('username');
        $data = [
            'tahun' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->findAll(),
            'tahunAktif' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
            //Data Program Studi
            //AKT
            'dataProdiAkt1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Akuntansi')->findAll(),
            'dataProdiAkt2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Akuntansi')->findAll(),
            'dataProdiAkt2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Akuntansi')->findAll(),
            //MAN
            'dataProdiMan1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Manajemen')->findAll(),
            'dataProdiMan2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Manajemen')->findAll(),
            'dataProdiMan2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Manajemen')->findAll(),
            //PSI
            'dataProdiPsi1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Psikologi')->findAll(),
            'dataProdiPsi2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Psikologi')->findAll(),
            'dataProdiPsi2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Psikologi')->findAll(),
            //KOM
            'dataProdiKom1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Ilmu Komunikasi')->findAll(),
            'dataProdiKom2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Ilmu Komunikasi')->findAll(),
            'dataProdiKom2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Ilmu Komunikasi')->findAll(),
            //DP
            'dataProdiDp1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Desain Produk')->findAll(),
            'dataProdiDp2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Desain Produk')->findAll(),
            'dataProdiDp2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Desain Produk')->findAll(),
            //DKV
            'dataProdiDkv1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Desain Komunikasi Visual')->findAll(),
            'dataProdiDkv2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Desain Komunikasi Visual')->findAll(),
            'dataProdiDkv2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Desain Komunikasi Visual')->findAll(),
            //INF
            'dataProdiInf1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Informatika')->findAll(),
            'dataProdiInf2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Informatika')->findAll(),
            'dataProdiInf2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Informatika')->findAll(),
            //SIF
            'dataProdiSif1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Sistem Informasi')->findAll(),
            'dataProdiSif2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Sistem Informasi')->findAll(),
            'dataProdiSif2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Sistem Informasi')->findAll(),
            //TSP
            'dataProdiTsp1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Teknik Sipil')->findAll(),
            'dataProdiTsp2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Teknik Sipil')->findAll(),
            'dataProdiTsp2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Teknik Sipil')->findAll(),
            //ARS
            'dataProdiArs1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '1')->where('nama_prodi', 'Arsitektur')->findAll(),
            'dataProdiArs2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '2')->where('nama_prodi', 'Arsitektur')->findAll(),
            'dataProdiArs2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->where('id_tahun', '3')->where('nama_prodi', 'Arsitektur')->findAll(),
        ];
        return view('/keuangan/GrafikSerapProdi', $data);
    }
    public function grafikSerapUnit()
    {
        $model = new PersenSerapModel();
        $username = session('username');
        $data = [
            'tahun' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->findAll(),
            'tahunAktif' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
            //Data Unit
            //Keuangan
            'dataUnitKeuangan1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'keuangan')->where('id_tahun', '1')->where('nama_prodi', 'Keuangan')->findAll(),
            'dataUnitKeuangan2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'keuangan')->where('id_tahun', '2')->where('nama_prodi', 'Keuangan')->findAll(),
            'dataUnitKeuangan2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'keuangan')->where('id_tahun', '3')->where('nama_prodi', 'Keuangan')->findAll(),
            //LPMU
            'dataUnitLpmu1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'lpmu')->where('id_tahun', '1')->where('nama_prodi', 'Lembaga Penjamin Mutu Universitas')->findAll(),
            'dataUnitLpmu2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'lpmu')->where('id_tahun', '2')->where('nama_prodi', 'Lembaga Penjamin Mutu Universitas')->findAll(),
            'dataUnitLpmu2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'lpmu')->where('id_tahun', '3')->where('nama_prodi', 'Lembaga Penjamin Mutu Universitas')->findAll(),
            //BKAL
            'dataUnitBkal1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Biro Kemahasiswaan Dan Alumni')->findAll(),
            'dataUnitBkal2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Biro Kemahasiswaan Dan Alumni')->findAll(),
            'dataUnitBkal2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Biro Kemahasiswaan Dan Alumni')->findAll(),
            //JCAL
            'dataUnitJcal1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Jaya Center for Advanced Language')->findAll(),
            'dataUnitJcal2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Jaya Center for Advanced Language')->findAll(),
            'dataUnitJcal2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Jaya Center for Advanced Language')->findAll(),
            //BP
            'dataUnitBp1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Biro Pendidikan')->findAll(),
            'dataUnitBp2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Biro Pendidikan')->findAll(),
            'dataUnitBp2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Biro Pendidikan')->findAll(),
            //KHI
            'dataUnitKhi1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Kerjasama dan Hubungan Internasional')->findAll(),
            'dataUnitKhi2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Kerjasama dan Hubungan Internasional')->findAll(),
            'dataUnitKhi2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Kerjasama dan Hubungan Internasional')->findAll(),
            //PERPUSTAKAAN
            'dataUnitPerpus1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Perpustakaan')->findAll(),
            'dataUnitPerpus2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Perpustakaan')->findAll(),
            'dataUnitPerpus2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Perpustakaan')->findAll(),
            //PHA
            'dataUnitPha1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Promotion, Humas dan Admisi')->findAll(),
            'dataUnitPha2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Promotion, Humas dan Admisi')->findAll(),
            'dataUnitPha2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Promotion, Humas dan Admisi')->findAll(),
            //JLP
            'dataUnitJlp1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Jaya Launch Pad')->findAll(),
            'dataUnitJlp2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Jaya Launch Pad')->findAll(),
            'dataUnitJlp2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Jaya Launch Pad')->findAll(),
            //JSDP
            'dataUnitJsdp1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Jaya Softskill Development Program')->findAll(),
            'dataUnitJsdp2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Jaya Softskill Development Program')->findAll(),
            'dataUnitJsdp2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Jaya Softskill Development Program')->findAll(),
            //LSE
            'dataUnitLse1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Liberal Art, Sustainable and Enterpreneurship')->findAll(),
            'dataUnitLse2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Liberal Art, Sustainable and Enterpreneurship')->findAll(),
            'dataUnitLse2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Liberal Art, Sustainable and Enterpreneurship')->findAll(),
            //TIK
            'dataUnitTik1920' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '1')->where('nama_prodi', 'Teknologi Informasi dan Komunikasi')->findAll(),
            'dataUnitTik2021' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '2')->where('nama_prodi', 'Teknologi Informasi dan Komunikasi')->findAll(),
            'dataUnitTik2122' => $model->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->where('id_tahun', '3')->where('nama_prodi', 'Teknologi Informasi dan Komunikasi')->findAll(),
            
        ];
        return view('keuangan/GrafikSerapUnit', $data);
    }
    public function homekpi()
    {
        $tabelcapaiankpi = new DataCapaianKpiModel();
        // $db      = \Config\Database::connect();
        // $builder = $db->table('tabel_capaian_kpi');
        $nama_prodi = session('nama_prodi');
        $data = [

            'totalkpi18' => $tabelcapaiankpi->jmlkpi18($nama_prodi)->getResultArray(),
            'totalkpi19' => $tabelcapaiankpi->jmlkpi19($nama_prodi)->getResultArray(),
            'totalkpi20' => $tabelcapaiankpi->jmlkpi20($nama_prodi)->getResultArray(),
            'totalkpi21' => $tabelcapaiankpi->jmlkpi21($nama_prodi)->getResultArray(),
        ];
        return view('/keuangan/DashboardKpi', $data);
    }

    public function rencana()
    {
        $listbutirkpi = new DataKpiButirModel();
        $data = [
            'tampildata' => $listbutirkpi->tampildatabutir()->getResult(),
            'sum' => $listbutirkpi->get_sum()->getResult()
        ];
        return view('keuangan/rencana', $data);
    }
    public function inputcapaian($kategori = null)
    {
        $listbutirkpi = new DataKpiButirModel();

        if ($kategori == null) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir()->getResult()
            ];
            return view('keuangan/form_capaian', $data);
        } elseif ($kategori == 1) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir1()->getResult()
            ];
            return view('keuangan/form_capaian1', $data);
        } elseif ($kategori == 2) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir2()->getResult()
            ];
            return view('keuangan/form_capaian2', $data);
        } elseif ($kategori == 3) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir3()->getResult()
            ];
            return view('keuangan/form_capaian3', $data);
        } elseif ($kategori == 4) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir4()->getResult()
            ];
            return view('keuangan/form_capaian4', $data);
        } elseif ($kategori == 5) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir5()->getResult()
            ];
            return view('keuangan/form_capaian5', $data);
        } elseif ($kategori == 6) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir6()->getResult()
            ];
            return view('keuangan/form_capaian6', $data);
        } elseif ($kategori == 7) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir7()->getResult()
            ];
            return view('keuangan/form_capaian7', $data);
        } elseif ($kategori == 8) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir8()->getResult()
            ];
            return view('keuangan/form_capaian8', $data);
        } elseif ($kategori == 9) {
            $data = [
                'tampildata' => $listbutirkpi->tampildatabutir9()->getResult()
            ];
            return view('keuangan/form_capaian9', $data);
        }
    }

    public function kesimpulan()
    {
        $listcapaiankpi = new DataCapaianKpiModel();
        $data = [
            'tampilcapaiankpi' => $listcapaiankpi->tampilcapaiankpi_user()->getResult(),
        ];
        return view('keuangan/grafik', $data);
    }

    public function kesimpulan_tabel()
    {
        $tabelcapaiankpi = new DataCapaianKpiModel();
        // $db      = \Config\Database::connect();
        // $builder = $db->table('tabel_capaian_kpi');
        $nama_prodi = session('nama_prodi');
        $data = [
            'tampiltabelkpi' => $tabelcapaiankpi->get_tabel(),
            //standar 1 per TA
            'hasilkpi1_18' => $tabelcapaiankpi->hitungkpi1_18($nama_prodi)->getResult(),
            'hasilkpi1_19' => $tabelcapaiankpi->hitungkpi1_19($nama_prodi)->getResult(),
            'hasilkpi1_20' => $tabelcapaiankpi->hitungkpi1_20($nama_prodi)->getResult(),
            'hasilkpi1_21' => $tabelcapaiankpi->hitungkpi1_21($nama_prodi)->getResult(),
            //standar 2 per TA
            'hasilkpi2_18' => $tabelcapaiankpi->hitungkpi2_18($nama_prodi)->getResult(),
            'hasilkpi2_19' => $tabelcapaiankpi->hitungkpi2_19($nama_prodi)->getResult(),
            'hasilkpi2_20' => $tabelcapaiankpi->hitungkpi2_20($nama_prodi)->getResult(),
            'hasilkpi2_21' => $tabelcapaiankpi->hitungkpi2_21($nama_prodi)->getResult(),
            //standar 3 per TA
            'hasilkpi3_18' => $tabelcapaiankpi->hitungkpi3_18($nama_prodi)->getResult(),
            'hasilkpi3_19' => $tabelcapaiankpi->hitungkpi3_19($nama_prodi)->getResult(),
            'hasilkpi3_20' => $tabelcapaiankpi->hitungkpi3_20($nama_prodi)->getResult(),
            'hasilkpi3_21' => $tabelcapaiankpi->hitungkpi3_21($nama_prodi)->getResult(),
            //standar 4 per TA
            'hasilkpi4_18' => $tabelcapaiankpi->hitungkpi4_18($nama_prodi)->getResult(),
            'hasilkpi4_19' => $tabelcapaiankpi->hitungkpi4_19($nama_prodi)->getResult(),
            'hasilkpi4_20' => $tabelcapaiankpi->hitungkpi4_20($nama_prodi)->getResult(),
            'hasilkpi4_21' => $tabelcapaiankpi->hitungkpi4_21($nama_prodi)->getResult(),
            //standar 5 per TA
            'hasilkpi5_18' => $tabelcapaiankpi->hitungkpi5_18($nama_prodi)->getResult(),
            'hasilkpi5_19' => $tabelcapaiankpi->hitungkpi5_19($nama_prodi)->getResult(),
            'hasilkpi5_20' => $tabelcapaiankpi->hitungkpi5_20($nama_prodi)->getResult(),
            'hasilkpi5_21' => $tabelcapaiankpi->hitungkpi5_21($nama_prodi)->getResult(),
            //standar 6 per TA
            'hasilkpi6_18' => $tabelcapaiankpi->hitungkpi6_18($nama_prodi)->getResult(),
            'hasilkpi6_19' => $tabelcapaiankpi->hitungkpi6_19($nama_prodi)->getResult(),
            'hasilkpi6_20' => $tabelcapaiankpi->hitungkpi6_20($nama_prodi)->getResult(),
            'hasilkpi6_21' => $tabelcapaiankpi->hitungkpi6_21($nama_prodi)->getResult(),
            //standar 7 per TA
            'hasilkpi7_18' => $tabelcapaiankpi->hitungkpi7_18($nama_prodi)->getResult(),
            'hasilkpi7_19' => $tabelcapaiankpi->hitungkpi7_19($nama_prodi)->getResult(),
            'hasilkpi7_20' => $tabelcapaiankpi->hitungkpi7_20($nama_prodi)->getResult(),
            'hasilkpi7_21' => $tabelcapaiankpi->hitungkpi7_21($nama_prodi)->getResult(),
            //standar 8 per TA
            'hasilkpi8_18' => $tabelcapaiankpi->hitungkpi8_18($nama_prodi)->getResult(),
            'hasilkpi8_19' => $tabelcapaiankpi->hitungkpi8_19($nama_prodi)->getResult(),
            'hasilkpi8_20' => $tabelcapaiankpi->hitungkpi8_20($nama_prodi)->getResult(),
            'hasilkpi8_21' => $tabelcapaiankpi->hitungkpi8_21($nama_prodi)->getResult(),
            //standar 9 per TA
            'hasilkpi9_18' => $tabelcapaiankpi->hitungkpi9_18($nama_prodi)->getResult(),
            'hasilkpi9_19' => $tabelcapaiankpi->hitungkpi9_19($nama_prodi)->getResult(),
            'hasilkpi9_20' => $tabelcapaiankpi->hitungkpi9_20($nama_prodi)->getResult(),
            'hasilkpi9_21' => $tabelcapaiankpi->hitungkpi9_21($nama_prodi)->getResult(),
            //jumlah nilai bobot KPI per TA
            'totalkpi18' => $tabelcapaiankpi->jmlkpi18($nama_prodi)->getResult(),
            'totalkpi19' => $tabelcapaiankpi->jmlkpi19($nama_prodi)->getResult(),
            'totalkpi20' => $tabelcapaiankpi->jmlkpi20($nama_prodi)->getResult(),
            'totalkpi21' => $tabelcapaiankpi->jmlkpi21($nama_prodi)->getResult(),
            //nilai min nilai bobot KPI per TA
            'minimalkpi19' => $tabelcapaiankpi->minkpi19($nama_prodi)->getResult(),
            'minimalkpi20' => $tabelcapaiankpi->minkpi20($nama_prodi)->getResult(),
            'minimalkpi21' => $tabelcapaiankpi->minkpi21($nama_prodi)->getResult(),
            //nilai min nilai bobot KPI per TA
            'maximalkpi19' => $tabelcapaiankpi->maxkpi19($nama_prodi)->getResult(),
            'maximalkpi20' => $tabelcapaiankpi->maxkpi20($nama_prodi)->getResult(),
            'maximalkpi21' => $tabelcapaiankpi->maxkpi21($nama_prodi)->getResult(),
            //nilai min nilai bobot KPI per TA
            'averagekpi19' => $tabelcapaiankpi->avgkpi19($nama_prodi)->getResult(),
            'averagekpi20' => $tabelcapaiankpi->avgkpi20($nama_prodi)->getResult(),
            'averagekpi21' => $tabelcapaiankpi->avgkpi21($nama_prodi)->getResult(),
        ];
        return view('keuangan/grafik2', $data);
    }

    public function form_updatecapaian($id)
    {
        helper('form');
        $listcapaiankpi = new DataCapaianKpiModel();
        $ambildatacapaian = $listcapaiankpi->ambildatacapaian($id);


        if (count($ambildatacapaian->getResult()) > 0) {
            $row = $ambildatacapaian->getRow();
            $data = [
                'id' => $id,
                'tahun_ajaran' => $row->tahun_ajaran,
                'nama_prodi' => $row->nama_prodi,
                'level' => $row->level,
                'realisasi' => $row->realisasi,
                'nilai_bobot' => $row->nilai_bobot,
                //'upload_file' => $row->upload_file,
                'idkpi' => $row->idkpi,
                'id_butir_kpi' => $row->id_butir_kpi,

            ];
            echo view('keuangan/form_ubahcapaian', $data);
        }
    }
    public function updatecapaian()
    {
        $id = $this->request->getpost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getFile('uploadFile');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            //$nilai_bobot[$i] = $realisasi[$i] * $bobot[$i / 100];
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }

        $data = [
            'level' => $level,
            'nama_prodi' => $nama_prodi,
            'tahun_ajaran' => $tahun_ajaran,
            'realisasi' => $realisasi[$i],
            'nilai_bobot' => $nilai_bobot[$i],
            //'upload_file' => $upload_file[$i],
            'idkpi' => $idkpi[$i],
            'id_butir_kpi' => $id[$i],
        ];
        $listcapaiankpi = new DataCapaianKpiModel();
        $editcapaian = $listcapaiankpi->updatecapaian($data, $id);

        if ($editcapaian) {
            return redirect()->to('/keuangan/kesimpulan');
        }
    }
    public function grafik_rencana()
    {
        $grafikrencanakpi = new DataKpiButirModel();
        $data = [
            //'tampilgrafikrencana' => $grafikrencanakpi->get_grafik(),
            //standar 1 per TA
            'hasilrencanakpi_1' => $grafikrencanakpi->jml_kpi1()->getResultArray(),
            //standar 2 per TA
            'hasilrencanakpi_2' => $grafikrencanakpi->jml_kpi2()->getResultArray(),
            //standar 3 per TA
            'hasilrencanakpi_3' => $grafikrencanakpi->jml_kpi3()->getResultArray(),
            //standar 4 per TA
            'hasilrencanakpi_4' => $grafikrencanakpi->jml_kpi4()->getResultArray(),
            //standar 5 per TA
            'hasilrencanakpi_5' => $grafikrencanakpi->jml_kpi5()->getResultArray(),
            //standar 6 per TA
            'hasilrencanakpi_6' => $grafikrencanakpi->jml_kpi6()->getResultArray(),
            //standar 7 per TA
            'hasilrencanakpi_7' => $grafikrencanakpi->jml_kpi7()->getResultArray(),
            //standar 8 per TA
            'hasilrencanakpi_8' => $grafikrencanakpi->jml_kpi8()->getResultArray(),
            //standar 9 per TA
            'hasilrencanakpi_9' => $grafikrencanakpi->jml_kpi9()->getResultArray(),
            // 'tampilgrafikkpi' => $this->DataCapaianKpiModel->get_grafik(),
        ];
        //}
        return view('keuangan/grafik3_rencana', $data);
    }
    public function kesimpulan_grafik()
    {

        // $this->DataCapaianKpiModel = new DataCapaianKpiModel();
        $grafikcapaiankpi = new DataCapaianKpiModel();
        $nama_prodi = session('nama_prodi');
        //for ($i = 0; $i < count($id); $i++) {
        $data = [
            'tampilgrafikkpi' => $grafikcapaiankpi->get_grafik(),
            //standar 1 per TA
            'hasilkpi1_18' => $grafikcapaiankpi->hitungkpi1_18($nama_prodi)->getResultArray(),
            'hasilkpi1_19' => $grafikcapaiankpi->hitungkpi1_19($nama_prodi)->getResultArray(),
            'hasilkpi1_20' => $grafikcapaiankpi->hitungkpi1_20($nama_prodi)->getResultArray(),
            'hasilkpi1_21' => $grafikcapaiankpi->hitungkpi1_21($nama_prodi)->getResultArray(),
            //standar 2 per TA
            'hasilkpi2_18' => $grafikcapaiankpi->hitungkpi2_18($nama_prodi)->getResultArray(),
            'hasilkpi2_19' => $grafikcapaiankpi->hitungkpi2_19($nama_prodi)->getResultArray(),
            'hasilkpi2_20' => $grafikcapaiankpi->hitungkpi2_20($nama_prodi)->getResultArray(),
            'hasilkpi2_21' => $grafikcapaiankpi->hitungkpi2_21($nama_prodi)->getResultArray(),
            //standar 3 per TA
            'hasilkpi3_18' => $grafikcapaiankpi->hitungkpi3_18($nama_prodi)->getResultArray(),
            'hasilkpi3_19' => $grafikcapaiankpi->hitungkpi3_19($nama_prodi)->getResultArray(),
            'hasilkpi3_20' => $grafikcapaiankpi->hitungkpi3_20($nama_prodi)->getResultArray(),
            'hasilkpi3_21' => $grafikcapaiankpi->hitungkpi3_21($nama_prodi)->getResultArray(),
            //standar 4 per TA
            'hasilkpi4_18' => $grafikcapaiankpi->hitungkpi4_18($nama_prodi)->getResultArray(),
            'hasilkpi4_19' => $grafikcapaiankpi->hitungkpi4_19($nama_prodi)->getResultArray(),
            'hasilkpi4_20' => $grafikcapaiankpi->hitungkpi4_20($nama_prodi)->getResultArray(),
            'hasilkpi4_21' => $grafikcapaiankpi->hitungkpi4_21($nama_prodi)->getResultArray(),
            //standar 5 per TA
            'hasilkpi5_18' => $grafikcapaiankpi->hitungkpi5_18($nama_prodi)->getResultArray(),
            'hasilkpi5_19' => $grafikcapaiankpi->hitungkpi5_19($nama_prodi)->getResultArray(),
            'hasilkpi5_20' => $grafikcapaiankpi->hitungkpi5_20($nama_prodi)->getResultArray(),
            'hasilkpi5_21' => $grafikcapaiankpi->hitungkpi5_21($nama_prodi)->getResultArray(),
            //standar 6 per TA
            'hasilkpi6_18' => $grafikcapaiankpi->hitungkpi6_18($nama_prodi)->getResultArray(),
            'hasilkpi6_19' => $grafikcapaiankpi->hitungkpi6_19($nama_prodi)->getResultArray(),
            'hasilkpi6_20' => $grafikcapaiankpi->hitungkpi6_20($nama_prodi)->getResultArray(),
            'hasilkpi6_21' => $grafikcapaiankpi->hitungkpi6_21($nama_prodi)->getResultArray(),
            //standar 7 per TA
            'hasilkpi7_18' => $grafikcapaiankpi->hitungkpi7_18($nama_prodi)->getResultArray(),
            'hasilkpi7_19' => $grafikcapaiankpi->hitungkpi7_19($nama_prodi)->getResultArray(),
            'hasilkpi7_20' => $grafikcapaiankpi->hitungkpi7_20($nama_prodi)->getResultArray(),
            'hasilkpi7_21' => $grafikcapaiankpi->hitungkpi7_21($nama_prodi)->getResultArray(),
            //standar 8 per TA
            'hasilkpi8_18' => $grafikcapaiankpi->hitungkpi8_18($nama_prodi)->getResultArray(),
            'hasilkpi8_19' => $grafikcapaiankpi->hitungkpi8_19($nama_prodi)->getResultArray(),
            'hasilkpi8_20' => $grafikcapaiankpi->hitungkpi8_20($nama_prodi)->getResultArray(),
            'hasilkpi8_21' => $grafikcapaiankpi->hitungkpi8_21($nama_prodi)->getResultArray(),
            //standar 9 per TA
            'hasilkpi9_18' => $grafikcapaiankpi->hitungkpi9_18($nama_prodi)->getResultArray(),
            'hasilkpi9_19' => $grafikcapaiankpi->hitungkpi9_19($nama_prodi)->getResultArray(),
            'hasilkpi9_20' => $grafikcapaiankpi->hitungkpi9_20($nama_prodi)->getResultArray(),
            'hasilkpi9_21' => $grafikcapaiankpi->hitungkpi9_21($nama_prodi)->getResultArray(),


            // 'tampilgrafikkpi' => $this->DataCapaianKpiModel->get_grafik(),
        ];
        //}
        return view('keuangan/grafik3', $data);
    }



    // public function form_ubahpass($id = null)
    // {
    //     $model = new usersModel();
    //     $username = session('username');
    //     $data['user'] = $model->where('id', $id)->first();
    //     return view('/keuangan/ubah_pwd', $data);
    // }
    // public function ubahpwd()
    // {
    //     $model = new usersModel();
    //     $id = session('id');
    //     //exit();
    //     $data = [
    //         'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
    //     ];
    //     $save = $model->update($id, $data);

    //     if ($save) {
    //         session()->setFlashdata('pesan', '
    // 	<div class="alert alert-success">
    // 		<button type="button" class="close" data-dismiss="alert">&times;</button>
    // 		<strong>Berhasil!</strong> Password anda telah berubah.
    // 	</div>');
    //     } else {
    //         session()->setFlashdata('pesan', '
    // 	<div class="alert alert-danger">
    // 		<button type="button" class="close" data-dismiss="alert">&times;</button>
    // 		<strong>Tidak berhasil!</strong> Password anda tidak berubah.
    // 	</div>');
    //     }
    //     //print_r($save);
    //     //exit();


    //     return redirect()->to(base_url('keuangan/form_ubahpass'));
    // }

    public function savecapaian1()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getFile('uploadFile');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');


        //dd($upload_file);
        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            //$nilai_bobot[$i] = $realisasi[$i] * $bobot[$i / 100];
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $upload_file[$i],
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }


        return redirect()->to(base_url('keuangan/inputcapaian/1'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }

    public function savecapaian2()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/2'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }

    public function savecapaian3()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/3'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }

    public function savecapaian4()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/4'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }

    public function savecapaian5()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/5'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }

    public function savecapaian6()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/6'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }

    public function savecapaian7()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/7'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }
    public function savecapaian8()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/8'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }

    public function savecapaian9()
    {
        $capaianmodel = new DataCapaianKpiModel();
        $db      = \Config\Database::connect();
        //$detail = $db->table('tabel_butir_kpi');
        $detail = $db->table('tabel_capaian_kpi');

        $id = $this->request->getPost('id');
        $realisasi = $this->request->getPost('txtRealisasi');
        $bobot = $this->request->getPost('bobot');
        $level = $this->request->getPost('level');
        $nama_prodi = $this->request->getPost('nama_prodi');
        $tahun_ajaran = $this->request->getPost('tahun_ajaran');
        //$upload_file = $this->request->getPost('upload_file');
        $idkpi = $this->request->getPost('idkpi');
        $id_butir_kpi = $this->request->getPost('id_butir_kpi');

        $nilai_bobot = array();
        for ($i = 0; $i < count($id); $i++) {
            $nilai_bobot[$i] = ((float)$realisasi[$i] * (float)$bobot[$i]);
        }
        for ($i = 0; $i < count($id); $i++) {
            $data = [
                'level' => $level,
                'nama_prodi' => $nama_prodi,
                'tahun_ajaran' => $tahun_ajaran,
                'realisasi' => $realisasi[$i],
                'nilai_bobot' => $nilai_bobot[$i],
                //'upload_file' => $this->request->getPost('upload_file'),
                'idkpi' => $idkpi[$i],
                'id_butir_kpi' => $id[$i],
            ];
            $save_capaian = $capaianmodel->simpancapaian($data);
        }
        if ($save_capaian) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Data Capaian telah masuk ke database.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Data Capaian tidak masuk ke database.
		</div>');
        }

        return redirect()->to(base_url('keuangan/inputcapaian/9'));
        // echo "<br><br>";
        // print_r($nilai_bobot);
        // exit();
    }
}
