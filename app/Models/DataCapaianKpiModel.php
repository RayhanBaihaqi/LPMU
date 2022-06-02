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

    //query penjumlahan semua nilai bonbot prodi akuntansi

    function jmlkpi19prodi($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_prodi FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    }
    function jmlkpi20prodi($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_prodi FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    }
    function jmlkpi21prodi($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_prodi FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    }



    //query minimal, max,rata2 tiap prodi TA 19/20
    function minkpi19($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot19) as min_19 FROM (SELECT SUM(nilai_bobot) as tot19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }
    function maxkpi19($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot19) as max_19 FROM (SELECT SUM(nilai_bobot) as tot19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }
    function avgkpi19($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot19) as avg_19 FROM (SELECT SUM(nilai_bobot) as tot19 FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }

    //query minimal, max,rata2 tiap prodi TA 20/21
    function minkpi20($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot20) as min_20 FROM (SELECT SUM(nilai_bobot) as tot20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }
    function maxkpi20($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot20) as max_20 FROM (SELECT SUM(nilai_bobot) as tot20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }
    function avgkpi20($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot20) as avg_20 FROM (SELECT SUM(nilai_bobot) as tot20 FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }

    //query minimal, max,rata2 tiap prodi TA 21/22
    function minkpi21($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot21) as min_21 FROM (SELECT SUM(nilai_bobot) as tot21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }
    function maxkpi21($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot21) as max_21 FROM (SELECT SUM(nilai_bobot) as tot21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }
    function avgkpi21($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot21) as avg_21 FROM (SELECT SUM(nilai_bobot) as tot21 FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' GROUP BY idkpi) as m");
    }

    //query minimal, max,rata2 seluruh prodi TA 19/20
    function minkpi19_all($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot19all) as min_19_all FROM (SELECT SUM(nilai_bobot) as tot19all FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level='prodi' GROUP BY nama_prodi) as m");
    }
    function maxkpi19_all($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot19all) as max_19_all FROM (SELECT SUM(nilai_bobot) as tot19all FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level='prodi' GROUP BY nama_prodi) as m");
    }
    function avgkpi19_all($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot19all) as avg_19_all FROM (SELECT SUM(nilai_bobot) as tot19all FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level='prodi' GROUP BY nama_prodi) as m");
    }

    //query minimal, max,rata2 seluruh prodi TA 20/21
    function minkpi20_all($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot20all) as min_20_all FROM (SELECT SUM(nilai_bobot) as tot20all FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level='prodi' GROUP BY nama_prodi) as m");
    }
    function maxkpi20_all($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot20all) as max_20_all FROM (SELECT SUM(nilai_bobot) as tot20all FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level='prodi' GROUP BY nama_prodi) as m");
    }
    function avgkpi20_all($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot20all) as avg_20_all FROM (SELECT SUM(nilai_bobot) as tot20all FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level='prodi' GROUP BY nama_prodi) as m");
    }

    //query minimal, max,rata2 seluruh prodi TA 21/22
    function minkpi21_all($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot21all) as min_21_all FROM (SELECT SUM(nilai_bobot) as tot21all FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and level='prodi' GROUP BY nama_prodi) as m");
    }
    function maxkpi21_all($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot21all) as max_21_all FROM (SELECT SUM(nilai_bobot) as tot21all FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' GROUP BY nama_prodi) as m");
    }
    function avgkpi21_all($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot21all) as avg_21_all FROM (SELECT SUM(nilai_bobot) as tot21all FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and level='prodi' GROUP BY nama_prodi) as m");
    }

    //query penjumlahan semua nilai bonbot unit
    function jmlkpi19unit($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_unit FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    }
    function jmlkpi20unit($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_unit FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    }
    function jmlkpi21unit($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_unit FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    }

    //query penjumlahan semua nilai bonbot unit
    function totkpi19prodi($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_prodi FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level in('prodi') ");
    }
    function totkpi20prodi($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_prodi FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level in('prodi') ");
    }
    function totkpi21prodi($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_prodi FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and level in('prodi') ");
    }

    //query penjumlahan semua nilai bonbot unit
    function totkpi19unit($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_unit FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level not in('prodi') ");
    }
    function totkpi20unit($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_unit FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level not in('prodi') ");
    }
    function totkpi21unit($nama_prodi = null)
    {
        return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_unit FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and level not in('prodi') ");
    }

    //query minimal, max,rata2 seluruh prodi TA 19/20
    function minkpi19_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot19all) as min_19_unit FROM (SELECT SUM(nilai_bobot) as tot19all FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level not in('prodi') GROUP BY nama_prodi) as m");
    }
    function maxkpi19_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot19all) as max_19_unit FROM (SELECT SUM(nilai_bobot) as tot19all FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level not in('prodi') GROUP BY nama_prodi) as m");
    }
    function avgkpi19_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot19all) as avg_19_unit FROM (SELECT SUM(nilai_bobot) as tot19all FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and level not in('prodi') GROUP BY nama_prodi) as m");
    }

    //query minimal, max,rata2 seluruh prodi TA 20/21
    function minkpi20_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot20all) as min_20_unit FROM (SELECT SUM(nilai_bobot) as tot20all FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level not in('prodi') GROUP BY nama_prodi) as m");
    }
    function maxkpi20_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot20all) as max_20_unit FROM (SELECT SUM(nilai_bobot) as tot20all FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level not in('prodi') GROUP BY nama_prodi) as m");
    }
    function avgkpi20_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot20all) as avg_20_unit FROM (SELECT SUM(nilai_bobot) as tot20all FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and level not in('prodi') GROUP BY nama_prodi) as m");
    }

    //query minimal, max,rata2 seluruh prodi TA 21/22
    function minkpi21_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT min(tot21all) as min_21_unit FROM (SELECT SUM(nilai_bobot) as tot21all FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and level not in('prodi') GROUP BY nama_prodi) as m");
    }
    function maxkpi21_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT max(tot21all) as max_21_unit FROM (SELECT SUM(nilai_bobot) as tot21all FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and level not in('prodi') GROUP BY nama_prodi) as m");
    }
    function avgkpi21_unit($nama_prodi = null)
    {
        return $this->db->query("SELECT avg(tot21all) as avg_21_unit FROM (SELECT SUM(nilai_bobot) as tot21all FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and level not in('prodi') GROUP BY nama_prodi) as m");
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
    function ambildatacapaian($id)
    {
        return $this->db->table('tabel_capaian_kpi')->getWhere(['id' => $id]);
    }
    function updatecapaian($data, $id)
    {
        return $this->db->table('tabel_capaian_kpi')->update($data, ['id' => $id]);
    }
    function simpankpicapaian($data)
    {
        return $this->db->table('tabel_capaian_kpi')->insert($data);
    }
    function hapuskpicapaian($id)
    {
        return $this->db->table('tabel_capaian_kpi')->delete(['id' => $id]);
    }

    //query penjumlahan semua nilai bonbot unit
    // function jmlkpi19jcal($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_jcal FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20jcal($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_jcal FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21jcal($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_jcal FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot unit
    // function jmlkpi19bkal($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_bkal FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20jcal($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_bkal FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21jcal($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_bkal FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }


    // //query penjumlahan semua nilai bonbot prodi akuntansi
    // function jmlkpi18akt($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_akt FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19akt($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_akt FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20akt($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_akt FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21akt($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_akt FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi manajemen
    // function jmlkpi18mnj($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_mnj FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19mnj($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_mnj FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20mnj($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_mnj FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21mnj($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_mnj FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi Psikologi
    // function jmlkpi18psi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_psi FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19psi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_psi FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20psi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_psi FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21psi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_psi FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi Ilkom
    // function jmlkpi18kom($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_kom FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19kom($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_kom FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20kom($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_kom FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21kom($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_kom FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi Desain Produk
    // function jmlkpi18dpi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_dpi FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19dpi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_dpi FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20dpi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_dpi FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21dpi($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_dpi FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi dkv
    // function jmlkpi18dkv($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_dkv FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19dkv($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_dkv FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20dkv($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_dkv FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21dkv($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_dkv FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi informatika
    // function jmlkpi18inf($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_inf FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19inf($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_inf FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20inf($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_inf FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21inf($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_inf FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi sistem informasi
    // function jmlkpi18sif($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_sif FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19sif($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_sif FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20sif($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_sif FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21sif($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_sif FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi teksip
    // function jmlkpi18tsp($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_tsp FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19tsp($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_tsp FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20tsp($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_tsp FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21tsp($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_tsp FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }

    // //query penjumlahan semua nilai bonbot prodi arsitek
    // function jmlkpi18ars($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_18_ars FROM `tabel_capaian_kpi` where tahun_ajaran='2018/2019' and nama_prodi='$nama_prodi'  ");
    // }
    // function jmlkpi19ars($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_19_ars FROM `tabel_capaian_kpi` where tahun_ajaran='2019/2020' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi20ars($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_20_ars FROM `tabel_capaian_kpi` where tahun_ajaran='2020/2021' and nama_prodi='$nama_prodi' ");
    // }
    // function jmlkpi21ars($nama_prodi = null)
    // {
    //     return $this->db->query("SELECT SUM(nilai_bobot) as tot_21_ars FROM `tabel_capaian_kpi` where tahun_ajaran='2021/2022' and nama_prodi='$nama_prodi' ");
    // }
}
