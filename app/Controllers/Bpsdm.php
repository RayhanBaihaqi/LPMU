<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataKpiModel;
use App\Models\DataKpiButirModel;
use App\Models\DataCapaianKpiModel;
use App\Models\usersModel;


class Bpsdm extends BaseController
{

    public function index()
    {
        return view('bpsdm/Dashboard');
    }
    public function listkpi()
    {
        $listkpi = new DataKpiModel();
        $data = [
            'tampildata' => $listkpi->tampildata()->getResult()
        ];
        echo view('/bpsdm/ListKpi', $data);
    }


    //proses kpi
    public function form_tambahkpi()
    {
        helper('form');
        return view('/bpsdm/TambahKpi');
    }
    public function simpankpi()
    {
        $data = [
            'idkpi' => $this->request->getpost('idkpi'),
            'nama_kpi' => $this->request->getpost('nama_kpi'),
        ];
        $listkpi = new DataKpiModel();
        $save = $listkpi->simpankpi($data);

        if ($save) {
            return redirect()->to('/bpsdm/listkpi');
        }
    }
    public function form_updatekpi($idkpi)
    {
        helper('form');
        $listkpi = new DataKpiModel();
        $ambildatakpi = $listkpi->ambildatakpi($idkpi);
        if (count($ambildatakpi->getResult()) > 0) {
            $row = $ambildatakpi->getRow();
            $data = [
                'idkpi' => $idkpi,
                'nama_kpi' => $row->nama_kpi,
            ];
            echo view('bpsdm/UpdateKpi', $data);
        }
    }
    public function updatekpi()
    {
        $idkpi = $this->request->getpost('idkpi');
        $data = [
            'nama_kpi' => $this->request->getpost('nama_kpi'),
        ];
        $listkpi = new DataKpiModel();
        $update1 = $listkpi->update1($data, $idkpi);

        if ($update1) {
            return redirect()->to('/bpsdm/listkpi');
        }
    }
    public function hapuskpi($idkpi)
    {
        $listkpi = new DataKpiModel();
        $listkpi->hapuskpi($idkpi);
        return redirect()->to('/bpsdm/listkpi');
    }

    public function listbutirkpi()
    {
        $listbutirkpi = new DataKpiButirModel();
        $data = [
            'tampildata' => $listbutirkpi->tampildatabutir()->getResult(),
            'sum' => $listbutirkpi->get_sum()->getResult()
        ];
        echo view('/bpsdm/ListKpiButir', $data);
    }
    public function form_tambahbutirkpi()
    {
        helper('form');
        return view('/bpsdm/TambahButirKpi');
    }
    public function simpanbutirkpi()
    {
        $data = [
            'idkpi' => $this->request->getpost('idkpi'),
            'angka_butir' => $this->request->getpost('angka_butir'),
            'nama_butir' => $this->request->getpost('nama_butir'),
            'unit_utama' => $this->request->getpost('unit_utama'),
            'unit_pendukung' => $this->request->getpost('unit_pendukung'),
            'target' => $this->request->getpost('target'),
            'kategori' => $this->request->getpost('kategori'),
            'kegiatan' => $this->request->getpost('kegiatan'),
            'bobot' => $this->request->getpost('bobot'),
        ];
        $listbutirkpi = new DataKpiButirModel();
        $simpan = $listbutirkpi->simpankpibutir($data);

        if ($simpan) {
            return redirect()->to('/bpsdm/listbutirkpi');
        }
    }

