<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetailRkatModel;
use App\Models\SetRkatModel;
use App\Models\UsersModel;
use Dompdf\Dompdf;

class Pdf extends BaseController
{
	public function __construct()
    {
        $this->DetailRkatModel = new DetailRkatModel();
    }

	public function pdfListData()
    {
		$model = new DetailRkatModel();
        $username = session('username');
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $data['detail_rkat2'] = $this->DetailRkatModel->gabung();
        // load HTML content
        $html = view('rkat/ListData', $data);
        $dompdf->loadHtml($html);
        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream();
        $dompdf->stream('data rkat.pdf', array(
            "Attachment" => false
        ));
    }
	public function pdfRincian()
    {

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $model = new DetailRkatModel();
        $username = session('username');
        $data = [
            'set_rkat' => $this->DetailRkatModel->tampilDataSetRKAT($username),
            'pk' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'PK')->findAll(),
            'ops' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'OPS')->findAll(),
            'inv' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('kategori', 'INV')->findAll(),
            'tahunGenap' => $model->join('set_rkat', 'set_rkat.id_setrkat=detail_rkat2.id_set')->join('user', 'user.id=set_rkat.id_user')->where('username', $username)->where('tahunAkademik', '2019/2020')->findAll(),
            'detail_rkat2' => $this->DetailRkatModel->gabung($username),
        ];
        // load HTML content
        $html = view('rkat/RincianRkat', $data);
        $dompdf->loadHtml($html);
        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream();
        $dompdf->stream('data rkat.pdf', array(
            "Attachment" => false
        ));
    }
}
