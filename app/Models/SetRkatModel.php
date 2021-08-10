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

}

