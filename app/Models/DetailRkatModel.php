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

    protected $allowedFields = ['nama_kegiatan','semester' ,'anggaran' ,'keterangan' ,'id_kpi' ,'butir','jenis_anggaran', 'id_set'];

    public function gabung(){
        return $this->db->table('detail_rkat')
        ->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat.id_set')
        ->get()->getResultArray();
    }
    public function tampilRKAT($id_user=null){
        return $this->db->table('detail_rkat')
        ->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat.id_set')
        ->where('id_user',$id_user)
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
    public function gabungkpi(){
        return $this->db->table('detail_rkat')
        ->join('data_kpi', 'data_kpi.idkpi = detail_rkat.id_kpi')
        ->get()->getResultArray();
    }
    public function gabungbutir(){
        return $this->db->table('detail_rkat')
        ->join('data_butir', 'data_butir.idbutir = detail_rkat.id_butir')
        ->get()->getResultArray();
    }

}

