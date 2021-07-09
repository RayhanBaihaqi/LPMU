<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function register()
    {
        $val = $this->validate(
            [
                'nama_prodi' => 'required',
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => '{field} Sudah dipakai'
                    ]
                ],
                'password' => 'required',
                'level' => 'required',
            ],
        );

        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate', $pesanvalidasi);
        }
        $data = array(
            'nama_prodi' => $this->request->getPost('nama_prodi'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level' => $this->request->getPost('level')
        );
        $model = new UsersModel;
        $model->insert($data);
        session()->setFlashdata('pesan', 'Selamat Anda berhasil registrasi. Silahkan Login');
        return redirect()->to('/');
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
            session()->setFlashdata('pesan', 'username anda salah');
            return redirect()->to('/');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'nama_prodi' => $row->nama_prodi,
                'username' => $row->username,
                'level' => $row->level,
            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Berhasil Login');
            return redirect()->to('/backend');
        }
        session()->setFlashdata('pesan', 'Password Salah');
        return redirect()->to('/');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'Berhasil Logout');
        return redirect()->to('/');
    }
}