    public function form_updatebutirkpi($id)
    {
        helper('form');
        $listbutirkpi = new DataKpiButirModel();
        $ambildatabutir = $listbutirkpi->ambildatabutir($id);
        if (count($ambildatabutir->getResult()) > 0) {
            $row = $ambildatabutir->getRow();
            $data = [
                'id' => $id,
                'idkpi' => $row->idkpi,
                'angka_butir' => $row->angka_butir,
                'nama_butir' => $row->nama_butir,
                'unit_utama' => $row->unit_utama,
                'unit_pendukung' => $row->unit_pendukung,
                'target' => $row->target,
                'kategori' => $row->kategori,
                'kegiatan' => $row->kegiatan,
                'bobot' => $row->bobot,
            ];
            echo view('bpsdm/UpdateButirKpi', $data);
        }
    }
    public function updatebutirkpi()
    {
        $id = $this->request->getpost('id');
        $data = [
            'idkpi' => $this->request->getpost('idkpi'),
            'angka_butir' => $this->request->getpost('angka_butir'),
            'nama_butir' => $this->request->getpost('nama_butir'),
            'unit_utama' => $this->request->getpost('unit_utama'),
            'unit_pendukung' => $this->request->getpost('unit_pendukung'),
            'target' => $this->request->getpost('target'),
            'kategori' => $this->request->getpost('kategori'),
            'kegiatan' => $this->request->getpost('kegiatan'),
            'bobot' => $this->request->getpost('bobot'),
        ];
        $listbutirkpi = new DataKpiButirModel();
        $update2 = $listbutirkpi->update2($data, $id);

        if ($update2) {
            return redirect()->to('/bpsdm/listbutirkpi');
        }
    }

    public function hapusbutirkpi($id)
    {
        $listbutirkpi = new DataKpiButirModel();
        $listbutirkpi->hapuskpibutir($id);
        return redirect()->to('/bpsdm/listbutirkpi');
    }

    public function listcapaiankpi()
    {
        $listcapaiankpi = new DataCapaianKpiModel();
        $data = [
            'tampilcapaiankpi' => $listcapaiankpi->tampilcapaiankpi()->getResult(),
        ];
        echo view('/bpsdm/ListCapaianKpi', $data);
    }
    public function tabelcapaiankpi()
    {
        $tabelcapaiankpi = new DataKpiButirModel();


        return view('/bpsdm/TabelCapaian');
    }

