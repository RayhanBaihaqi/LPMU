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
        ->join('user', 'user.id=detail_rkat2.id_user')
        ->where('username',$username)
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
    function jumlahPk($username=null)
    {
        return $this->db->table('detail_rkat2')
        ->selectSum('anggaranGenap','jumPk')
        ->selectSum('anggaranGanjil','jumPk2')
        ->select('SUM(anggaranGenap) + SUM(anggaranGanjil) as totalAnggaranPk', FALSE)

        ->selectSum('serapGenap','jumPk')
        ->selectSum('serapGanjil','jumPk2')
        ->select('SUM(serapGenap) + SUM(serapGanjil) as totalSerapPk', FALSE)
        ->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')
        ->join('user', 'user.id=detail_rkat2.id_user')

        ->where('username',$username)
        ->where('aktif', '1')
        ->where('kategori','PK')
        ->groupBy('kategori')
        ->get()->getResultArray();
    }
    function jumlahOps($username=null)
    {
        return $this->db->table('detail_rkat2')
        ->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')
        ->join('user', 'user.id=detail_rkat2.id_user')

        ->where('username',$username)
        ->where('aktif', '1')
        ->selectSum('anggaranGenap','jumOps')
        ->selectSum('anggaranGanjil','jumOps2')
        ->select('SUM(anggaranGenap) + SUM(anggaranGanjil) as totalAnggaranOps', FALSE)

        ->selectSum('serapGenap','jumOps')
        ->selectSum('serapGanjil','jumOps2')
        ->select('SUM(serapGenap) + SUM(serapGanjil) as totalSerapOps', FALSE)
        
        ->where('kategori','Ops')
        ->groupBy('kategori')
        ->get()->getResultArray();
    }
    function jumlahInv($username=null)
    {
        return $this->db->table('detail_rkat2')
        ->selectSum('anggaranGenap','jumInv')
        ->selectSum('anggaranGanjil','jumInv2')
        ->select('SUM(anggaranGenap) + SUM(anggaranGanjil) as totalAnggaranInv', FALSE)

        ->selectSum('serapGenap','jumInv')
        ->selectSum('serapGanjil','jumInv2')
        ->select('SUM(serapGenap) + SUM(serapGanjil) as totalSerapInv', FALSE)
        ->join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')
        ->join('user', 'user.id=detail_rkat2.id_user')

        ->where('username',$username)
        ->where('aktif', '1')
        ->where('kategori','Inv')
        ->groupBy('kategori')
        ->get()->getResultArray();
    }
}

