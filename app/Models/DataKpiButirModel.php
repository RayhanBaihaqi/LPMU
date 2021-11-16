<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKpiButirModel extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildatabutir()
    {
        return $this->db->table('tabel_butir_kpi')->get();
    }
    function simpan($data)
    {
        return $this->db->table('tabel_butir_kpi')->insert($data);
    }
}
