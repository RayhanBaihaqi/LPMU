<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;

class Users extends BaseController {
    public function index() {
        //buat object dari class UserModel
        $model = new UsersModel();

        //load seluruh data
        $data['users'] = $model->orderBy('id','DESC')
                                ->findAll();

        return view('users_view_all', $data);
    }
    public function create() {
        return view('/admin/TambahUsers');
    }
    public function store() {
        $model = new UsersModel();

        $data = [
            'nama_prodi' => $this->request->getVar('nama_prodi'),
            'username' => $this->request->getVar('username'),
            'level' => $this->request->getVar('level'),
            'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('users'));
    }
    public function edit($id = null) {
        $model = new UsersModel();
        $data['user'] = $model->where('id',$id)->first();

        return view('users_edit_user',$data);
    }
    public function update() {
        $model = new UsersModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('users'));
    }
    public function delete($id = null) {
        $model = new UsersModel();
        $data['user'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('users'));
    }
}
?>
