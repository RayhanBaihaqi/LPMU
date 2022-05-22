<?php

namespace App\Models;

use CodeIgniter\Model;

class PaguRkatModel extends Model
{

    protected $table      = 'pagu_rkat';
    protected $primaryKey = 'id_pagu';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['jumlah_pagu' ,'id_tahun' ,'id_user'];

    public function gabung(){
        return $this->db->table('pagu_rkat')
        ->join('user', 'user.id=pagu_rkat.id_user')
        ->get()->getResultArray();
    }
    public function edit($id_setrkat=null){
        return $this->db->table('pagu_rkat')
        ->join('user', 'user.id=pagu_rkat.id_user')
        ->where('id_setrkat',$id_setrkat)
        ->get()->getResultArray();
    }
    public function tampilRKAT($username=null){
        return $this->db->table('pagu_rkat')
        ->join('user', 'user.id=pagu_rkat.id_user')
        ->where('username',$username)
        ->get()->getResultArray();
    }
}
