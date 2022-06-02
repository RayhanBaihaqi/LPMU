<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table      = 'user';

    protected $allowedFields = ['id', 'username', 'password', 'nama_prodi', 'created_at', 'updated_at', 'level'];

    public function tampilDataSetRKAT($username = null)
    {
        return $this->db->table('set_rkat')
            ->join('user', 'user.id=set_rkat.id_user')
            ->where('username', $username)
            ->get()->getResultArray();
    }
    public function edit($id_setrkat = null)
    {
        return $this->db->table('set_rkat')
            ->join('user', 'user.id=set_rkat.id_user')
            ->where('id_setrkat', $id_setrkat)
            ->get()->getResultArray();
    }
}
