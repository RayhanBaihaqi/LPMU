<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'user';

    protected $allowedFields = ['id','username', 'password', 'nama_prodi','created_at','updated_at', 'level'];
}
