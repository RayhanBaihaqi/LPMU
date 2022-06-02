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
use App\Models\UsersModel;


class Rektorat extends BaseController
{
    public function __construct()
    {
        $this->DetailRkatModel = new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
        $this->PaguModel = new PaguRkatModel();
        $this->UsersModel = new UsersModel();
        $this->ModelKpiAdmin = new ModelKpiAdmin();
    }
    public function index()
    {
        $model = new PersenSerapModel();
        $username = session('username');
        $data = [
            'tahun' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->findAll(),
            'tahunAktif' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
            'seluruhDataUser' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->findAll(),
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
            'userprodi' => $this->UsersModel->where('level', 'prodi')->findAll(),
        ];
        echo view('/rektorat/ListRkatProdi', $data);
    }
    public function listRkatUnit()
    {
        $model = new DetailRkatModel();
        $data = [
            'detail_rkat' => $this->DetailRkatModel->gabungRektor(),
            'userunit' => $this->UsersModel->where('level', 'unit')->findAll(),
        ];
        echo view('/rektorat/ListRkatUnit', $data);
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

    public function grafikSerap()
    {
        $model = new PersenSerapModel();
        $username = session('username');
        $data = [
            'tahun' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->findAll(),
            'tahunAktif' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('username', $username)->where('aktif', '1')->findAll(),
            'seluruhDataUserProdi' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('level', 'prodi')->findAll(),
            'seluruhDataUserUnit' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('level', 'unit')->findAll(),
            'seluruhDataUserRektorat' => $model->join('tahun_akademik', 'tahun_akademik.id_tahun=persen_serap.id_tahun')->join('user', 'user.id=persen_serap.id_user')->where('level', 'rektorat')->findAll(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
        ];
        return view('/rektorat/GrafikSerap', $data);
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
            'totalkpi18_akt' => $tabelcapaianprodi->jmlkpi18akt('Akuntansi')->getResult(),
            'totalkpi19_akt' => $tabelcapaianprodi->jmlkpi19akt('Akuntansi')->getResult(),
            'totalkpi20_akt' => $tabelcapaianprodi->jmlkpi20akt('Akuntansi')->getResult(),
            'totalkpi21_akt' => $tabelcapaianprodi->jmlkpi21akt('Akuntansi')->getResult(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi18_mnj' => $tabelcapaianprodi->jmlkpi18mnj('Manajemen')->getResult(),
            'totalkpi19_mnj' => $tabelcapaianprodi->jmlkpi19mnj('Manajemen')->getResult(),
            'totalkpi20_mnj' => $tabelcapaianprodi->jmlkpi20mnj('Manajemen')->getResult(),
            'totalkpi21_mnj' => $tabelcapaianprodi->jmlkpi21mnj('Manajemen')->getResult(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi18_psi' => $tabelcapaianprodi->jmlkpi18psi('Psikologi')->getResult(),
            'totalkpi19_psi' => $tabelcapaianprodi->jmlkpi19psi('Psikologi')->getResult(),
            'totalkpi20_psi' => $tabelcapaianprodi->jmlkpi20psi('Psikologi')->getResult(),
            'totalkpi21_psi' => $tabelcapaianprodi->jmlkpi21psi('Psikologi')->getResult(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi18_kom' => $tabelcapaianprodi->jmlkpi18kom('Ilmu Komunikasi')->getResult(),
            'totalkpi19_kom' => $tabelcapaianprodi->jmlkpi19kom('Ilmu Komunikasi')->getResult(),
            'totalkpi20_kom' => $tabelcapaianprodi->jmlkpi20kom('Ilmu Komunikasi')->getResult(),
            'totalkpi21_kom' => $tabelcapaianprodi->jmlkpi21kom('Ilmu Komunikasi')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dpi' => $tabelcapaianprodi->jmlkpi18dpi('Desain Produk')->getResult(),
            'totalkpi19_dpi' => $tabelcapaianprodi->jmlkpi19dpi('Desain Produk')->getResult(),
            'totalkpi20_dpi' => $tabelcapaianprodi->jmlkpi20dpi('Desain Produk')->getResult(),
            'totalkpi21_dpi' => $tabelcapaianprodi->jmlkpi21dpi('Desain Produk')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dkv' => $tabelcapaianprodi->jmlkpi18dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi19_dkv' => $tabelcapaianprodi->jmlkpi19dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi20_dkv' => $tabelcapaianprodi->jmlkpi20dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi21_dkv' => $tabelcapaianprodi->jmlkpi21dkv('Desain Komunikasi Visual')->getResult(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi18_inf' => $tabelcapaianprodi->jmlkpi18inf('Informatika')->getResult(),
            'totalkpi19_inf' => $tabelcapaianprodi->jmlkpi19inf('Informatika')->getResult(),
            'totalkpi20_inf' => $tabelcapaianprodi->jmlkpi20inf('Informatika')->getResult(),
            'totalkpi21_inf' => $tabelcapaianprodi->jmlkpi21inf('Informatika')->getResult(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi18_sif' => $tabelcapaianprodi->jmlkpi18sif('Sistem Informasi')->getResult(),
            'totalkpi19_sif' => $tabelcapaianprodi->jmlkpi19sif('Sistem Informasi')->getResult(),
            'totalkpi20_sif' => $tabelcapaianprodi->jmlkpi20sif('Sistem Informasi')->getResult(),
            'totalkpi21_sif' => $tabelcapaianprodi->jmlkpi21sif('Sistem Informasi')->getResult(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi18_tsp' => $tabelcapaianprodi->jmlkpi18tsp('Teknik Sipil')->getResult(),
            'totalkpi19_tsp' => $tabelcapaianprodi->jmlkpi19tsp('Teknik Sipil')->getResult(),
            'totalkpi20_tsp' => $tabelcapaianprodi->jmlkpi20tsp('Teknik Sipil')->getResult(),
            'totalkpi21_tsp' => $tabelcapaianprodi->jmlkpi21tsp('Teknik Sipil')->getResult(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi18_ars' => $tabelcapaianprodi->jmlkpi18ars('Arsitektur')->getResult(),
            'totalkpi19_ars' => $tabelcapaianprodi->jmlkpi19ars('Arsitektur')->getResult(),
            'totalkpi20_ars' => $tabelcapaianprodi->jmlkpi20ars('Arsitektur')->getResult(),
            'totalkpi21_ars' => $tabelcapaianprodi->jmlkpi21ars('Arsitektur')->getResult(),

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
            'totalkpi18_akt' => $tabelcapaianprodi->jmlkpi18akt('Akuntansi')->getResult(),
            'totalkpi19_akt' => $tabelcapaianprodi->jmlkpi19akt('Akuntansi')->getResult(),
            'totalkpi20_akt' => $tabelcapaianprodi->jmlkpi20akt('Akuntansi')->getResult(),
            'totalkpi21_akt' => $tabelcapaianprodi->jmlkpi21akt('Akuntansi')->getResult(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi18_mnj' => $tabelcapaianprodi->jmlkpi18mnj('Manajemen')->getResult(),
            'totalkpi19_mnj' => $tabelcapaianprodi->jmlkpi19mnj('Manajemen')->getResult(),
            'totalkpi20_mnj' => $tabelcapaianprodi->jmlkpi20mnj('Manajemen')->getResult(),
            'totalkpi21_mnj' => $tabelcapaianprodi->jmlkpi21mnj('Manajemen')->getResult(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi18_psi' => $tabelcapaianprodi->jmlkpi18psi('Psikologi')->getResult(),
            'totalkpi19_psi' => $tabelcapaianprodi->jmlkpi19psi('Psikologi')->getResult(),
            'totalkpi20_psi' => $tabelcapaianprodi->jmlkpi20psi('Psikologi')->getResult(),
            'totalkpi21_psi' => $tabelcapaianprodi->jmlkpi21psi('Psikologi')->getResult(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi18_kom' => $tabelcapaianprodi->jmlkpi18kom('Ilmu Komunikasi')->getResult(),
            'totalkpi19_kom' => $tabelcapaianprodi->jmlkpi19kom('Ilmu Komunikasi')->getResult(),
            'totalkpi20_kom' => $tabelcapaianprodi->jmlkpi20kom('Ilmu Komunikasi')->getResult(),
            'totalkpi21_kom' => $tabelcapaianprodi->jmlkpi21kom('Ilmu Komunikasi')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dpi' => $tabelcapaianprodi->jmlkpi18dpi('Desain Produk')->getResult(),
            'totalkpi19_dpi' => $tabelcapaianprodi->jmlkpi19dpi('Desain Produk')->getResult(),
            'totalkpi20_dpi' => $tabelcapaianprodi->jmlkpi20dpi('Desain Produk')->getResult(),
            'totalkpi21_dpi' => $tabelcapaianprodi->jmlkpi21dpi('Desain Produk')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dkv' => $tabelcapaianprodi->jmlkpi18dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi19_dkv' => $tabelcapaianprodi->jmlkpi19dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi20_dkv' => $tabelcapaianprodi->jmlkpi20dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi21_dkv' => $tabelcapaianprodi->jmlkpi21dkv('Desain Komunikasi Visual')->getResult(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi18_inf' => $tabelcapaianprodi->jmlkpi18inf('Informatika')->getResult(),
            'totalkpi19_inf' => $tabelcapaianprodi->jmlkpi19inf('Informatika')->getResult(),
            'totalkpi20_inf' => $tabelcapaianprodi->jmlkpi20inf('Informatika')->getResult(),
            'totalkpi21_inf' => $tabelcapaianprodi->jmlkpi21inf('Informatika')->getResult(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi18_sif' => $tabelcapaianprodi->jmlkpi18sif('Sistem Informasi')->getResult(),
            'totalkpi19_sif' => $tabelcapaianprodi->jmlkpi19sif('Sistem Informasi')->getResult(),
            'totalkpi20_sif' => $tabelcapaianprodi->jmlkpi20sif('Sistem Informasi')->getResult(),
            'totalkpi21_sif' => $tabelcapaianprodi->jmlkpi21sif('Sistem Informasi')->getResult(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi18_tsp' => $tabelcapaianprodi->jmlkpi18tsp('Teknik Sipil')->getResult(),
            'totalkpi19_tsp' => $tabelcapaianprodi->jmlkpi19tsp('Teknik Sipil')->getResult(),
            'totalkpi20_tsp' => $tabelcapaianprodi->jmlkpi20tsp('Teknik Sipil')->getResult(),
            'totalkpi21_tsp' => $tabelcapaianprodi->jmlkpi21tsp('Teknik Sipil')->getResult(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi18_ars' => $tabelcapaianprodi->jmlkpi18ars('Arsitektur')->getResult(),
            'totalkpi19_ars' => $tabelcapaianprodi->jmlkpi19ars('Arsitektur')->getResult(),
            'totalkpi20_ars' => $tabelcapaianprodi->jmlkpi20ars('Arsitektur')->getResult(),
            'totalkpi21_ars' => $tabelcapaianprodi->jmlkpi21ars('Arsitektur')->getResult(),

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
        return view('/rektorat/TabelCapaianUnit', $data);
    }

    public function grafikcapaian()
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
            'totalkpi18_akt' => $grafikcapaian_prodi->jmlkpi18akt('Akuntansi')->getResultArray(),
            'totalkpi19_akt' => $grafikcapaian_prodi->jmlkpi19akt('Akuntansi')->getResultArray(),
            'totalkpi20_akt' => $grafikcapaian_prodi->jmlkpi20akt('Akuntansi')->getResultArray(),
            'totalkpi21_akt' => $grafikcapaian_prodi->jmlkpi21akt('Akuntansi')->getResultArray(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi18_mnj' => $grafikcapaian_prodi->jmlkpi18mnj('Manajemen')->getResultArray(),
            'totalkpi19_mnj' => $grafikcapaian_prodi->jmlkpi19mnj('Manajemen')->getResultArray(),
            'totalkpi20_mnj' => $grafikcapaian_prodi->jmlkpi20mnj('Manajemen')->getResultArray(),
            'totalkpi21_mnj' => $grafikcapaian_prodi->jmlkpi21mnj('Manajemen')->getResultArray(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi18_psi' => $grafikcapaian_prodi->jmlkpi18psi('Psikologi')->getResultArray(),
            'totalkpi19_psi' => $grafikcapaian_prodi->jmlkpi19psi('Psikologi')->getResultArray(),
            'totalkpi20_psi' => $grafikcapaian_prodi->jmlkpi20psi('Psikologi')->getResultArray(),
            'totalkpi21_psi' => $grafikcapaian_prodi->jmlkpi21psi('Psikologi')->getResultArray(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi18_kom' => $grafikcapaian_prodi->jmlkpi18kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi19_kom' => $grafikcapaian_prodi->jmlkpi19kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi20_kom' => $grafikcapaian_prodi->jmlkpi20kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi21_kom' => $grafikcapaian_prodi->jmlkpi21kom('Ilmu Komunikasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dpi' => $grafikcapaian_prodi->jmlkpi18dpi('Desain Produk')->getResultArray(),
            'totalkpi19_dpi' => $grafikcapaian_prodi->jmlkpi19dpi('Desain Produk')->getResultArray(),
            'totalkpi20_dpi' => $grafikcapaian_prodi->jmlkpi20dpi('Desain Produk')->getResultArray(),
            'totalkpi21_dpi' => $grafikcapaian_prodi->jmlkpi21dpi('Desain Produk')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dkv' => $grafikcapaian_prodi->jmlkpi18dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi19_dkv' => $grafikcapaian_prodi->jmlkpi19dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi20_dkv' => $grafikcapaian_prodi->jmlkpi20dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi21_dkv' => $grafikcapaian_prodi->jmlkpi21dkv('Desain Komunikasi Visual')->getResultArray(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi18_inf' => $grafikcapaian_prodi->jmlkpi18inf('Informatika')->getResultArray(),
            'totalkpi19_inf' => $grafikcapaian_prodi->jmlkpi19inf('Informatika')->getResultArray(),
            'totalkpi20_inf' => $grafikcapaian_prodi->jmlkpi20inf('Informatika')->getResultArray(),
            'totalkpi21_inf' => $grafikcapaian_prodi->jmlkpi21inf('Informatika')->getResultArray(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi18_sif' => $grafikcapaian_prodi->jmlkpi18sif('Sistem Informasi')->getResultArray(),
            'totalkpi19_sif' => $grafikcapaian_prodi->jmlkpi19sif('Sistem Informasi')->getResultArray(),
            'totalkpi20_sif' => $grafikcapaian_prodi->jmlkpi20sif('Sistem Informasi')->getResultArray(),
            'totalkpi21_sif' => $grafikcapaian_prodi->jmlkpi21sif('Sistem Informasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi18_tsp' => $grafikcapaian_prodi->jmlkpi18tsp('Teknik Sipil')->getResultArray(),
            'totalkpi19_tsp' => $grafikcapaian_prodi->jmlkpi19tsp('Teknik Sipil')->getResultArray(),
            'totalkpi20_tsp' => $grafikcapaian_prodi->jmlkpi20tsp('Teknik Sipil')->getResultArray(),
            'totalkpi21_tsp' => $grafikcapaian_prodi->jmlkpi21tsp('Teknik Sipil')->getResultArray(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi18_ars' => $grafikcapaian_prodi->jmlkpi18ars('Arsitektur')->getResultArray(),
            'totalkpi19_ars' => $grafikcapaian_prodi->jmlkpi19ars('Arsitektur')->getResultArray(),
            'totalkpi20_ars' => $grafikcapaian_prodi->jmlkpi20ars('Arsitektur')->getResultArray(),
            'totalkpi21_ars' => $grafikcapaian_prodi->jmlkpi21ars('Arsitektur')->getResultArray(),





        ];


        return view('/rektorat/GrafikCapaianProdi', $data);
    }
    public function grafikunit()
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
            'totalkpi18_akt' => $grafikcapaian_prodi->jmlkpi18akt('Akuntansi')->getResultArray(),
            'totalkpi19_akt' => $grafikcapaian_prodi->jmlkpi19akt('Akuntansi')->getResultArray(),
            'totalkpi20_akt' => $grafikcapaian_prodi->jmlkpi20akt('Akuntansi')->getResultArray(),
            'totalkpi21_akt' => $grafikcapaian_prodi->jmlkpi21akt('Akuntansi')->getResultArray(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi18_mnj' => $grafikcapaian_prodi->jmlkpi18mnj('Manajemen')->getResultArray(),
            'totalkpi19_mnj' => $grafikcapaian_prodi->jmlkpi19mnj('Manajemen')->getResultArray(),
            'totalkpi20_mnj' => $grafikcapaian_prodi->jmlkpi20mnj('Manajemen')->getResultArray(),
            'totalkpi21_mnj' => $grafikcapaian_prodi->jmlkpi21mnj('Manajemen')->getResultArray(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi18_psi' => $grafikcapaian_prodi->jmlkpi18psi('Psikologi')->getResultArray(),
            'totalkpi19_psi' => $grafikcapaian_prodi->jmlkpi19psi('Psikologi')->getResultArray(),
            'totalkpi20_psi' => $grafikcapaian_prodi->jmlkpi20psi('Psikologi')->getResultArray(),
            'totalkpi21_psi' => $grafikcapaian_prodi->jmlkpi21psi('Psikologi')->getResultArray(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi18_kom' => $grafikcapaian_prodi->jmlkpi18kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi19_kom' => $grafikcapaian_prodi->jmlkpi19kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi20_kom' => $grafikcapaian_prodi->jmlkpi20kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi21_kom' => $grafikcapaian_prodi->jmlkpi21kom('Ilmu Komunikasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dpi' => $grafikcapaian_prodi->jmlkpi18dpi('Desain Produk')->getResultArray(),
            'totalkpi19_dpi' => $grafikcapaian_prodi->jmlkpi19dpi('Desain Produk')->getResultArray(),
            'totalkpi20_dpi' => $grafikcapaian_prodi->jmlkpi20dpi('Desain Produk')->getResultArray(),
            'totalkpi21_dpi' => $grafikcapaian_prodi->jmlkpi21dpi('Desain Produk')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dkv' => $grafikcapaian_prodi->jmlkpi18dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi19_dkv' => $grafikcapaian_prodi->jmlkpi19dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi20_dkv' => $grafikcapaian_prodi->jmlkpi20dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi21_dkv' => $grafikcapaian_prodi->jmlkpi21dkv('Desain Komunikasi Visual')->getResultArray(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi18_inf' => $grafikcapaian_prodi->jmlkpi18inf('Informatika')->getResultArray(),
            'totalkpi19_inf' => $grafikcapaian_prodi->jmlkpi19inf('Informatika')->getResultArray(),
            'totalkpi20_inf' => $grafikcapaian_prodi->jmlkpi20inf('Informatika')->getResultArray(),
            'totalkpi21_inf' => $grafikcapaian_prodi->jmlkpi21inf('Informatika')->getResultArray(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi18_sif' => $grafikcapaian_prodi->jmlkpi18sif('Sistem Informasi')->getResultArray(),
            'totalkpi19_sif' => $grafikcapaian_prodi->jmlkpi19sif('Sistem Informasi')->getResultArray(),
            'totalkpi20_sif' => $grafikcapaian_prodi->jmlkpi20sif('Sistem Informasi')->getResultArray(),
            'totalkpi21_sif' => $grafikcapaian_prodi->jmlkpi21sif('Sistem Informasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi18_tsp' => $grafikcapaian_prodi->jmlkpi18tsp('Teknik Sipil')->getResultArray(),
            'totalkpi19_tsp' => $grafikcapaian_prodi->jmlkpi19tsp('Teknik Sipil')->getResultArray(),
            'totalkpi20_tsp' => $grafikcapaian_prodi->jmlkpi20tsp('Teknik Sipil')->getResultArray(),
            'totalkpi21_tsp' => $grafikcapaian_prodi->jmlkpi21tsp('Teknik Sipil')->getResultArray(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi18_ars' => $grafikcapaian_prodi->jmlkpi18ars('Arsitektur')->getResultArray(),
            'totalkpi19_ars' => $grafikcapaian_prodi->jmlkpi19ars('Arsitektur')->getResultArray(),
            'totalkpi20_ars' => $grafikcapaian_prodi->jmlkpi20ars('Arsitektur')->getResultArray(),
            'totalkpi21_ars' => $grafikcapaian_prodi->jmlkpi21ars('Arsitektur')->getResultArray(),





        ];


        return view('/rektorat/GrafikCapaianUnit', $data);
    }
}
