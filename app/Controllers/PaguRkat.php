<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\TahunAkademikModel;
use App\Models\PersenSerapModel;
use App\Models\PaguRkatModel;
use App\Models\usersModel;

class PaguRkat extends BaseController
{
    public function __construct(){
        $this->DetailRkatModel = new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
        $this->PaguModel = new PaguRkatModel();
        $this->usersModel = new usersModel();
    }
    public function index()
    {
        $data = [
			'pagu_rkat' => $this->PaguModel->join('user', 'user.id=pagu_rkat.id_user')->join('tahun_akademik', 'tahun_akademik.id_tahun=pagu_rkat.id_tahun')->orderBy('id_pagu', 'DESC')->findAll(),
            'user' => $this->usersModel->orderBy('id', 'DESC')->findAll(),
		];

        return view('admin/ListPagu', $data);

    }
    public function create() {
        $model = new PaguRkatModel();
        $data = [
			'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
            'user' => $this->usersModel->orderBy('id', 'DESC')->findAll(),
		];

        return view('admin/TambahPagu',$data);
    }
    public function store()
	{
		$model = new PaguRkatModel();
		$data = [
			'id_tahun' => $this->request->getVar('id_tahun'),
            'id_user' => $this->request->getVar('id_user'),
            'jumlah_pagu' => $this->request->getVar('jumlah_pagu'),
		];
		$model->save($data);
		return redirect()->to(base_url('PaguRkat/create'))->with('status', '
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> Data Anda Berhasil Terinput.
        </div>
     ');
	}
    public function edit($id_pagu = null) 
    {
        $model = new PaguRkatModel();
        $data['pagu_rkat'] = $model->where('id_pagu',$id_pagu)->first();
        // print_r($data);exit();

        return view('/admin/Editpagu', $data);
    }
    public function update() {
        $model = new PaguRkatModel();
        $id_pagu = $this->request->getVar('id_pagu');

        $data = [
			'id_tahun' => $this->request->getVar('id_tahun'),
            'id_user' => $this->request->getVar('id_user'),
            'jumlah_pagu' => $this->request->getVar('jumlah_pagu'),
        ];
        $save = $model->update($id_pagu,$data);

        return redirect()->to(base_url('PaguRkat/index'));
    }
    public function delete($id_PaguRkat = null) {
        $model = new PaguRkatModel();
        $data['set_rkat'] = $model->where('id_PaguRkat',$id_PaguRkat)->delete();

        return redirect()->to(base_url('PaguRkat/index'));
    }

    //user rencana rkat
    public function indexbyuser()
    {
        $model = new PaguRkatModel();
        $data['set_rkat'] = $model->orderBy('id_PaguRkat','DESC')->findAll();

        return view('rkat/form', $data);

    }
    public function createbyuser() {
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/form', $data);
    }
    public function tambah()
	{
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        ]; 
		return view('/rkat/inputData', $data);
	}
    public function storebyuser()
	{
		$model = new PaguRkatModel();
		$data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
		];
		$model->save($data);
		return redirect()->to(base_url('PaguRkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
	}
    public function editbyuser($id_PaguRkat = null) {
        $model = new PaguRkatModel();
        $data['set_rkat'] = $model->where('id_PaguRkat',$id_PaguRkat)->first();

        return view('/admin/Editset_rkats',$data);
    }
    public function updatebyuser() {
        $model = new PaguRkatModel();
        $id_PaguRkat = $this->request->getVar('id_PaguRkat');

        $data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
        ];
        $save = $model->update($id_PaguRkat,$data);

        return redirect()->to(base_url('PaguRkat/index'));
    }
    public function deletebyuser($id_PaguRkat = null) {
        $model = new PaguRkatModel();
        // $data['set_rkat'] = $model->where('id_PaguRkat',$id)->delete();

        return redirect()->to(base_url('PaguRkat/index'));
    }
    public function updateRkat() {
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/ListData', $data);
    }
    //user capaian rkat
    public function indexcapaianbyuser()
    {
        $model = new PaguRkatModel();
        $data['set_rkat'] = $model->orderBy('id_PaguRkat','DESC')->findAll();

        return view('rkat/form', $data);

    }
    public function createcapaianbyuser() {
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/form', $data);
    }
    public function tambahcapaian()
	{
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        ]; 
		return view('/rkat/FormulirCapaian', $data);
	}
    public function storecapaianbyuser()
	{
		$model = new PaguRkatModel();
		$data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
		];
		$model->save($data);
		return redirect()->to(base_url('PaguRkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
	}
    public function editcapaianbyuser($id_PaguRkat = null) {
        $model = new PaguRkatModel();
        $data['set_rkat'] = $model->where('id_PaguRkat',$id_PaguRkat)->first();

        return view('/admin/Editset_rkats',$data);
    }
    public function updatecapaianbyuser() {
        $model = new PaguRkatModel();
        $id_PaguRkat = $this->request->getVar('id_PaguRkat');

        $data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
        ];
        $save = $model->update($id_PaguRkat,$data);

        return redirect()->to(base_url('PaguRkat/index'));
    }
    public function deletecapaianbyuser($id_PaguRkat = null) {
        $model = new PaguRkatModel();
        // $data['set_rkat'] = $model->where('id_PaguRkat',$id)->delete();

        return redirect()->to(base_url('PaguRkat/index'));
    }
    public function updatecapaianRkat() {
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/ListData', $data);
    }
    // admin
    public function createbyadmin() {
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        ]; 

        return view('admin/inputdata', $data);
    }
    public function tambahbyadmin()
	{
        $model = new PaguRkatModel();
        $username = session('username');
        // $data = [
        //     'set_rkat' => $this->PaguRkatModel->tampilRKAT($username),
        // ]; 
		return view('admin/InputData');
	}
}