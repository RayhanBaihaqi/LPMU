<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{

    protected $table      = 'detail_kpi';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['keterangan', 'kategori', 'standar', 'skor', 'created_at'];

    protected $useTimestamps = true;
}
