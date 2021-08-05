<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        $model = new UsersModel();

        $data['user'] = $model->orderBy('id','DESC')->findAll();

        return view('admin/ListAdmin', $data);

    }
    public function create() {
        $model = new UsersModel();
        $data['user'] = $model->orderBy('id','ASC')->findAll();
        return view('admin/TambahUsers', $data);
    }
    public function store() {
        $model = new UsersModel();
        
        $data = [
            'username' => $this->request->getVar('username'),
            'nama_prodi' => $this->request->getVar('nama_prodi'),
            'level' => $this->request->getVar('level'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/ListAdmin'));
    }
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
                'nama_prodi' => $row->nama_prodi,
                'username' => $row->username,
                'level' => $row->level,
            ];
            session()->set($data);

            if (session('level') == 'prodi') {
                session()->setFlashdata('pesan', 'Berhasil Login');
                return redirect()->to('/backend');
            } elseif (session('level') == 'unit') {
                session()->setFlashdata('pesan', 'Berhasil Login');
                return redirect()->to('/backend');
            } else if (session('level') == 'admin') {
                session()->setFlashdata('pesan', 'Berhasil Login');
                return redirect()->to('/admin');
            } else if (session('level') == 'rektorat') {
                session()->setFlashdata('pesan', 'Berhasil Login');
                return redirect()->to('/backend');
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
}
