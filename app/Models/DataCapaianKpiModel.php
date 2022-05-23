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
    function get_tabel()
    {
        return $this->db->table('tabel_capaian_kpi')
            // ->join('tabel_butir_kpi', 'tabel_butir_kpi.id=tabel_capaian_kpi.id_butir_kpi')
            // ->join('tabel_kpi', 'tabel_kpi.idkpi=tabel_capaian_kpi.idkpi')
            ->where('nama_prodi', session('nama_prodi'))
            ->get()->getResultArray();
    }

    function get_grafik()
    {
        return $this->db->table('tabel_capaian_kpi')
            // ->join('tabel_butir_kpi', 'tabel_butir_kpi.id=tabel_capaian_kpi.id_butir_kpi')
            // ->join('tabel_kpi', 'tabel_kpi.idkpi=tabel_capaian_kpi.idkpi')
            ->where('nama_prodi', session('nama_prodi'))
            ->get()->getResultArray();
    }
    function hitungkpi1_18($nama_prodi = null)
    {
        // return $this->db->query("SELECT tahun_ajaran,idkpi,SUM(nilai_bobot) as total1 FROM `tabel_capaian_kpi` WHERE nama_prodi='$nama_prodi' and idkpi=1 GROUP BY tahun_ajaran,idkpi ");
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi1_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=1 ");
    }
    function hitungkpi1_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi1_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=1 ");
    }
    function hitungkpi1_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi1_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=1 ");
    }
    function hitungkpi1_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi1_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=1 ");
    }
    function hitungkpi2_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi2_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=2 ");
    }
    function hitungkpi2_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi2_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=2 ");
    }
    function hitungkpi2_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi2_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=2 ");
    }
    function hitungkpi2_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi2_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=2 ");
    }
    function hitungkpi3_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi3_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=3 ");
    }
    function hitungkpi3_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi3_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=3 ");
    }
    function hitungkpi3_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi3_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=3 ");
    }
    function hitungkpi3_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi3_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=3 ");
    }
    function hitungkpi4_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi4_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=4 ");
    }
    function hitungkpi4_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi4_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=4 ");
    }
    function hitungkpi4_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi4_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=4 ");
    }
    function hitungkpi4_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi4_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and idkpi=4 ");
    }
    function hitungkpi5_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi5_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=5 ");
    }
    function hitungkpi5_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi5_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=5 ");
    }
    function hitungkpi5_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi5_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=5 ");
    }
    function hitungkpi5_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi5_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=5 ");
    }
    function hitungkpi6_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi6_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=6 ");
    }
    function hitungkpi6_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi6_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=6 ");
    }
    function hitungkpi6_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi6_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=6 ");
    }
    function hitungkpi6_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi6_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=6 ");
    }
    function hitungkpi7_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi7_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=7 ");
    }
    function hitungkpi7_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi7_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=7 ");
    }
    function hitungkpi7_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi7_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=7 ");
    }
    function hitungkpi7_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi7_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=7 ");
    }
    function hitungkpi8_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi8_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=8 ");
    }
    function hitungkpi8_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi8_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=8 ");
    }
    function hitungkpi8_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi8_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=8 ");
    }
    function hitungkpi8_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi8_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=8 ");
    }
    function hitungkpi9_18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi9_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi' and idkpi=9 ");
    }
    function hitungkpi9_19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi9_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' and idkpi=9 ");
    }
    function hitungkpi9_20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi9_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' and idkpi=9 ");
    }
    function hitungkpi9_21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as jumlahkpi9_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' and idkpi=9 ");
    }
    function jmlkpi18($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_18 FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    }
    function jmlkpi19($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    }
    function jmlkpi20($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    }
    function jmlkpi21($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
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
