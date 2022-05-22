<?php

namespace App\Models;

use CodeIgniter\Model;

class TahunAkademikModel extends Model
{

    protected $table      = 'tahun_akademik';
    protected $primaryKey = 'id_tahun';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['tahunAkademik','aktif' ];
    
}
