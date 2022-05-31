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
}
