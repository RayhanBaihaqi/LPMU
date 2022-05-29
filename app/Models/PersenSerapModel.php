<?php

namespace App\Models;

use CodeIgniter\Model;

class PersenSerapModel extends Model
{

    protected $table      = 'Persen_serap';
    protected $primaryKey = 'id_persen';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['persenPk','id_tahun' ,'id_user','persenOps','persenInv','persenPkOps'];

}
