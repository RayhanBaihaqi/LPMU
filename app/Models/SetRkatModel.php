<?php

namespace App\Models;

use CodeIgniter\Model;

class SetRkatModel extends Model
{

    protected $table      = 'set_rkat';
    protected $primaryKey = 'id_setrkat';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['tahun_akademik','semester' ,'pagu' ,'id_user'];

    public function gabung(){
        return $this->db->table('set_rkat')
        ->join('user', 'user.id=set_rkat.id_user')
        ->get()->getResultArray();
    }
    public function edit($id_setrkat=null){
        return $this->db->table('set_rkat')
        ->join('user', 'user.id=set_rkat.id_user')
        ->where('id_setrkat',$id_setrkat)
        ->get()->getResultArray();
    }
    public function tampilRKAT($username=null){
        return $this->db->table('set_rkat')
        ->join('user', 'user.id=set_rkat.id_user')
        ->where('username',$username)
        ->get()->getResultArray();
    }
}

