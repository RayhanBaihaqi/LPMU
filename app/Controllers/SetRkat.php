<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SetRkatModel;
use App\Models\UsersModel;
use App\Models\AuthModel;

class SetRkat extends BaseController
{
    public function __construct(){
        $this->SetRkatModel= new SetRkatModel();
    }
    public function index()
    {

        $data['set_rkat'] = $this->SetRkatModel->gabung();

        return view('admin/ListSetRkat', $data);

    }
    public function create() {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->orderBy('id_setrkat','ASC')->findAll();
        return view('admin/TambahSetRkat');
    }
    public function store()
	{
		$model = new SetRkatModel();
		$data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
		];
		$model->save($data);
		return redirect()->to(base_url('setrkat/create'))->with('status', 'Data Berhasil ditambah');
	}
    public function edit($id_setrkat = null) {
        $model = new UsersModel();
        $data = [
            'set_rkat' => $this->SetRkatModel->edit($id_setrkat),
            'list_prodi' => $model->orderBy('id', 'ASC')->findAll(),
        ]; 
        return view('/admin/EditSetRkat',$data);
    }
    public function update() {
        $model = new SetRkatModel();
        $id_setrkat = $this->request->getVar('id_setrkat');

        $data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
        ];
        $save = $model->update($id_setrkat,$data);

        return redirect()->to(base_url('setrkat/index'));
    }
    public function delete($id_setrkat = null) {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->where('id_setrkat',$id)->delete();

        return redirect()->to(base_url('setrkat/index'));
    }

    //User rencana rkat
    public function indexbyuser()
    {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->orderBy('id_setrkat','DESC')->findAll();

        return view('rkat/form', $data);

    }
    public function createbyuser() {
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/form', $data);
    }
    public function tambah()
	{
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 
		return view('/rkat/inputData', $data);
	}
    public function storebyuser()
	{
		$model = new SetRkatModel();
		$data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
		];
		$model->save($data);
		return redirect()->to(base_url('setrkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
	}
    public function editbyuser($id_setrkat = null) {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->where('id_setrkat',$id_setrkat)->first();

        return view('/admin/Editset_rkats',$data);
    }
    public function updatebyuser() {
        $model = new SetRkatModel();
        $id_setrkat = $this->request->getVar('id_setrkat');

        $data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
        ];
        $save = $model->update($id_setrkat,$data);

        return redirect()->to(base_url('setrkat/index'));
    }
    public function deletebyuser($id_setrkat = null) {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->where('id_setrkat',$id)->delete();

        return redirect()->to(base_url('setrkat/index'));
    }
    public function updateRkat() {
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/ListData', $data);
    }
    //User capaian rkat
    public function indexcapaianbyuser()
    {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->orderBy('id_setrkat','DESC')->findAll();

        return view('rkat/form', $data);

    }
    public function createcapaianbyuser() {
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/form', $data);
    }
    public function tambahcapaian()
	{
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 
		return view('/rkat/FormulirCapaian', $data);
	}
    public function storecapaianbyuser()
	{
		$model = new SetRkatModel();
		$data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
		];
		$model->save($data);
		return redirect()->to(base_url('setrkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
	}
    public function editcapaianbyuser($id_setrkat = null) {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->where('id_setrkat',$id_setrkat)->first();

        return view('/admin/Editset_rkats',$data);
    }
    public function updatecapaianbyuser() {
        $model = new SetRkatModel();
        $id_setrkat = $this->request->getVar('id_setrkat');

        $data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
        ];
        $save = $model->update($id_setrkat,$data);

        return redirect()->to(base_url('setrkat/index'));
    }
    public function deletecapaianbyuser($id_setrkat = null) {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->where('id_setrkat',$id)->delete();

        return redirect()->to(base_url('setrkat/index'));
    }
    public function updatecapaianRkat() {
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 

        return view('rkat/ListData', $data);
    }
    // admin
    public function createbyadmin() {
        $model = new SetRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        ]; 

        return view('admin/tambahRkat', $data);
    }
    public function tambahbyadmin()
	{
        $model = new SetRkatModel();
        $username = session('username');
        // $data = [
        //     'set_rkat' => $this->SetRkatModel->tampilRKAT($username),
        // ]; 
		return view('admin/InputData');
	}
}