    public function tabelprodi()
    {
        $tabelcapaianprodi = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';
        $data = [
            //jumlah nilai bobot KPI prodi akuntansi
            'totalkpi19_akt' => $tabelcapaianprodi->jmlkpi19prodi('Akuntansi')->getResult(),
            'totalkpi20_akt' => $tabelcapaianprodi->jmlkpi20prodi('Akuntansi')->getResult(),
            'totalkpi21_akt' => $tabelcapaianprodi->jmlkpi21prodi('Akuntansi')->getResult(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi19_mnj' => $tabelcapaianprodi->jmlkpi19prodi('Manajemen')->getResult(),
            'totalkpi20_mnj' => $tabelcapaianprodi->jmlkpi20prodi('Manajemen')->getResult(),
            'totalkpi21_mnj' => $tabelcapaianprodi->jmlkpi21prodi('Manajemen')->getResult(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi19_psi' => $tabelcapaianprodi->jmlkpi19prodi('Psikologi')->getResult(),
            'totalkpi20_psi' => $tabelcapaianprodi->jmlkpi20prodi('Psikologi')->getResult(),
            'totalkpi21_psi' => $tabelcapaianprodi->jmlkpi21prodi('Psikologi')->getResult(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi19_kom' => $tabelcapaianprodi->jmlkpi19prodi('Ilmu Komunikasi')->getResult(),
            'totalkpi20_kom' => $tabelcapaianprodi->jmlkpi20prodi('Ilmu Komunikasi')->getResult(),
            'totalkpi21_kom' => $tabelcapaianprodi->jmlkpi21prodi('Ilmu Komunikasi')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dpi' => $tabelcapaianprodi->jmlkpi19prodi('Desain Produk')->getResult(),
            'totalkpi20_dpi' => $tabelcapaianprodi->jmlkpi20prodi('Desain Produk')->getResult(),
            'totalkpi21_dpi' => $tabelcapaianprodi->jmlkpi21prodi('Desain Produk')->getResult(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dkv' => $tabelcapaianprodi->jmlkpi19prodi('Desain Komunikasi Visual')->getResult(),
            'totalkpi20_dkv' => $tabelcapaianprodi->jmlkpi20prodi('Desain Komunikasi Visual')->getResult(),
            'totalkpi21_dkv' => $tabelcapaianprodi->jmlkpi21prodi('Desain Komunikasi Visual')->getResult(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi19_inf' => $tabelcapaianprodi->jmlkpi19prodi('Informatika')->getResult(),
            'totalkpi20_inf' => $tabelcapaianprodi->jmlkpi20prodi('Informatika')->getResult(),
            'totalkpi21_inf' => $tabelcapaianprodi->jmlkpi21prodi('Informatika')->getResult(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi19_sif' => $tabelcapaianprodi->jmlkpi19prodi('Sistem Informasi')->getResult(),
            'totalkpi20_sif' => $tabelcapaianprodi->jmlkpi20prodi('Sistem Informasi')->getResult(),
            'totalkpi21_sif' => $tabelcapaianprodi->jmlkpi21prodi('Sistem Informasi')->getResult(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi19_tsp' => $tabelcapaianprodi->jmlkpi19prodi('Teknik Sipil')->getResult(),
            'totalkpi20_tsp' => $tabelcapaianprodi->jmlkpi20prodi('Teknik Sipil')->getResult(),
            'totalkpi21_tsp' => $tabelcapaianprodi->jmlkpi21prodi('Teknik Sipil')->getResult(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi19_ars' => $tabelcapaianprodi->jmlkpi19prodi('Arsitektur')->getResult(),
            'totalkpi20_ars' => $tabelcapaianprodi->jmlkpi20prodi('Arsitektur')->getResult(),
            'totalkpi21_ars' => $tabelcapaianprodi->jmlkpi21prodi('Arsitektur')->getResult(),

            //nilai min nilai bobot KPI per TA
            'minimalkpi19_all' => $tabelcapaianprodi->minkpi19_all()->getResult(),
            'minimalkpi20_all' => $tabelcapaianprodi->minkpi20_all()->getResult(),
            'minimalkpi21_all' => $tabelcapaianprodi->minkpi21_all()->getResult(),
            //nilai min nilai bobot KPI per TA
            'maximalkpi19_all' => $tabelcapaianprodi->maxkpi19_all()->getResult(),
            'maximalkpi20_all' => $tabelcapaianprodi->maxkpi20_all()->getResult(),
            'maximalkpi21_all' => $tabelcapaianprodi->maxkpi21_all()->getResult(),
            //nilai min nilai bobot KPI per TA
            'averagekpi19_all' => $tabelcapaianprodi->avgkpi19_all()->getResult(),
            'averagekpi20_all' => $tabelcapaianprodi->avgkpi20_all()->getResult(),
            'averagekpi21_all' => $tabelcapaianprodi->avgkpi21_all()->getResult(),
        ];
        return view('/bpsdm/TabelCapaianProdi', $data);
    }
    public function tabelunit()
    {
        $tabelcapaianprodi = new DataCapaianKpiModel();
        $nama_prodi = 'nama_prodi';
        $data = [
            //jumlah nilai bobot KPI prodi akuntansi
            'totalkpi19_bp' => $tabelcapaianprodi->jmlkpi19unit('Biro Pendidikan')->getResult(),
            'totalkpi20_bp' => $tabelcapaianprodi->jmlkpi20unit('Biro Pendidikan')->getResult(),
            'totalkpi21_bp' => $tabelcapaianprodi->jmlkpi21unit('Biro Pendidikan')->getResult(),

            'totalkpi19_jcal' => $tabelcapaianprodi->jmlkpi19unit('Jaya Center for Advanced Language')->getResult(),
            'totalkpi20_jcal' => $tabelcapaianprodi->jmlkpi20unit('Jaya Center for Advanced Language')->getResult(),
            'totalkpi21_jcal' => $tabelcapaianprodi->jmlkpi21unit('Jaya Center for Advanced Language')->getResult(),

            'totalkpi19_bkal' => $tabelcapaianprodi->jmlkpi19unit('Biro Kemahasiswaan dan Alumni')->getResult(),
            'totalkpi20_bkal' => $tabelcapaianprodi->jmlkpi20unit('Biro Kemahasiswaan dan Alumni')->getResult(),
            'totalkpi21_bkal' => $tabelcapaianprodi->jmlkpi21unit('Biro Kemahasiswaan dan Alumni')->getResult(),

            'totalkpi19_keuangan' => $tabelcapaianprodi->jmlkpi19unit('Keuangan')->getResult(),
            'totalkpi20_keuangan' => $tabelcapaianprodi->jmlkpi20unit('Keuangan')->getResult(),
            'totalkpi21_keuangan' => $tabelcapaianprodi->jmlkpi21unit('Keuangan')->getResult(),

            'totalkpi19_khi' => $tabelcapaianprodi->jmlkpi19unit('Kerjasama dan Hubungan Internasional')->getResult(),
            'totalkpi20_khi' => $tabelcapaianprodi->jmlkpi20unit('Kerjasama dan Hubungan Internasional')->getResult(),
            'totalkpi21_khi' => $tabelcapaianprodi->jmlkpi21unit('Kerjasama dan Hubungan Internasional')->getResult(),

            'totalkpi19_perpustakaan' => $tabelcapaianprodi->jmlkpi19unit('Perpustakaan')->getResult(),
            'totalkpi20_perpustakaan' => $tabelcapaianprodi->jmlkpi20unit('Perpustakaan')->getResult(),
            'totalkpi21_perpustakaan' => $tabelcapaianprodi->jmlkpi21unit('Perpustakaan')->getResult(),

            'totalkpi19_pha' => $tabelcapaianprodi->jmlkpi19unit('Promotion, Humas dan Admisi')->getResult(),
            'totalkpi20_pha' => $tabelcapaianprodi->jmlkpi20unit('Promotion, Humas dan Admisi')->getResult(),
            'totalkpi21_pha' => $tabelcapaianprodi->jmlkpi21unit('Promotion, Humas dan Admisi')->getResult(),

            'totalkpi19_lpmu' => $tabelcapaianprodi->jmlkpi19unit('Lembaga Penjaminan Mutu Universitas')->getResult(),
            'totalkpi20_lpmu' => $tabelcapaianprodi->jmlkpi20unit('Lembaga Penjaminan Mutu Universitas')->getResult(),
            'totalkpi21_lpmu' => $tabelcapaianprodi->jmlkpi21unit('Lembaga Penjaminan Mutu Universitas')->getResult(),

            'totalkpi19_jlp' => $tabelcapaianprodi->jmlkpi19unit('Jaya Launch Pad')->getResult(),
            'totalkpi20_jlp' => $tabelcapaianprodi->jmlkpi20unit('Jaya Launch Pad')->getResult(),
            'totalkpi21_jlp' => $tabelcapaianprodi->jmlkpi21unit('Jaya Launch Pad')->getResult(),

            'totalkpi19_jsdp' => $tabelcapaianprodi->jmlkpi19unit('Jaya Softskill Development Program')->getResult(),
            'totalkpi20_jsdp' => $tabelcapaianprodi->jmlkpi20unit('Jaya Softskill Development Program')->getResult(),
            'totalkpi21_jsdp' => $tabelcapaianprodi->jmlkpi21unit('Jaya Softskill Development Program')->getResult(),

            'totalkpi19_lse' => $tabelcapaianprodi->jmlkpi19unit('Liberal Art, Sustainable and Enterpreneurship')->getResult(),
            'totalkpi20_lse' => $tabelcapaianprodi->jmlkpi20unit('Liberal Art, Sustainable and Enterpreneurship')->getResult(),
            'totalkpi21_lse' => $tabelcapaianprodi->jmlkpi21unit('Liberal Art, Sustainable and Enterpreneurship')->getResult(),

            'totalkpi19_tik' => $tabelcapaianprodi->jmlkpi19unit('Teknologi Informasi dan Komunikasi')->getResult(),
            'totalkpi20_tik' => $tabelcapaianprodi->jmlkpi20unit('Teknologi Informasi dan Komunikasi')->getResult(),
            'totalkpi21_tik' => $tabelcapaianprodi->jmlkpi21unit('Teknologi Informasi dan Komunikasi')->getResult(),

            'totalkpi19_umum' => $tabelcapaianprodi->jmlkpi19unit('Umum')->getResult(),
            'totalkpi20_umum' => $tabelcapaianprodi->jmlkpi20unit('Umum')->getResult(),
            'totalkpi21_umum' => $tabelcapaianprodi->jmlkpi21unit('Umum')->getResult(),

            'totalkpi19_bpsdm' => $tabelcapaianprodi->jmlkpi19unit('BPSDM')->getResult(),
            'totalkpi20_bpsdm' => $tabelcapaianprodi->jmlkpi20unit('BPSDM')->getResult(),
            'totalkpi21_bpsdm' => $tabelcapaianprodi->jmlkpi21unit('BPSDM')->getResult(),

            'totalkpi19_lp2m' => $tabelcapaianprodi->jmlkpi19unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResult(),
            'totalkpi20_lp2m' => $tabelcapaianprodi->jmlkpi20unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResult(),
            'totalkpi21_lp2m' => $tabelcapaianprodi->jmlkpi21unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResult(),

            //nilai min nilai bobot KPI per TA
            'minimalkpi19_unit' => $tabelcapaianprodi->minkpi19_unit()->getResult(),
            'minimalkpi20_unit' => $tabelcapaianprodi->minkpi20_unit()->getResult(),
            'minimalkpi21_unit' => $tabelcapaianprodi->minkpi21_unit()->getResult(),
            //nilai min nilai bobot KPI per TA
            'maximalkpi19_unit' => $tabelcapaianprodi->maxkpi19_unit()->getResult(),
            'maximalkpi20_unit' => $tabelcapaianprodi->maxkpi20_unit()->getResult(),
            'maximalkpi21_unit' => $tabelcapaianprodi->maxkpi21_unit()->getResult(),
            //nilai min nilai bobot KPI per TA
            'averagekpi19_unit' => $tabelcapaianprodi->avgkpi19_unit()->getResult(),
            'averagekpi20_unit' => $tabelcapaianprodi->avgkpi20_unit()->getResult(),
            'averagekpi21_unit' => $tabelcapaianprodi->avgkpi21_unit()->getResult(),
        ];
        return view('/bpsdm/TabelCapaianUnit', $data);
    }

    public function grafikcapaian()
    {
        $grafikrencanakpi = new DataCapaianKpiModel();
        $data = [
            'averagekpi19prodi' => $grafikrencanakpi->avgkpi19_all()->getResultArray(),
            'averagekpi20prodi' => $grafikrencanakpi->avgkpi20_all()->getResultArray(),
            'averagekpi21prodi' => $grafikrencanakpi->avgkpi21_all()->getResultArray(),

            'averagekpi19unit' => $grafikrencanakpi->avgkpi19_unit()->getResultArray(),
            'averagekpi20unit' => $grafikrencanakpi->avgkpi20_unit()->getResultArray(),
            'averagekpi21unit' => $grafikrencanakpi->avgkpi21_unit()->getResultArray(),
        ];
        //}
        // return view('kpi/grafik3_rencana', $data);

        return view('/bpsdm/GrafikCapaian', $data);
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
            'totalkpi19_akt' => $grafikcapaian_prodi->jmlkpi19prodi('Akuntansi')->getResultArray(),
            'totalkpi20_akt' => $grafikcapaian_prodi->jmlkpi20prodi('Akuntansi')->getResultArray(),
            'totalkpi21_akt' => $grafikcapaian_prodi->jmlkpi21prodi('Akuntansi')->getResultArray(),
            //jumlah nilai bobot KPI prodi manajemen
            'totalkpi19_mnj' => $grafikcapaian_prodi->jmlkpi19prodi('Manajemen')->getResultArray(),
            'totalkpi20_mnj' => $grafikcapaian_prodi->jmlkpi20prodi('Manajemen')->getResultArray(),
            'totalkpi21_mnj' => $grafikcapaian_prodi->jmlkpi21prodi('Manajemen')->getResultArray(),
            //jumlah nilai bobot KPI prodi psikologi
            'totalkpi19_psi' => $grafikcapaian_prodi->jmlkpi19prodi('Psikologi')->getResultArray(),
            'totalkpi20_psi' => $grafikcapaian_prodi->jmlkpi20prodi('Psikologi')->getResultArray(),
            'totalkpi21_psi' => $grafikcapaian_prodi->jmlkpi21prodi('Psikologi')->getResultArray(),
            //jumlah nilai bobot KPI prodi IlKom
            'totalkpi19_kom' => $grafikcapaian_prodi->jmlkpi19prodi('Ilmu Komunikasi')->getResultArray(),
            'totalkpi20_kom' => $grafikcapaian_prodi->jmlkpi20prodi('Ilmu Komunikasi')->getResultArray(),
            'totalkpi21_kom' => $grafikcapaian_prodi->jmlkpi21prodi('Ilmu Komunikasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dpi' => $grafikcapaian_prodi->jmlkpi19prodi('Desain Produk')->getResultArray(),
            'totalkpi20_dpi' => $grafikcapaian_prodi->jmlkpi20prodi('Desain Produk')->getResultArray(),
            'totalkpi21_dpi' => $grafikcapaian_prodi->jmlkpi21prodi('Desain Produk')->getResultArray(),
            //jumlah nilai bobot KPI prodi Desain Produk
            'totalkpi19_dkv' => $grafikcapaian_prodi->jmlkpi19prodi('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi20_dkv' => $grafikcapaian_prodi->jmlkpi20prodi('Desain Komunikasi Visual')->getResultArray(),
            'totalkpi21_dkv' => $grafikcapaian_prodi->jmlkpi21prodi('Desain Komunikasi Visual')->getResultArray(),
            //jumlah nilai bobot KPI prodi Informatika
            'totalkpi19_inf' => $grafikcapaian_prodi->jmlkpi19prodi('Informatika')->getResultArray(),
            'totalkpi20_inf' => $grafikcapaian_prodi->jmlkpi20prodi('Informatika')->getResultArray(),
            'totalkpi21_inf' => $grafikcapaian_prodi->jmlkpi21prodi('Informatika')->getResultArray(),
            //jumlah nilai bobot KPI prodi Sistem Informasi
            'totalkpi19_sif' => $grafikcapaian_prodi->jmlkpi19prodi('Sistem Informasi')->getResultArray(),
            'totalkpi20_sif' => $grafikcapaian_prodi->jmlkpi20prodi('Sistem Informasi')->getResultArray(),
            'totalkpi21_sif' => $grafikcapaian_prodi->jmlkpi21prodi('Sistem Informasi')->getResultArray(),
            //jumlah nilai bobot KPI prodi Teksip
            'totalkpi19_tsp' => $grafikcapaian_prodi->jmlkpi19prodi('Teknik Sipil')->getResultArray(),
            'totalkpi20_tsp' => $grafikcapaian_prodi->jmlkpi20prodi('Teknik Sipil')->getResultArray(),
            'totalkpi21_tsp' => $grafikcapaian_prodi->jmlkpi21prodi('Teknik Sipil')->getResultArray(),
            //jumlah nilai bobot KPI prodi Arsitektur
            'totalkpi19_ars' => $grafikcapaian_prodi->jmlkpi19prodi('Arsitektur')->getResultArray(),
            'totalkpi20_ars' => $grafikcapaian_prodi->jmlkpi20prodi('Arsitektur')->getResultArray(),
            'totalkpi21_ars' => $grafikcapaian_prodi->jmlkpi21prodi('Arsitektur')->getResultArray(),

        ];


        return view('/bpsdm/GrafikCapaianProdi', $data);
    }
    public function grafikunit()
    {
        $grafikrencana = new DataKpiButirModel();
        $grafikcapaian_unit = new DataCapaianKpiModel();
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

            'totalkpi19_bp' => $grafikcapaian_unit->jmlkpi19unit('Biro Pendidikan')->getResultArray(),
            'totalkpi20_bp' => $grafikcapaian_unit->jmlkpi20unit('Biro Pendidikan')->getResultArray(),
            'totalkpi21_bp' => $grafikcapaian_unit->jmlkpi21unit('Biro Pendidikan')->getResultArray(),

            'totalkpi19_jcal' => $grafikcapaian_unit->jmlkpi19unit('Jaya Center for Advanced Language')->getResultArray(),
            'totalkpi20_jcal' => $grafikcapaian_unit->jmlkpi20unit('Jaya Center for Advanced Language')->getResultArray(),
            'totalkpi21_jcal' => $grafikcapaian_unit->jmlkpi21unit('Jaya Center for Advanced Language')->getResultArray(),

            'totalkpi19_bkal' => $grafikcapaian_unit->jmlkpi19unit('Biro Kemahasiswaan dan Alumni')->getResultArray(),
            'totalkpi20_bkal' => $grafikcapaian_unit->jmlkpi20unit('Biro Kemahasiswaan dan Alumni')->getResultArray(),
            'totalkpi21_bkal' => $grafikcapaian_unit->jmlkpi21unit('Biro Kemahasiswaan dan Alumni')->getResultArray(),

            'totalkpi19_keuangan' => $grafikcapaian_unit->jmlkpi19unit('Keuangan')->getResultArray(),
            'totalkpi20_keuangan' => $grafikcapaian_unit->jmlkpi20unit('Keuangan')->getResultArray(),
            'totalkpi21_keuangan' => $grafikcapaian_unit->jmlkpi21unit('Keuangan')->getResultArray(),

            'totalkpi19_khi' => $grafikcapaian_unit->jmlkpi19unit('Kerjasama dan Hubungan Internasional')->getResultArray(),
            'totalkpi20_khi' => $grafikcapaian_unit->jmlkpi20unit('Kerjasama dan Hubungan Internasional')->getResultArray(),
            'totalkpi21_khi' => $grafikcapaian_unit->jmlkpi21unit('Kerjasama dan Hubungan Internasional')->getResultArray(),

            'totalkpi19_perpustakaan' => $grafikcapaian_unit->jmlkpi19unit('Perpustakaan')->getResultArray(),
            'totalkpi20_perpustakaan' => $grafikcapaian_unit->jmlkpi20unit('Perpustakaan')->getResultArray(),
            'totalkpi21_perpustakaan' => $grafikcapaian_unit->jmlkpi21unit('Perpustakaan')->getResultArray(),

            'totalkpi19_pha' => $grafikcapaian_unit->jmlkpi19unit('Promotion, Humas dan Admisi')->getResultArray(),
            'totalkpi20_pha' => $grafikcapaian_unit->jmlkpi20unit('Promotion, Humas dan Admisi')->getResultArray(),
            'totalkpi21_pha' => $grafikcapaian_unit->jmlkpi21unit('Promotion, Humas dan Admisi')->getResultArray(),

            'totalkpi19_lpmu' => $grafikcapaian_unit->jmlkpi19unit('Lembaga Penjaminan Mutu Universitas')->getResultArray(),
            'totalkpi20_lpmu' => $grafikcapaian_unit->jmlkpi20unit('Lembaga Penjaminan Mutu Universitas')->getResultArray(),
            'totalkpi21_lpmu' => $grafikcapaian_unit->jmlkpi21unit('Lembaga Penjaminan Mutu Universitas')->getResultArray(),

            'totalkpi19_jlp' => $grafikcapaian_unit->jmlkpi19unit('Jaya Launch Pad')->getResultArray(),
            'totalkpi20_jlp' => $grafikcapaian_unit->jmlkpi20unit('Jaya Launch Pad')->getResultArray(),
            'totalkpi21_jlp' => $grafikcapaian_unit->jmlkpi21unit('Jaya Launch Pad')->getResultArray(),

            'totalkpi19_jsdp' => $grafikcapaian_unit->jmlkpi19unit('Jaya Softskill Development Program')->getResultArray(),
            'totalkpi20_jsdp' => $grafikcapaian_unit->jmlkpi20unit('Jaya Softskill Development Program')->getResultArray(),
            'totalkpi21_jsdp' => $grafikcapaian_unit->jmlkpi21unit('Jaya Softskill Development Program')->getResultArray(),

            'totalkpi19_lse' => $grafikcapaian_unit->jmlkpi19unit('Liberal Art, Sustainable and Enterpreneurship')->getResultArray(),
            'totalkpi20_lse' => $grafikcapaian_unit->jmlkpi20unit('Liberal Art, Sustainable and Enterpreneurship')->getResultArray(),
            'totalkpi21_lse' => $grafikcapaian_unit->jmlkpi21unit('Liberal Art, Sustainable and Enterpreneurship')->getResultArray(),

            'totalkpi19_tik' => $grafikcapaian_unit->jmlkpi19unit('Teknologi Informasi dan Komunikasi')->getResultArray(),
            'totalkpi20_tik' => $grafikcapaian_unit->jmlkpi20unit('Teknologi Informasi dan Komunikasi')->getResultArray(),
            'totalkpi21_tik' => $grafikcapaian_unit->jmlkpi21unit('Teknologi Informasi dan Komunikasi')->getResultArray(),

            'totalkpi19_umum' => $grafikcapaian_unit->jmlkpi19unit('Umum')->getResultArray(),
            'totalkpi20_umum' => $grafikcapaian_unit->jmlkpi20unit('Umum')->getResultArray(),
            'totalkpi21_umum' => $grafikcapaian_unit->jmlkpi21unit('Umum')->getResultArray(),

            'totalkpi19_bpsdm' => $grafikcapaian_unit->jmlkpi19unit('BPSDM')->getResultArray(),
            'totalkpi20_bpsdm' => $grafikcapaian_unit->jmlkpi20unit('BPSDM')->getResultArray(),
            'totalkpi21_bpsdm' => $grafikcapaian_unit->jmlkpi21unit('BPSDM')->getResultArray(),

            'totalkpi19_lp2m' => $grafikcapaian_unit->jmlkpi19unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResultArray(),
            'totalkpi20_lp2m' => $grafikcapaian_unit->jmlkpi20unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResultArray(),
            'totalkpi21_lp2m' => $grafikcapaian_unit->jmlkpi21unit('Lembaga Penelitian dan Pengabdian kepada Masyarakat')->getResultArray(),
        ];


        return view('/bpsdm/GrafikCapaianUnit', $data);
    }
    public function form_ubahpass($id = null)
    {
        $model = new usersModel();
        $username = session('username');
        $data['user'] = $model->where('id', $id)->first();
        return view('/bpsdm/FormUbahPass', $data);
    }
    public function ubahpwd()
    {
        $model = new usersModel();
        $id = session('id');
        //exit();
        $data = [
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $save = $model->update($id, $data);

        if ($save) {
            session()->setFlashdata('pesan', '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Berhasil!</strong> Password anda telah berubah.
		</div>');
        } else {
            session()->setFlashdata('pesan', '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Tidak berhasil!</strong> Password anda tidak berubah.
		</div>');
        }
        //print_r($save);
        //exit();


        return redirect()->to(base_url('bpsdm/form_ubahpass'));
    }
}
