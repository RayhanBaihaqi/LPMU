<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterPenjaminMutu implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if ($session->get('level') == '') {
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // $session = session();
        // if ($session->get('log') == TRUE) {
        //     // return redirect()->to('/backend');
        // }
        $session = session();
        if ($session->get('level') == "penjamin_mutu") {
            return redirect()->to('/penjamin_mutu');
        }
    }
}
