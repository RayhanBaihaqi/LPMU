<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKpiModel extends Model
{

    protected $table      = 'data_butir';
    protected $primaryKey = 'idbutir';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['angka_butir','nama_butir','idkpi'];

}

