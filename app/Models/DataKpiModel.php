<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKpiModel extends Model
{

    protected $table      = 'data_kpi';
    protected $primaryKey = 'idkpi';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['huruf_kpi' ,'nama_kpi' ,'angka_butir','nama_butir'];

}

