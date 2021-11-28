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
    function simpankpi($data)
    {
        return $this->db->table('tabel_kpi')->insert($data);
    }

    function ambildatakpi($idkpi)
    {
        return $this->db->table('tabel_kpi')->getWhere(['idkpi' => $idkpi]);
    }
    function update1($data, $idkpi)
    {
        return $this->db->table('tabel_kpi')->update($data, ['idkpi' => $idkpi]);
    }

    function hapuskpi($idkpi)
    {
        return $this->db->table('tabel_kpi')->delete(['idkpi' => $idkpi]);
    }
}
