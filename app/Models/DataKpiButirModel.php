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
        return $this->db->table('tabel_butir_kpi')
            ->join('tabel_kpi', 'tabel_kpi.idkpi=tabel_butir_kpi.idkpi')
            ->get();
    }
    function simpan($data)
    {
        return $this->db->table('tabel_butir_kpi')->insert($data);
    }
    function hapuskpibutir($id)
    {
        return $this->db->table('tabel_butir_kpi')->delete(['id' => $id]);
    }
}
