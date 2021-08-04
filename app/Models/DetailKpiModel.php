<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailKpiModel extends Model
{

    protected $table      = 'detail_kpi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['kriteria', 'standar', 'pic', 'nama_pic', 'ketercapaian', 'skor', 'file', 'created_at'];

    protected $useTimestamps = true;
}
