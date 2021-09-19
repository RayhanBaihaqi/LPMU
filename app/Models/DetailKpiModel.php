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

    protected $allowedFields = ['tahun_akademik', 'prodi_unit', 'nama_prodi_unit', 'kriteria', 'standar', 'pic', 'nama_pic', 'rencana_realisasi', 'ketercapaian', 'skor', 'file'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
