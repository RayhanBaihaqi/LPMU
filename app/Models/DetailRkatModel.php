<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailRkatModel extends Model
{

    protected $table      = 'detail_rkat2';
    protected $primaryKey = 'id_rkat';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['kategori','anggaranGenap' ,'anggaranGanjil' ,'no_kegiatan' ,'indikator' , 'target', 'nama_kegiatan', 'kpi', 'butir','id_pagu', 'serapGanjil', 'total', 'serapGenap', 'persenSerapGanjil','persenSerapGenap','id_tahun','id_persen','id_user'];


    public function gabung($username=null){
        return $this->db->table('detail_rkat2')
        ->join('pagu_rkat', 'pagu_rkat.id_pagu = detail_rkat2.id_pagu')
        ->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')
        ->join('user', 'user.id=detail_rkat2.id_user')
        ->where('username',$username)
        ->where('aktif', '1')
        ->get()->getResultArray();
    }

    public function gabungRektor(){
        return $this->db->table('detail_rkat2')
        ->join('pagu_rkat', 'pagu_rkat.id_pagu = detail_rkat2.id_pagu')
        ->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')
        ->join('user', 'user.id=detail_rkat2.id_user')
        ->where('aktif', '1')
        ->get()->getResultArray();
    }

    public function tambahBatch($data){
        return $this->db->table('detail_rkat2')
        ->insertBatch($data);

    }
    public function tampilDataSetRKAT($username=null){
        return $this->db->table('pagu_rkat')
        ->join('user', 'user.id=pagu_rkat.id_user')
        ->join('tahun_akademik', 'tahun_akademik.id_tahun=pagu_rkat.id_tahun')
        ->where('aktif', '1')
        ->where('username',$username)
        ->get()->getResultArray();
    }
    public function tampilDataTahun(){
        return $this->db->table('detail_rkat2')
        ->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')
        ->get()->getResultArray();
    }
    public function getData()
    {
        return $this->findAll();
    }

    //PK
    function totalGanjilPk($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGanjil) as totalGanjilPk FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='PK' and aktif='1'");
    }
    function totalGenapPk($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGenap) as totalGenapPk FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='PK'and aktif='1'");
    }
    function totalPk($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGenap) + SUM(anggaranGanjil) as totalPk FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='PK'and aktif='1'");
    }
    //Ops
    function totalGanjilOps($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGanjil) as totalGanjilOps FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='OPS'and aktif='1'");
    }
    function totalGenapOps($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGenap) as totalGenapOps FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='OPS'and aktif='1'");
    }
    function totalOps($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGenap) + SUM(anggaranGanjil) as totalOps FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='OPS'and aktif='1'");
    }
    //Inv
    function totalGanjilInv($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGanjil) as totalGanjilInv FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='INV'and aktif='1'");
    }
    function totalGenapInv($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGenap) as totalGenapInv FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='INV'and aktif='1'");
    }
    function totalInv($username=null)
    {
        return $this->db->query("SELECT SUM(anggaranGenap) + SUM(anggaranGanjil) as totalInv FROM `detail_rkat2` join user on user.id=detail_rkat2.id_user join tahun_akademik on tahun_akademik.id_tahun=detail_rkat2.id_tahun where username='$username' and kategori='INV'and aktif='1'");
    }
}

