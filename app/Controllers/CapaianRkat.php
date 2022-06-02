<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\TahunAkademikModel;
use App\Models\PersenSerapModel;

class CapaianRkat extends BaseController
{
    public function __construct(){
        $this->DetailRkatModel= new DetailRkatModel();
        $this->TahunAkademikModel = new TahunAkademikModel();
        $this->PersenSerapModel = new PersenSerapModel();
    }
    
    //user capaian rkat
    public function indexcapaianbyuser()
    {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $this->DetailRkatModel->gabungkpi();

        return view('rkat/ListData', $data);
    }
    public function createcapaianbyuser() {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            // 'detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik2' => $model-> join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->
                                         join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->
                                         join('user', 'user.id=detail_rkat2.id_user')->
                                         where('username', $username)->
                                         where('aktif', '1')->
                                         findAll(),
            // 'count_detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->countAllResults()
        ];
        return view('rkat/FormCapaian', $data);
    }
    public function createcapaianbykeuangan() {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            // 'detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik2' => $model-> join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->
                                         join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->
                                         join('user', 'user.id=detail_rkat2.id_user')->
                                         where('username', $username)->
                                         where('aktif', '1')->
                                         findAll(),
            // 'count_detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->countAllResults()
        ];
        return view('keuangan/FormCapaian', $data);
    }
    public function createcapaianbylpmu() {
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            // 'detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->findAll(),
            'tahunAkademik' => $this->TahunAkademikModel->where('aktif', '1')->first(),
            'pagu_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'tahunAkademik2' => $model-> join('tahun_akademik', 'tahun_akademik.id_tahun=detail_rkat2.id_tahun')->
                                         join('pagu_rkat', 'pagu_rkat.id_pagu=detail_rkat2.id_pagu')->
                                         join('user', 'user.id=detail_rkat2.id_user')->
                                         where('username', $username)->
                                         where('aktif', '1')->
                                         findAll(),
            // 'count_detail_rkat2' => $model->join('set_rkat', 'set_rkat.id_setrkat = detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username',$username)->countAllResults()
        ];
        return view('lpmu/FormCapaian', $data);
    }
    public function savecapaian()
	{
		$nama_kegiatan = $this->request->getVar('nama_kegiatan');
        $semester = $this->request->getVar('semester');
        $anggaran = $this->request->getVar('anggaran');
        $keterangan = $this->request->getVar('keterangan');
        $id_kpi = $this->request->getVar('id_kpi');
        $jenis_anggaran = $this->request->getVar('jenis_anggaran');
        $id_set = $this->request->getVar('id_set');
        $jumlah = $this->request->getVar('jumlah');


            for ($i=0; $i < $jumlah; $i++) { 
                $this->DetailRkatModel->insert([
                    'nama_kegiatan'=>$nama_kegiatan[$i],
                    'semester'=>$semester[$i],  
                    'anggaran'=>$anggaran[$i],  
                    'keterangan'=>$keterangan[$i],  
                    'id_kpi'=>$id_kpi[$i],  
                    'jenis_anggaran'=>$jenis_anggaran[$i],  
                    'id_set'=>$id_set[$i],  
                ]);
            }
		return redirect()->to(base_url('setrkat/createbyuser'))->with('status', 'Data Berhasil ditambah');
	}
    public function editcapaianbyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id',$id)->first();

        return view('rkat/EditDataRkat',$data);
    }
    public function updatecapaianbyuser() {
        $model = new DetailRkatModel();
        $id = $this->request->getVar('id');
        $data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'semester' => $this->request->getVar('semester'),
            'anggaran' => $this->request->getVar('anggaran'),
            'keterangan' => $this->request->getVar('keterangan'),
            'id_kpi' => $this->request->getVar('id_kpi'),
            'jenis_anggaran' => $this->request->getVar('jenis_anggaran'),
            'id_set' => $this->request->getVar('id_set'),

        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('rkat/indexbyuser'));
    }
    public function deletecapaianbyuser($id = null) {
        $model = new DetailRkatModel();
        $data['detail_rkat2'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('rkat/indexbyuser'));
    }

}