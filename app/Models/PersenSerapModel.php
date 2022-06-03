<?php

namespace App\Models;

use CodeIgniter\Model;

class PersenSerapModel extends Model
{

    protected $table      = 'Persen_serap';
    protected $primaryKey = 'id_persen';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['persenPk','id_tahun' ,'id_user','persenOps','persenInv','persenPkOps'];

    function minPkOps($username=null)
    {
        return $this->db->query("SELECT min(persenPkOps) as minPkOps FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where username='$username'");
    }
    function maxPkOps($username=null)
    {
        return $this->db->query("SELECT max(persenPkOps) as maxPkOps FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where username='$username'");
    }
    function avgPkOps($username=null)
    {
        return $this->db->query("SELECT avg(persenPkOps) as avgPkOps FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where username='$username'");
    }
    //Rata-Rata Prodi
    function avgPkOpsSeluruh1920()
    {
        return $this->db->query("SELECT avg(persenPkOps) as avgPkOpsSeluruh1920 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2019/2020'AND level='prodi'");
    }
    function avgPkOpsSeluruh2021()
    {
        return $this->db->query("SELECT avg(persenPkOps) as avgPkOpsSeluruh2021 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2020/2021'AND level='prodi'");
    }
    function avgPkOpsSeluruh2122()
    {
        return $this->db->query("SELECT avg(persenPkOps) as avgPkOpsSeluruh2122 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2021/2022' AND level='prodi'");
    }
    //Rata-Rata Unit
    function avgPkOpsSeluruhUnit1920()
    {
        return $this->db->query("SELECT avg(persenPkOps) as avgPkOpsSeluruhUnit1920 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2019/2020'AND level='unit'");
    }
    function avgPkOpsSeluruhUnit2021()
    {
        return $this->db->query("SELECT avg(persenPkOps) as avgPkOpsSeluruhUnit2021 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2020/2021'AND level='unit'");
    }
    function avgPkOpsSeluruhUnit2122()
    {
        return $this->db->query("SELECT avg(persenPkOps) as avgPkOpsSeluruhUnit2122 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2021/2022' AND level='unit'");
    }

    //inv
    function minInv($username=null)
    {
        return $this->db->query("SELECT min(persenInv) as minInv FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where username='$username'");
    }
    function maxInv($username=null)
    {
        return $this->db->query("SELECT max(persenInv) as maxInv FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where username='$username'");
    }
    function avgInv($username=null)
    {
        return $this->db->query("SELECT avg(persenInv) as avgInv FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where username='$username'");
    }
    //Rata-Rata Prodi
    function avgInvSeluruh1920()
    {
        return $this->db->query("SELECT avg(persenInv) as avgInvSeluruh1920 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2019/2020'AND level='prodi'");
    }
    function avgInvSeluruh2021()
    {
        return $this->db->query("SELECT avg(persenInv) as avgInvSeluruh2021 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2020/2021'AND level='prodi'");
    }
    function avgInvSeluruh2122()
    {
        return $this->db->query("SELECT avg(persenInv) as avgInvSeluruh2122 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2021/2022' AND level='prodi'");
    }
    //Rata-Rata Unit
    function avgInvSeluruhUnit1920()
    {
        return $this->db->query("SELECT avg(persenInv) as avgInvSeluruhUnit1920 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2019/2020'AND level='unit'");
    }
    function avgInvSeluruhUnit2021()
    {
        return $this->db->query("SELECT avg(persenInv) as avgInvSeluruhUnit2021 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2020/2021'AND level='unit'");
    }
    function avgInvSeluruhUnit2122()
    {
        return $this->db->query("SELECT avg(persenInv) as avgInvSeluruhUnit2122 FROM `persen_serap` join user on user.id=persen_serap.id_user join tahun_akademik on tahun_akademik.id_tahun=persen_serap.id_tahun where tahunAkademik='2021/2022' AND level='unit'");
    }
}
