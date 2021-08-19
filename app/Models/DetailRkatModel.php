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

    protected $allowedFields = ['nama_kegiatan','semester' ,'anggaran' ,'keterangan' ,'jenis_kpi' ,'butir','jenis_anggaran', 'id_set'];

}

