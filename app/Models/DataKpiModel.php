<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKpiModel extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('tabel_kpi')->get();
    }
    function save1($data)
    {
        return $this->db->table('tabel_kpi')->insert($data);
    }
}
