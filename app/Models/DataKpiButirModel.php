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
        return $this->db->query("SELECT ROUND(SUM(bobot), 2) AS total_bobot from tabel_butir_kpi");
    }
    function jml_kpi1()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana1 FROM `tabel_butir_kpi` where idkpi=1");
    }
    function jml_kpi2()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana2 FROM `tabel_butir_kpi` where idkpi=2");
    }
    function jml_kpi3()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana3 FROM `tabel_butir_kpi` where idkpi=3");
    }
    function jml_kpi4()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana4 FROM `tabel_butir_kpi` where idkpi=4");
    }
    function jml_kpi5()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana5 FROM `tabel_butir_kpi` where idkpi=5");
    }
    function jml_kpi6()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana6 FROM `tabel_butir_kpi` where idkpi=6");
    }
    function jml_kpi7()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana7 FROM `tabel_butir_kpi` where idkpi=7");
    }
    function jml_kpi8()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana8 FROM `tabel_butir_kpi` where idkpi=8");
    }
    function jml_kpi9()
    {
        return $this->db->query("SELECT SUM(bobot) as jumlah_rencana9 FROM `tabel_butir_kpi` where idkpi=9");
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
