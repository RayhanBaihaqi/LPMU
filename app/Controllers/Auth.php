<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;
use App\Models\PaguRkatModel;

class Auth extends BaseController
{
    public function index()
    {
        $model = new UsersModel();

        $data['user'] = $model->orderBy('id', 'DESC')->findAll();

        return view('admin/ListAdmin', $data);
    }
    public function create()
    {
        $model = new UsersModel();
        $data['user'] = $model->orderBy('id', 'ASC')->findAll();
        return view('admin/TambahUsers', $data);
    }
    public function store()
    {
        $model = new UsersModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'nama_prodi' => $this->request->getVar('nama_prodi'),
            'level' => $this->request->getVar('level'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $model->save($data);
        return redirect()->to(base_url('auth/index'))->with('status', 'Data Berhasil ditambah');
    }
    public function edit($id = null)
    {
        $model = new UsersModel();
        $data['user'] = $model->where('id', $id)->first();

        return view('/admin/EditUsers', $data);
    }
    public function update()
    {
        $model = new UsersModel();
        $id = $this->request->getVar('id');

        $data = [
            'username' => $this->request->getVar('username'),
            'nama_prodi' => $this->request->getVar('nama_prodi'),
            'level' => $this->request->getVar('level'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('auth/index'));
    }
    public function delete($id = null)
    {
        $model = new UsersModel();
        $data['user'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('auth/index'));
    }

    //kontroler login
    public function login_admin()
    {
        return view('/admin/dashboard');
    }
    public function login()
    {
        $model = new AuthModel;
        $table = 'user';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username, $table);
        //var_dump($row);
        if ($row == NULL) {
            session()->setFlashdata('pesan', 'username anda tidak ada');
            return redirect()->to('/');
        }
        if (password_verify($password, $row->password)) {

            $data = [
                'log' => TRUE,
                'id' => $row->id,
                'nama_prodi' => $row->nama_prodi,
                'username' => $row->username,
                'level' => $row->level,
            ];
            session()->set($data);

            if (session('level') == 'prodi') {
                session()->setFlashdata('pesan', '
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Login Success!</strong> Selamat anda telah berhasil login.
                </div>');
                return redirect()->to('/backend');
            } elseif (session('level') == 'unit') {
                session()->setFlashdata('pesan', '
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Login Success!</strong> Selamat anda telah berhasil login.
                </div>');
                return redirect()->to('/backend');
            } else if (session('level') == 'admin') {
                session()->setFlashdata('pesan', '
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Login Success!</strong> Selamat anda telah berhasil login.
                </div>');
                return redirect()->to('/admin');
            } else if (session('level') == 'bpsdm') {
                session()->setFlashdata('pesan', '
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Login Success!</strong> Selamat anda telah berhasil login.
                </div>');
                return redirect()->to('/bpsdm');
            } else if (session('level') == 'rektorat') {
                session()->setFlashdata('pesan', '
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Login Success!</strong> Selamat anda telah berhasil login.
                </div>');
                return redirect()->to('/rektorat');
            } else if (session('level') == 'keuangan') {
                session()->setFlashdata('pesan', '
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Login Success!</strong> Selamat anda telah berhasil login.
                </div>');
                return redirect()->to('/keuangan/index');
            } else if (session('level') == 'lpmu') {
                session()->setFlashdata('pesan', '
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Login Success!</strong> Selamat anda telah berhasil login.
                </div>');
                return redirect()->to('/lpmu/index');
            } 
        } else {
            session()->setFlashdata('pesan', 'Password anda salah');
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'Berhasil Logout');
        return redirect()->to('/');
    }

    //Ubah Password User
    public function ubahpass($id_setrkat = null)
    {
        $model = new PaguRkatModel();
        $username = session('username');
        $data = [
            'user' => $model->where('id_user', $id_setrkat)->first()
        ];

        return view('ubahPass', $data);
    }
    public function updatepass()
    {
        $model = new UsersModel();
        $id = $this->request->getVar('id');

        $data = [
            'username' => $this->request->getVar('username'),
            'nama_prodi' => $this->request->getVar('nama_prodi'),
            'level' => $this->request->getVar('level'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('auth/index'));
    }
}
