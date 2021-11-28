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
    function ambildatabutir($id)
    {
        return $this->db->table('tabel_butir_kpi')->getWhere(['id' => $id]);
    }
    function update2($data, $id)
    {
        return $this->db->table('tabel_butir_kpi')->update($data, ['id' => $id]);
    }
    function simpankpibutir($data)
    {
        return $this->db->table('tabel_butir_kpi')->insert($data);
    }
    function hapuskpibutir($id)
    {
        return $this->db->table('tabel_butir_kpi')->delete(['id' => $id]);
    }
}
