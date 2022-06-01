<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterAdmin implements FilterInterface
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
        if ($session->get('level') == "admin") {
            return redirect()->to('/admin');
        }
    }
}
