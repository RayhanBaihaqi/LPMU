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
        // ->join('detail_rkat2', 'detail_rkat2.id_user=user.id')
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
}

