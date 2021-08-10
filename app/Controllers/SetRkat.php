<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SetRkatModel;
use App\Models\AuthModel;

class SetRkat extends BaseController
{
    public function index()
    {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->orderBy('id_setrkat','DESC')->findAll();
        $model = new AuthModel;
        $table = 'user';
        $username = $this->request->getPost('username');
        $row = $model->get_data_login($username, $table);

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
            'semester' => $this->request->getVar('semester'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
		];
		$model->save($data);
		return redirect()->to(base_url('setrkat/create'))->with('status', 'Data Berhasil ditambah');
	}
    public function edit($id_setrkat = null) {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->where('id_setrkat',$id_setrkat)->first();

        return view('/admin/EditSetRkat',$data);
    }
    public function update() {
        $model = new SetRkatModel();
        $id_setrkat = $this->request->getVar('id_setrkat');

        $data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'semester' => $this->request->getVar('semester'),
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

    //User
    public function indexbyuser()
    {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->orderBy('id_setrkat','DESC')->findAll();

        return view('rkat/form', $data);

    }
    public function createbyuser() {
        $model = new SetRkatModel();
        $data['set_rkat'] = $model->orderBy('id_setrkat','ASC')->findAll();

        return view('rkat/form');
    }
    public function storebyuser()
	{
		$model = new SetRkatModel();
		$data = [
			'tahun_akademik' => $this->request->getVar('tahun_akademik'),
            'semester' => $this->request->getVar('semester'),
            'pagu' => $this->request->getVar('pagu'),
            'id_user' => $this->request->getVar('id_user'),
		];
		$model->save($data);
		return redirect()->to(base_url('setrkat/create'))->with('status', 'Data Berhasil ditambah');
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
            'semester' => $this->request->getVar('semester'),
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
}
