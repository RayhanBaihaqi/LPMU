<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKpiAdmin extends Model
{

    protected $table      = 'tabel_kpi';
    protected $primaryKey = 'idkpi';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    //protected $allowedFields = ['tahun_akademik', 'prodi_unit', 'nama_prodi_unit', 'kriteria', 'standar', 'pic', 'nama_pic', 'rencana_realisasi', 'ketercapaian', 'skor', 'file'];

    protected $allowedFields = ['nama_kpi', 'huruf_kpi'];
}
