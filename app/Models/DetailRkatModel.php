<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailRkatModel extends Model
{

    protected $table      = 'detail_rkat';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['kategori','anggaranGenap' ,'anggaranGasal' ,'no_kegiatan' ,'indikator' , 'target', 'nama_kegiatan', 'kpi', 'butir', 'tahunAkademik','id_set', 'total'];

    // public function gabung(){
    //     return $this->db->table('detail_rkat')
    //     ->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat.id_set')
    //     ->get()->getResultArray();
    // }
    public function gabung($username=null){
        return $this->db->table('detail_rkat')
        ->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat.id_set')
        ->join('user', 'user.id=set_rkat.id_user')
        ->where('username',$username)
        ->get()->getResultArray();
    }
    public function tampilRKAT($id_user=null){
        return $this->db->table('set_rkat')
        ->join('user', 'user.id=set_rkat.id_user')
        ->where('username',$username)
        ->get()->getResultArray();
    }
    public function tambahBatch($data){
        return $this->db->table('detail_rkat')
        ->insertBatch($data);
        // return $this->db->table('detail_rkat')
        // ->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat.id_set')
        // ->where('id_user',$id_user)
        // ->get()->getResultArray();
    }
    public function tampilDataSetRKAT($username=null){
        return $this->db->table('set_rkat')
        ->join('user', 'user.id=set_rkat.id_user')
        ->where('username',$username)
        ->get()->getResultArray();
    }

}

