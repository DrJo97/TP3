<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Builder\Class_;

class IsLoggedIn implements FilterInterface
{
    public function before(
        RequestInterface $request,
        $arguments = null
    ) {

        $session = service('session');
        $loggedIn = $session->get('loggedIn');
        if (!$loggedIn) {
            return redirect()->to(site_url('login'));
        }
        return $request;
    }

    public function after(
        RequestInterface $request,
        ResponseInterface $response,
        $arguments = null
    ) {
        return $response;
    }



}