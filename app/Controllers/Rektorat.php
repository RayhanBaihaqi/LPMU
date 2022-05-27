<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataKpiModel;
use App\Models\DataKpiButirModel;
use App\Models\DataCapaianKpiModel;


class Rektorat extends BaseController
{

    public function index()
    {
        return view('rektorat/Dashboard');
    }
    public function listcapaiankpi()
    {
        $listcapaiankpi = new DataCapaianKpiModel();
        $data = [
            'tampilcapaiankpi' => $listcapaiankpi->tampilcapaiankpi()->getResult(),
        ];
        echo view('/rektorat/ListCapaianKpi', $data);
    }
    public function tabelcapaiankpi()
    {
        $tabelcapaiankpi = new DataKpiButirModel();


        return view('/rektorat/TabelCapaian');
    }

    public function tabelprodi()
    {
        $tabelcapaianprodi = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';
        $data = [
            //jumlah nilai bobot KPI prodi akuntansi
            'totalkpi18_akt' => $tabelcapaianprodi->jmlkpi18akt('Akuntansi')->getResult(),
            'totalkpi19_akt' => $tabelcapaianprodi->jmlkpi19akt('Akuntansi')->getResult(),
            'totalkpi20_akt' => $tabelcapaianprodi->jmlkpi20akt('Akuntansi')->getResult(),
            'totalkpi21_akt' => $tabelcapaianprodi->jmlkpi21akt('Akuntansi')->getResult(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi18_mnj' => $tabelcapaianprodi->jmlkpi18mnj('Manajemen')->getResult(),
            'totalkpi19_mnj' => $tabelcapaianprodi->jmlkpi19mnj('Manajemen')->getResult(),
            'totalkpi20_mnj' => $tabelcapaianprodi->jmlkpi20mnj('Manajemen')->getResult(),
            'totalkpi21_mnj' => $tabelcapaianprodi->jmlkpi21mnj('Manajemen')->getResult(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi18_psi' => $tabelcapaianprodi->jmlkpi18psi('Psikologi')->getResult(),
            'totalkpi19_psi' => $tabelcapaianprodi->jmlkpi19psi('Psikologi')->getResult(),
            'totalkpi20_psi' => $tabelcapaianprodi->jmlkpi20psi('Psikologi')->getResult(),
            'totalkpi21_psi' => $tabelcapaianprodi->jmlkpi21psi('Psikologi')->getResult(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi18_kom' => $tabelcapaianprodi->jmlkpi18kom('Ilmu Komunikasi')->getResult(),
            'totalkpi19_kom' => $tabelcapaianprodi->jmlkpi19kom('Ilmu Komunikasi')->getResult(),
            'totalkpi20_kom' => $tabelcapaianprodi->jmlkpi20kom('Ilmu Komunikasi')->getResult(),
            'totalkpi21_kom' => $tabelcapaianprodi->jmlkpi21kom('Ilmu Komunikasi')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dpi' => $tabelcapaianprodi->jmlkpi18dpi('Desain Produk')->getResult(),
            'totalkpi19_dpi' => $tabelcapaianprodi->jmlkpi19dpi('Desain Produk')->getResult(),
            'totalkpi20_dpi' => $tabelcapaianprodi->jmlkpi20dpi('Desain Produk')->getResult(),
            'totalkpi21_dpi' => $tabelcapaianprodi->jmlkpi21dpi('Desain Produk')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dkv' => $tabelcapaianprodi->jmlkpi18dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi19_dkv' => $tabelcapaianprodi->jmlkpi19dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi20_dkv' => $tabelcapaianprodi->jmlkpi20dkv('Desain Komunikasi Visual')->getResult(),
            'totalkpi21_dkv' => $tabelcapaianprodi->jmlkpi21dkv('Desain Komunikasi Visual')->getResultArray(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi18_inf' => $tabelcapaianprodi->jmlkpi18inf('Informatika')->getResultArray(),
            'totalkpi19_inf' => $tabelcapaianprodi->jmlkpi19inf('Informatika')->getResultArray(),
            'totalkpi20_inf' => $tabelcapaianprodi->jmlkpi20inf('Informatika')->getResultArray(),
            'totalkpi21_inf' => $tabelcapaianprodi->jmlkpi21inf('Informatika')->getResultArray(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi18_sif' => $tabelcapaianprodi->jmlkpi18sif('Sistem Informasi')->getResultArray(),
            'totalkpi19_sif' => $tabelcapaianprodi->jmlkpi19sif('Sistem Informasi')->getResultArray(),
            'totalkpi20_sif' => $tabelcapaianprodi->jmlkpi20sif('Sistem Informasi')->getResultArray(),
            'totalkpi21_sif' => $tabelcapaianprodi->jmlkpi21sif('Sistem Informasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi18_tsp' => $tabelcapaianprodi->jmlkpi18tsp('Teknik Sipil')->getResultArray(),
            'totalkpi19_tsp' => $tabelcapaianprodi->jmlkpi19tsp('Teknik Sipil')->getResultArray(),
            'totalkpi20_tsp' => $tabelcapaianprodi->jmlkpi20tsp('Teknik Sipil')->getResultArray(),
            'totalkpi21_tsp' => $tabelcapaianprodi->jmlkpi21tsp('Teknik Sipil')->getResultArray(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi18_ars' => $tabelcapaianprodi->jmlkpi18ars('Arsitektur')->getResultArray(),
            'totalkpi19_ars' => $tabelcapaianprodi->jmlkpi19ars('Arsitektur')->getResultArray(),
            'totalkpi20_ars' => $tabelcapaianprodi->jmlkpi20ars('Arsitektur')->getResultArray(),
            'totalkpi21_ars' => $tabelcapaianprodi->jmlkpi21ars('Arsitektur')->getResultArray(),
        ];
        return view('/rektorat/TabelCapaianProdi', $data);
    }

    public function grafikcapaian()
    {
        $grafikrencanakpi = new DataKpiButirModel();
        $data = [
            //'tampilgrafikrencana' => $grafikrencanakpi->get_grafik(),
            //standar 1 per TA
            'hasilrencanakpi_1' => $grafikrencanakpi->jml_kpi1()->getResultArray(),
            //standar 2 per TA
            'hasilrencanakpi_2' => $grafikrencanakpi->jml_kpi2()->getResultArray(),
            //standar 3 per TA
            'hasilrencanakpi_3' => $grafikrencanakpi->jml_kpi3()->getResultArray(),
            //standar 4 per TA
            'hasilrencanakpi_4' => $grafikrencanakpi->jml_kpi4()->getResultArray(),
            //standar 5 per TA
            'hasilrencanakpi_5' => $grafikrencanakpi->jml_kpi5()->getResultArray(),
            //standar 6 per TA
            'hasilrencanakpi_6' => $grafikrencanakpi->jml_kpi6()->getResultArray(),
            //standar 7 per TA
            'hasilrencanakpi_7' => $grafikrencanakpi->jml_kpi7()->getResultArray(),
            //standar 8 per TA
            'hasilrencanakpi_8' => $grafikrencanakpi->jml_kpi8()->getResultArray(),
            //standar 9 per TA
            'hasilrencanakpi_9' => $grafikrencanakpi->jml_kpi9()->getResultArray(),
            // 'tampilgrafikkpi' => $this->DataCapaianKpiModel->get_grafik(),
        ];
        //}
        // return view('kpi/grafik3_rencana', $data);

        return view('/rektorat/GrafikCapaian', $data);
    }
    public function grafikprodi()
    {
        $grafikrencana = new DataKpiButirModel();
        $grafikcapaian_prodi = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';

        $data = [

            'hasilrencanakpi_1' => $grafikrencana->jml_kpi1()->getResultArray(),
            //standar 2 per TA
            'hasilrencanakpi_2' => $grafikrencana->jml_kpi2()->getResultArray(),
            //standar 3 per TA
            'hasilrencanakpi_3' => $grafikrencana->jml_kpi3()->getResultArray(),
            //standar 4 per TA
            'hasilrencanakpi_4' => $grafikrencana->jml_kpi4()->getResultArray(),
            //standar 5 per TA
            'hasilrencanakpi_5' => $grafikrencana->jml_kpi5()->getResultArray(),
            //standar 6 per TA
            'hasilrencanakpi_6' => $grafikrencana->jml_kpi6()->getResultArray(),
            //standar 7 per TA
            'hasilrencanakpi_7' => $grafikrencana->jml_kpi7()->getResultArray(),
            //standar 8 per TA
            'hasilrencanakpi_8' => $grafikrencana->jml_kpi8()->getResultArray(),
            //standar 9 per TA
            'hasilrencanakpi_9' => $grafikrencana->jml_kpi9()->getResultArray(),

            //jumlah nilai bobot KPI prodi akuntansi
            'totalkpi18_akt' => $grafikcapaian_prodi->jmlkpi18akt('Akuntansi')->getResultArray(),
            'totalkpi19_akt' => $grafikcapaian_prodi->jmlkpi19akt('Akuntansi')->getResultArray(),
            'totalkpi20_akt' => $grafikcapaian_prodi->jmlkpi20akt('Akuntansi')->getResultArray(),
            'totalkpi21_akt' => $grafikcapaian_prodi->jmlkpi21akt('Akuntansi')->getResultArray(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi18_mnj' => $grafikcapaian_prodi->jmlkpi18mnj('Manajemen')->getResultArray(),
            'totalkpi19_mnj' => $grafikcapaian_prodi->jmlkpi19mnj('Manajemen')->getResultArray(),
            'totalkpi20_mnj' => $grafikcapaian_prodi->jmlkpi20mnj('Manajemen')->getResultArray(),
            'totalkpi21_mnj' => $grafikcapaian_prodi->jmlkpi21mnj('Manajemen')->getResultArray(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi18_psi' => $grafikcapaian_prodi->jmlkpi18psi('Psikologi')->getResultArray(),
            'totalkpi19_psi' => $grafikcapaian_prodi->jmlkpi19psi('Psikologi')->getResultArray(),
            'totalkpi20_psi' => $grafikcapaian_prodi->jmlkpi20psi('Psikologi')->getResultArray(),
            'totalkpi21_psi' => $grafikcapaian_prodi->jmlkpi21psi('Psikologi')->getResultArray(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi18_kom' => $grafikcapaian_prodi->jmlkpi18kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi19_kom' => $grafikcapaian_prodi->jmlkpi19kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi20_kom' => $grafikcapaian_prodi->jmlkpi20kom('Ilmu Komunikasi')->getResultArray(),
            'totalkpi21_kom' => $grafikcapaian_prodi->jmlkpi21kom('Ilmu Komunikasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dpi' => $grafikcapaian_prodi->jmlkpi18dpi('Desain Produk')->getResultArray(),
            'totalkpi19_dpi' => $grafikcapaian_prodi->jmlkpi19dpi('Desain Produk')->getResultArray(),
            'totalkpi20_dpi' => $grafikcapaian_prodi->jmlkpi20dpi('Desain Produk')->getResultArray(),
            'totalkpi21_dpi' => $grafikcapaian_prodi->jmlkpi21dpi('Desain Produk')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi18_dkv' => $grafikcapaian_prodi->jmlkpi18dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi19_dkv' => $grafikcapaian_prodi->jmlkpi19dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi20_dkv' => $grafikcapaian_prodi->jmlkpi20dkv('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi21_dkv' => $grafikcapaian_prodi->jmlkpi21dkv('Desain Komunikasi Visual')->getResultArray(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi18_inf' => $grafikcapaian_prodi->jmlkpi18inf('Informatika')->getResultArray(),
            'totalkpi19_inf' => $grafikcapaian_prodi->jmlkpi19inf('Informatika')->getResultArray(),
            'totalkpi20_inf' => $grafikcapaian_prodi->jmlkpi20inf('Informatika')->getResultArray(),
            'totalkpi21_inf' => $grafikcapaian_prodi->jmlkpi21inf('Informatika')->getResultArray(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi18_sif' => $grafikcapaian_prodi->jmlkpi18sif('Sistem Informasi')->getResultArray(),
            'totalkpi19_sif' => $grafikcapaian_prodi->jmlkpi19sif('Sistem Informasi')->getResultArray(),
            'totalkpi20_sif' => $grafikcapaian_prodi->jmlkpi20sif('Sistem Informasi')->getResultArray(),
            'totalkpi21_sif' => $grafikcapaian_prodi->jmlkpi21sif('Sistem Informasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi18_tsp' => $grafikcapaian_prodi->jmlkpi18tsp('Teknik Sipil')->getResultArray(),
            'totalkpi19_tsp' => $grafikcapaian_prodi->jmlkpi19tsp('Teknik Sipil')->getResultArray(),
            'totalkpi20_tsp' => $grafikcapaian_prodi->jmlkpi20tsp('Teknik Sipil')->getResultArray(),
            'totalkpi21_tsp' => $grafikcapaian_prodi->jmlkpi21tsp('Teknik Sipil')->getResultArray(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi18_ars' => $grafikcapaian_prodi->jmlkpi18ars('Arsitektur')->getResultArray(),
            'totalkpi19_ars' => $grafikcapaian_prodi->jmlkpi19ars('Arsitektur')->getResultArray(),
            'totalkpi20_ars' => $grafikcapaian_prodi->jmlkpi20ars('Arsitektur')->getResultArray(),
            'totalkpi21_ars' => $grafikcapaian_prodi->jmlkpi21ars('Arsitektur')->getResultArray(),



        ];


        return view('/rektorat/GrafikCapaianProdi', $data);
    }
}
