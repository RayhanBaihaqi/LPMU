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
    function get_sum()
    {
        return $this->db->table('tabel_butir_kpi')->selectSum('bobot')->get();
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

    function tampildatabutir1()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '1');
        return $builder->get();
    }

    function tampildatabutir2()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '2');
        return $builder->get();
    }

    function tampildatabutir3()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '3');
        return $builder->get();
    }

    function tampildatabutir4()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '4');
        return $builder->get();
    }

    function tampildatabutir5()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '5');
        return $builder->get();
    }

    function tampildatabutir6()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '6');
        return $builder->get();
    }

    function tampildatabutir7()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '7');
        return $builder->get();
    }

    function tampildatabutir8()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '8');
        return $builder->get();
    }

    function tampildatabutir9()
    {
        $builder = $this->db->table('tabel_butir_kpi');
        $builder->where('idkpi', '9');
        return $builder->get();
    }
}
