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


class Rektorat extends BaseController
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
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];
        return view('/rektorat/Dashboard', $data);
    }
    public function listcapaiankpi()
    {
        $listcapaiankpi = new DataCapaianKpiModel();
        $data = [
            'tampilcapaiankpi' => $listcapaiankpi->tampilcapaiankpi()->getResult(),
        ];
        echo view('/rektorat/ListCapaianKpi', $data);
    }
    public function listRkatProdi()
    {
        $model = new DetailRkatModel();
        $data = [
            'detail_rkat' => $this->DetailRkatModel->gabungRektor(),
            'userprodi' => $this->usersModel->where('level', 'prodi')->findAll(),
        ];
        echo view('/rektorat/ListRkatProdi', $data);
    }
    public function listRkatUnit()
    {
        $model = new DetailRkatModel();
        $data = [
            'detail_rkat' => $this->DetailRkatModel->gabungRektor(),
            'userunit' => $this->usersModel->where('level', 'unit')->findAll(),
        ];
        echo view('/rektorat/ListRkatUnit', $data);
    }
    
    public function inputRencana()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'kpi' => $this->ModelKpiAdmin->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];

        return view('/rektorat/inputRencana', $data);
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
        return redirect()->to(base_url('rektorat/inputRencana'))->with('status', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
    }

    public function inputRealisasi()
    {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            // 'detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik2' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->join('user', 'user.id=detail_rkat2.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
            // 'count_detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->countAllResults()
        ];
        return view('rektorat/inputRealisasi', $data);
    }
    public function update()
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
        return redirect()->to(base_url('rektorat/inputRealisasi'));
    }
    public function kesimpulan()
    {
        return view('rektorat/kesimpulan');
    }
    public function listRkatRektorat()
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
        echo view('/rektorat/ListRkatRektorat', $data);
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
        return view('rektorat/RincianRkatRektorat', $data);
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
        return redirect()->to(base_url('rektorat/rincian'))->with('statusSimpan', '
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
           </div>
        ');
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
        return view('/rektorat/GrafikSerapProdi', $data);
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
        return view('rektorat/GrafikSerapUnit', $data);
    }

    public function tabelcapaiankpi()
    {
        $tabelcapaiankpi = new DataKpiButirModel();


        return view('/rektorat/TabelCapaian');
    }

    public function tabelprodi()
    {
        $tabelcapaianprodi = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';
        $data = [
            //jumlah nilai bobot KPI prodi akuntansi
            'totalkpi19_akt' => $tabelcapaianprodi->jmlkpi19prodi('Akuntansi')->getResult(),
            'totalkpi20_akt' => $tabelcapaianprodi->jmlkpi20prodi('Akuntansi')->getResult(),
            'totalkpi21_akt' => $tabelcapaianprodi->jmlkpi21prodi('Akuntansi')->getResult(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi19_mnj' => $tabelcapaianprodi->jmlkpi19prodi('Manajemen')->getResult(),
            'totalkpi20_mnj' => $tabelcapaianprodi->jmlkpi20prodi('Manajemen')->getResult(),
            'totalkpi21_mnj' => $tabelcapaianprodi->jmlkpi21prodi('Manajemen')->getResult(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi19_psi' => $tabelcapaianprodi->jmlkpi19prodi('Psikologi')->getResult(),
            'totalkpi20_psi' => $tabelcapaianprodi->jmlkpi20prodi('Psikologi')->getResult(),
            'totalkpi21_psi' => $tabelcapaianprodi->jmlkpi21prodi('Psikologi')->getResult(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi19_kom' => $tabelcapaianprodi->jmlkpi19prodi('Ilmu Komunikasi')->getResult(),
            'totalkpi20_kom' => $tabelcapaianprodi->jmlkpi20prodi('Ilmu Komunikasi')->getResult(),
            'totalkpi21_kom' => $tabelcapaianprodi->jmlkpi21prodi('Ilmu Komunikasi')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dpi' => $tabelcapaianprodi->jmlkpi19prodi('Desain Produk')->getResult(),
            'totalkpi20_dpi' => $tabelcapaianprodi->jmlkpi20prodi('Desain Produk')->getResult(),
            'totalkpi21_dpi' => $tabelcapaianprodi->jmlkpi21prodi('Desain Produk')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dkv' => $tabelcapaianprodi->jmlkpi19prodi('Desain Komunikasi Visual')->getResult(),
            'totalkpi20_dkv' => $tabelcapaianprodi->jmlkpi20prodi('Desain Komunikasi Visual')->getResult(),
            'totalkpi21_dkv' => $tabelcapaianprodi->jmlkpi21prodi('Desain Komunikasi Visual')->getResult(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi19_inf' => $tabelcapaianprodi->jmlkpi19prodi('Informatika')->getResult(),
            'totalkpi20_inf' => $tabelcapaianprodi->jmlkpi20prodi('Informatika')->getResult(),
            'totalkpi21_inf' => $tabelcapaianprodi->jmlkpi21prodi('Informatika')->getResult(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi19_sif' => $tabelcapaianprodi->jmlkpi19prodi('Sistem Informasi')->getResult(),
            'totalkpi20_sif' => $tabelcapaianprodi->jmlkpi20prodi('Sistem Informasi')->getResult(),
            'totalkpi21_sif' => $tabelcapaianprodi->jmlkpi21prodi('Sistem Informasi')->getResult(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi19_tsp' => $tabelcapaianprodi->jmlkpi19prodi('Teknik Sipil')->getResult(),
            'totalkpi20_tsp' => $tabelcapaianprodi->jmlkpi20prodi('Teknik Sipil')->getResult(),
            'totalkpi21_tsp' => $tabelcapaianprodi->jmlkpi21prodi('Teknik Sipil')->getResult(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi19_ars' => $tabelcapaianprodi->jmlkpi19prodi('Arsitektur')->getResult(),
            'totalkpi20_ars' => $tabelcapaianprodi->jmlkpi20prodi('Arsitektur')->getResult(),
            'totalkpi21_ars' => $tabelcapaianprodi->jmlkpi21prodi('Arsitektur')->getResult(),

            //nilai min nilai bobot KPI per TA
            'minimalkpi19_all' => $tabelcapaianprodi->minkpi19_all()->getResult(),
            'minimalkpi20_all' => $tabelcapaianprodi->minkpi20_all()->getResult(),
            'minimalkpi21_all' => $tabelcapaianprodi->minkpi21_all()->getResult(),
            //nilai min nilai bobot KPI per TA
            'maximalkpi19_all' => $tabelcapaianprodi->maxkpi19_all()->getResult(),
            'maximalkpi20_all' => $tabelcapaianprodi->maxkpi20_all()->getResult(),
            'maximalkpi21_all' => $tabelcapaianprodi->maxkpi21_all()->getResult(),
            //nilai min nilai bobot KPI per TA
            'averagekpi19_all' => $tabelcapaianprodi->avgkpi19_all()->getResult(),
            'averagekpi20_all' => $tabelcapaianprodi->avgkpi20_all()->getResult(),
            'averagekpi21_all' => $tabelcapaianprodi->avgkpi21_all()->getResult(),
        ];
        return view('/rektorat/TabelCapaianProdi', $data);
    }
    public function tabelunit()
    {
        $tabelcapaianprodi = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';
        $data = [
            //jumlah nilai bobot KPI prodi akuntansi
            'totalkpi19_bp' => $tabelcapaianprodi->jmlkpi19unit('Biro Pendidikan')->getResult(),
            'totalkpi20_bp' => $tabelcapaianprodi->jmlkpi20unit('Biro Pendidikan')->getResult(),
            'totalkpi21_bp' => $tabelcapaianprodi->jmlkpi21unit('Biro Pendidikan')->getResult(),

            'totalkpi19_jcal' => $tabelcapaianprodi->jmlkpi19unit('Jaya Center for Advanced Language')->getResult(),
            'totalkpi20_jcal' => $tabelcapaianprodi->jmlkpi20unit('Jaya Center for Advanced Language')->getResult(),
            'totalkpi21_jcal' => $tabelcapaianprodi->jmlkpi21unit('Jaya Center for Advanced Language')->getResult(),

            'totalkpi19_bkal' => $tabelcapaianprodi->jmlkpi19unit('Biro Kemahasiswaan dan Alumni')->getResult(),
            'totalkpi20_bkal' => $tabelcapaianprodi->jmlkpi20unit('Biro Kemahasiswaan dan Alumni')->getResult(),
            'totalkpi21_bkal' => $tabelcapaianprodi->jmlkpi21unit('Biro Kemahasiswaan dan Alumni')->getResult(),

            'totalkpi19_keuangan' => $tabelcapaianprodi->jmlkpi19unit('Keuangan')->getResult(),
            'totalkpi20_keuangan' => $tabelcapaianprodi->jmlkpi20unit('Keuangan')->getResult(),
            'totalkpi21_keuangan' => $tabelcapaianprodi->jmlkpi21unit('Keuangan')->getResult(),

            'totalkpi19_khi' => $tabelcapaianprodi->jmlkpi19unit('Kerjasama dan Hubungan Internasional')->getResult(),
            'totalkpi20_khi' => $tabelcapaianprodi->jmlkpi20unit('Kerjasama dan Hubungan Internasional')->getResult(),
            'totalkpi21_khi' => $tabelcapaianprodi->jmlkpi21unit('Kerjasama dan Hubungan Internasional')->getResult(),

            'totalkpi19_perpustakaan' => $tabelcapaianprodi->jmlkpi19unit('Perpustakaan')->getResult(),
            'totalkpi20_perpustakaan' => $tabelcapaianprodi->jmlkpi20unit('Perpustakaan')->getResult(),
            'totalkpi21_perpustakaan' => $tabelcapaianprodi->jmlkpi21unit('Perpustakaan')->getResult(),

            'totalkpi19_pha' => $tabelcapaianprodi->jmlkpi19unit('Promotion, Humas dan Admisi')->getResult(),
            'totalkpi20_pha' => $tabelcapaianprodi->jmlkpi20unit('Promotion, Humas dan Admisi')->getResult(),
            'totalkpi21_pha' => $tabelcapaianprodi->jmlkpi21unit('Promotion, Humas dan Admisi')->getResult(),

            'totalkpi19_lpmu' => $tabelcapaianprodi->jmlkpi19unit('Lembaga Penjaminan Mutu Universitas')->getResult(),
            'totalkpi20_lpmu' => $tabelcapaianprodi->jmlkpi20unit('Lembaga Penjaminan Mutu Universitas')->getResult(),
            'totalkpi21_lpmu' => $tabelcapaianprodi->jmlkpi21unit('Lembaga Penjaminan Mutu Universitas')->getResult(),

            'totalkpi19_jlp' => $tabelcapaianprodi->jmlkpi19unit('Jaya Launch Pad')->getResult(),
            'totalkpi20_jlp' => $tabelcapaianprodi->jmlkpi20unit('Jaya Launch Pad')->getResult(),
            'totalkpi21_jlp' => $tabelcapaianprodi->jmlkpi21unit('Jaya Launch Pad')->getResult(),

            'totalkpi19_jsdp' => $tabelcapaianprodi->jmlkpi19unit('Jaya Softskill Development Program')->getResult(),
            'totalkpi20_jsdp' => $tabelcapaianprodi->jmlkpi20unit('Jaya Softskill Development Program')->getResult(),
            'totalkpi21_jsdp' => $tabelcapaianprodi->jmlkpi21unit('Jaya Softskill Development Program')->getResult(),

            'totalkpi19_lse' => $tabelcapaianprodi->jmlkpi19unit('Liberal Art, Sustainable and Enterpreneurship')->getResult(),
            'totalkpi20_lse' => $tabelcapaianprodi->jmlkpi20unit('Liberal Art, Sustainable and Enterpreneurship')->getResult(),
            'totalkpi21_lse' => $tabelcapaianprodi->jmlkpi21unit('Liberal Art, Sustainable and Enterpreneurship')->getResult(),

            'totalkpi19_tik' => $tabelcapaianprodi->jmlkpi19unit('Teknologi Informasi dan Komunikasi')->getResult(),
            'totalkpi20_tik' => $tabelcapaianprodi->jmlkpi20unit('Teknologi Informasi dan Komunikasi')->getResult(),
            'totalkpi21_tik' => $tabelcapaianprodi->jmlkpi21unit('Teknologi Informasi dan Komunikasi')->getResult(),

            'totalkpi19_umum' => $tabelcapaianprodi->jmlkpi19unit('Umum')->getResult(),
            'totalkpi20_umum' => $tabelcapaianprodi->jmlkpi20unit('Umum')->getResult(),
            'totalkpi21_umum' => $tabelcapaianprodi->jmlkpi21unit('Umum')->getResult(),

            'totalkpi19_bpsdm' => $tabelcapaianprodi->jmlkpi19unit('BPSDM')->getResult(),
            'totalkpi20_bpsdm' => $tabelcapaianprodi->jmlkpi20unit('BPSDM')->getResult(),
            'totalkpi21_bpsdm' => $tabelcapaianprodi->jmlkpi21unit('BPSDM')->getResult(),

            'totalkpi19_lp2m' => $tabelcapaianprodi->jmlkpi19unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResult(),
            'totalkpi20_lp2m' => $tabelcapaianprodi->jmlkpi20unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResult(),
            'totalkpi21_lp2m' => $tabelcapaianprodi->jmlkpi21unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResult(),

            //nilai min nilai bobot KPI per TA
            'minimalkpi19_unit' => $tabelcapaianprodi->minkpi19_unit()->getResult(),
            'minimalkpi20_unit' => $tabelcapaianprodi->minkpi20_unit()->getResult(),
            'minimalkpi21_unit' => $tabelcapaianprodi->minkpi21_unit()->getResult(),
            //nilai min nilai bobot KPI per TA
            'maximalkpi19_unit' => $tabelcapaianprodi->maxkpi19_unit()->getResult(),
            'maximalkpi20_unit' => $tabelcapaianprodi->maxkpi20_unit()->getResult(),
            'maximalkpi21_unit' => $tabelcapaianprodi->maxkpi21_unit()->getResult(),
            //nilai min nilai bobot KPI per TA
            'averagekpi19_unit' => $tabelcapaianprodi->avgkpi19_unit()->getResult(),
            'averagekpi20_unit' => $tabelcapaianprodi->avgkpi20_unit()->getResult(),
            'averagekpi21_unit' => $tabelcapaianprodi->avgkpi21_unit()->getResult(),
        ];
        return view('/rektorat/TabelCapaianUnit', $data);
    }

    public function grafikcapaian()
    {
        $grafikrencanakpi = new DataCapaianKpiModel();
        $data = [
            // //'tampilgrafikrencana' => $grafikrencanakpi->get_grafik(),
            // //standar 1 per TA
            // 'hasilrencanakpi_1' => $grafikrencanakpi->jml_kpi1()->getResultArray(),
            // //standar 2 per TA
            // 'hasilrencanakpi_2' => $grafikrencanakpi->jml_kpi2()->getResultArray(),
            // //standar 3 per TA
            // 'hasilrencanakpi_3' => $grafikrencanakpi->jml_kpi3()->getResultArray(),
            // //standar 4 per TA
            // 'hasilrencanakpi_4' => $grafikrencanakpi->jml_kpi4()->getResultArray(),
            // //standar 5 per TA
            // 'hasilrencanakpi_5' => $grafikrencanakpi->jml_kpi5()->getResultArray(),
            // //standar 6 per TA
            // 'hasilrencanakpi_6' => $grafikrencanakpi->jml_kpi6()->getResultArray(),
            // //standar 7 per TA
            // 'hasilrencanakpi_7' => $grafikrencanakpi->jml_kpi7()->getResultArray(),
            // //standar 8 per TA
            // 'hasilrencanakpi_8' => $grafikrencanakpi->jml_kpi8()->getResultArray(),
            // //standar 9 per TA
            // 'hasilrencanakpi_9' => $grafikrencanakpi->jml_kpi9()->getResultArray(),
            // // 'tampilgrafikkpi' => $this->DataCapaianKpiModel->get_grafik(),
            'averagekpi19prodi' => $grafikrencanakpi->avgkpi19_all()->getResultArray(),
            'averagekpi20prodi' => $grafikrencanakpi->avgkpi20_all()->getResultArray(),
            'averagekpi21prodi' => $grafikrencanakpi->avgkpi21_all()->getResultArray(),

            'averagekpi19unit' => $grafikrencanakpi->avgkpi19_unit()->getResultArray(),
            'averagekpi20unit' => $grafikrencanakpi->avgkpi20_unit()->getResultArray(),
            'averagekpi21unit' => $grafikrencanakpi->avgkpi21_unit()->getResultArray(),

        ];
        //}
        // return view('kpi/grafik3_rencana', $data);

        return view('/rektorat/GrafikCapaian', $data);
    }
    public function grafikprodi()
    {
        $grafikrencana = new DataKpiButirModel();
        $grafikcapaian_prodi = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';

        $data = [

            'hasilrencanakpi_1' => $grafikrencana->jml_kpi1()->getResultArray(),
            //standar 2 per TA
            'hasilrencanakpi_2' => $grafikrencana->jml_kpi2()->getResultArray(),
            //standar 3 per TA
            'hasilrencanakpi_3' => $grafikrencana->jml_kpi3()->getResultArray(),
            //standar 4 per TA
            'hasilrencanakpi_4' => $grafikrencana->jml_kpi4()->getResultArray(),
            //standar 5 per TA
            'hasilrencanakpi_5' => $grafikrencana->jml_kpi5()->getResultArray(),
            //standar 6 per TA
            'hasilrencanakpi_6' => $grafikrencana->jml_kpi6()->getResultArray(),
            //standar 7 per TA
            'hasilrencanakpi_7' => $grafikrencana->jml_kpi7()->getResultArray(),
            //standar 8 per TA
            'hasilrencanakpi_8' => $grafikrencana->jml_kpi8()->getResultArray(),
            //standar 9 per TA
            'hasilrencanakpi_9' => $grafikrencana->jml_kpi9()->getResultArray(),

            //jumlah nilai bobot KPI prodi akuntansi
            'totalkpi19_akt' => $grafikcapaian_prodi->jmlkpi19prodi('Akuntansi')->getResultArray(),
            'totalkpi20_akt' => $grafikcapaian_prodi->jmlkpi20prodi('Akuntansi')->getResultArray(),
            'totalkpi21_akt' => $grafikcapaian_prodi->jmlkpi21prodi('Akuntansi')->getResultArray(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi19_mnj' => $grafikcapaian_prodi->jmlkpi19prodi('Manajemen')->getResultArray(),
            'totalkpi20_mnj' => $grafikcapaian_prodi->jmlkpi20prodi('Manajemen')->getResultArray(),
            'totalkpi21_mnj' => $grafikcapaian_prodi->jmlkpi21prodi('Manajemen')->getResultArray(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi19_psi' => $grafikcapaian_prodi->jmlkpi19prodi('Psikologi')->getResultArray(),
            'totalkpi20_psi' => $grafikcapaian_prodi->jmlkpi20prodi('Psikologi')->getResultArray(),
            'totalkpi21_psi' => $grafikcapaian_prodi->jmlkpi21prodi('Psikologi')->getResultArray(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi19_kom' => $grafikcapaian_prodi->jmlkpi19prodi('Ilmu Komunikasi')->getResultArray(),
            'totalkpi20_kom' => $grafikcapaian_prodi->jmlkpi20prodi('Ilmu Komunikasi')->getResultArray(),
            'totalkpi21_kom' => $grafikcapaian_prodi->jmlkpi21prodi('Ilmu Komunikasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dpi' => $grafikcapaian_prodi->jmlkpi19prodi('Desain Produk')->getResultArray(),
            'totalkpi20_dpi' => $grafikcapaian_prodi->jmlkpi20prodi('Desain Produk')->getResultArray(),
            'totalkpi21_dpi' => $grafikcapaian_prodi->jmlkpi21prodi('Desain Produk')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dkv' => $grafikcapaian_prodi->jmlkpi19prodi('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi20_dkv' => $grafikcapaian_prodi->jmlkpi20prodi('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi21_dkv' => $grafikcapaian_prodi->jmlkpi21prodi('Desain Komunikasi Visual')->getResultArray(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi19_inf' => $grafikcapaian_prodi->jmlkpi19prodi('Informatika')->getResultArray(),
            'totalkpi20_inf' => $grafikcapaian_prodi->jmlkpi20prodi('Informatika')->getResultArray(),
            'totalkpi21_inf' => $grafikcapaian_prodi->jmlkpi21prodi('Informatika')->getResultArray(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi19_sif' => $grafikcapaian_prodi->jmlkpi19prodi('Sistem Informasi')->getResultArray(),
            'totalkpi20_sif' => $grafikcapaian_prodi->jmlkpi20prodi('Sistem Informasi')->getResultArray(),
            'totalkpi21_sif' => $grafikcapaian_prodi->jmlkpi21prodi('Sistem Informasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi19_tsp' => $grafikcapaian_prodi->jmlkpi19prodi('Teknik Sipil')->getResultArray(),
            'totalkpi20_tsp' => $grafikcapaian_prodi->jmlkpi20prodi('Teknik Sipil')->getResultArray(),
            'totalkpi21_tsp' => $grafikcapaian_prodi->jmlkpi21prodi('Teknik Sipil')->getResultArray(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi19_ars' => $grafikcapaian_prodi->jmlkpi19prodi('Arsitektur')->getResultArray(),
            'totalkpi20_ars' => $grafikcapaian_prodi->jmlkpi20prodi('Arsitektur')->getResultArray(),
            'totalkpi21_ars' => $grafikcapaian_prodi->jmlkpi21prodi('Arsitektur')->getResultArray(),
        ];


        return view('/rektorat/GrafikCapaianProdi', $data);
    }
    public function grafikunit()
    {
        $grafikrencana = new DataKpiButirModel();
        $grafikcapaian_unit = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';

        $data = [

            'hasilrencanakpi_1' => $grafikrencana->jml_kpi1()->getResultArray(),
            //standar 2 per TA
            'hasilrencanakpi_2' => $grafikrencana->jml_kpi2()->getResultArray(),
            //standar 3 per TA
            'hasilrencanakpi_3' => $grafikrencana->jml_kpi3()->getResultArray(),
            //standar 4 per TA
            'hasilrencanakpi_4' => $grafikrencana->jml_kpi4()->getResultArray(),
            //standar 5 per TA
            'hasilrencanakpi_5' => $grafikrencana->jml_kpi5()->getResultArray(),
            //standar 6 per TA
            'hasilrencanakpi_6' => $grafikrencana->jml_kpi6()->getResultArray(),
            //standar 7 per TA
            'hasilrencanakpi_7' => $grafikrencana->jml_kpi7()->getResultArray(),
            //standar 8 per TA
            'hasilrencanakpi_8' => $grafikrencana->jml_kpi8()->getResultArray(),
            //standar 9 per TA
            'hasilrencanakpi_9' => $grafikrencana->jml_kpi9()->getResultArray(),

            'totalkpi19_bp' => $grafikcapaian_unit->jmlkpi19unit('Biro Pendidikan')->getResultArray(),
            'totalkpi20_bp' => $grafikcapaian_unit->jmlkpi20unit('Biro Pendidikan')->getResultArray(),
            'totalkpi21_bp' => $grafikcapaian_unit->jmlkpi21unit('Biro Pendidikan')->getResultArray(),

            'totalkpi19_jcal' => $grafikcapaian_unit->jmlkpi19unit('Jaya Center for Advanced Language')->getResultArray(),
            'totalkpi20_jcal' => $grafikcapaian_unit->jmlkpi20unit('Jaya Center for Advanced Language')->getResultArray(),
            'totalkpi21_jcal' => $grafikcapaian_unit->jmlkpi21unit('Jaya Center for Advanced Language')->getResultArray(),

            'totalkpi19_bkal' => $grafikcapaian_unit->jmlkpi19unit('Biro Kemahasiswaan dan Alumni')->getResultArray(),
            'totalkpi20_bkal' => $grafikcapaian_unit->jmlkpi20unit('Biro Kemahasiswaan dan Alumni')->getResultArray(),
            'totalkpi21_bkal' => $grafikcapaian_unit->jmlkpi21unit('Biro Kemahasiswaan dan Alumni')->getResultArray(),

            'totalkpi19_keuangan' => $grafikcapaian_unit->jmlkpi19unit('Keuangan')->getResultArray(),
            'totalkpi20_keuangan' => $grafikcapaian_unit->jmlkpi20unit('Keuangan')->getResultArray(),
            'totalkpi21_keuangan' => $grafikcapaian_unit->jmlkpi21unit('Keuangan')->getResultArray(),

            'totalkpi19_khi' => $grafikcapaian_unit->jmlkpi19unit('Kerjasama dan Hubungan Internasional')->getResultArray(),
            'totalkpi20_khi' => $grafikcapaian_unit->jmlkpi20unit('Kerjasama dan Hubungan Internasional')->getResultArray(),
            'totalkpi21_khi' => $grafikcapaian_unit->jmlkpi21unit('Kerjasama dan Hubungan Internasional')->getResultArray(),

            'totalkpi19_perpustakaan' => $grafikcapaian_unit->jmlkpi19unit('Perpustakaan')->getResultArray(),
            'totalkpi20_perpustakaan' => $grafikcapaian_unit->jmlkpi20unit('Perpustakaan')->getResultArray(),
            'totalkpi21_perpustakaan' => $grafikcapaian_unit->jmlkpi21unit('Perpustakaan')->getResultArray(),

            'totalkpi19_pha' => $grafikcapaian_unit->jmlkpi19unit('Promotion, Humas dan Admisi')->getResultArray(),
            'totalkpi20_pha' => $grafikcapaian_unit->jmlkpi20unit('Promotion, Humas dan Admisi')->getResultArray(),
            'totalkpi21_pha' => $grafikcapaian_unit->jmlkpi21unit('Promotion, Humas dan Admisi')->getResultArray(),

            'totalkpi19_lpmu' => $grafikcapaian_unit->jmlkpi19unit('Lembaga Penjaminan Mutu Universitas')->getResultArray(),
            'totalkpi20_lpmu' => $grafikcapaian_unit->jmlkpi20unit('Lembaga Penjaminan Mutu Universitas')->getResultArray(),
            'totalkpi21_lpmu' => $grafikcapaian_unit->jmlkpi21unit('Lembaga Penjaminan Mutu Universitas')->getResultArray(),

            'totalkpi19_jlp' => $grafikcapaian_unit->jmlkpi19unit('Jaya Launch Pad')->getResultArray(),
            'totalkpi20_jlp' => $grafikcapaian_unit->jmlkpi20unit('Jaya Launch Pad')->getResultArray(),
            'totalkpi21_jlp' => $grafikcapaian_unit->jmlkpi21unit('Jaya Launch Pad')->getResultArray(),

            'totalkpi19_jsdp' => $grafikcapaian_unit->jmlkpi19unit('Jaya Softskill Development Program')->getResultArray(),
            'totalkpi20_jsdp' => $grafikcapaian_unit->jmlkpi20unit('Jaya Softskill Development Program')->getResultArray(),
            'totalkpi21_jsdp' => $grafikcapaian_unit->jmlkpi21unit('Jaya Softskill Development Program')->getResultArray(),

            'totalkpi19_lse' => $grafikcapaian_unit->jmlkpi19unit('Liberal Art, Sustainable and Enterpreneurship')->getResultArray(),
            'totalkpi20_lse' => $grafikcapaian_unit->jmlkpi20unit('Liberal Art, Sustainable and Enterpreneurship')->getResultArray(),
            'totalkpi21_lse' => $grafikcapaian_unit->jmlkpi21unit('Liberal Art, Sustainable and Enterpreneurship')->getResultArray(),

            'totalkpi19_tik' => $grafikcapaian_unit->jmlkpi19unit('Teknologi Informasi dan Komunikasi')->getResultArray(),
            'totalkpi20_tik' => $grafikcapaian_unit->jmlkpi20unit('Teknologi Informasi dan Komunikasi')->getResultArray(),
            'totalkpi21_tik' => $grafikcapaian_unit->jmlkpi21unit('Teknologi Informasi dan Komunikasi')->getResultArray(),

            'totalkpi19_umum' => $grafikcapaian_unit->jmlkpi19unit('Umum')->getResultArray(),
            'totalkpi20_umum' => $grafikcapaian_unit->jmlkpi20unit('Umum')->getResultArray(),
            'totalkpi21_umum' => $grafikcapaian_unit->jmlkpi21unit('Umum')->getResultArray(),

            'totalkpi19_bpsdm' => $grafikcapaian_unit->jmlkpi19unit('BPSDM')->getResultArray(),
            'totalkpi20_bpsdm' => $grafikcapaian_unit->jmlkpi20unit('BPSDM')->getResultArray(),
            'totalkpi21_bpsdm' => $grafikcapaian_unit->jmlkpi21unit('BPSDM')->getResultArray(),

            'totalkpi19_lp2m' => $grafikcapaian_unit->jmlkpi19unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResultArray(),
            'totalkpi20_lp2m' => $grafikcapaian_unit->jmlkpi20unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResultArray(),
            'totalkpi21_lp2m' => $grafikcapaian_unit->jmlkpi21unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResultArray(),

        ];


        return view('/rektorat/GrafikCapaianUnit', $data);
    }
    public function form_ubahpass($id = null)
    {
        $model = new usersModel();
        $username = session('username');
        $data['user'] = $model->where('id', $id)->first();
        return view('/rektorat/FormUbahPass', $data);
    }
    public function ubahpwd()
    {
        $model = new usersModel();
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


        return redirect()->to(base_url('rektorat/form_ubahpass'));
    }
}
