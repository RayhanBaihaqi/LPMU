<?php

namespace App\Models;

use CodeIgniter\Model;

class DataCapaianKpiModel extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }
    function tampilcapaiankpi()
    {
        return $this->db->table('tabel_capaian_kpi')
            ->join('tabel_butir_kpi', 'tabel_butir_kpi.id=tabel_capaian_kpi.id_butir_kpi')
            ->join('tabel_kpi', 'tabel_kpi.idkpi=tabel_capaian_kpi.idkpi')
            ->get();
    }
    function get_grafik()
    {
        return $this->db->table('tabel_capaian_kpi')
            // ->join('tabel_butir_kpi', 'tabel_butir_kpi.id=tabel_capaian_kpi.id_butir_kpi')
            // ->join('tabel_kpi', 'tabel_kpi.idkpi=tabel_capaian_kpi.idkpi')
            ->where('nama_prodi', session('nama_prodi'))
            ->get()->getResultArray();
    }
    function simpancapaian($data)
    {
        return $this->db->table('tabel_capaian_kpi')->insert($data);
    }
    function tampilcapaiankpi_user()
    {
        return $this->db->table('tabel_capaian_kpi')
            ->join('tabel_butir_kpi', 'tabel_butir_kpi.id=tabel_capaian_kpi.id_butir_kpi')
            ->join('tabel_kpi', 'tabel_kpi.idkpi=tabel_capaian_kpi.idkpi')
            ->where('nama_prodi', session('nama_prodi'))
            ->get();
    }
}
