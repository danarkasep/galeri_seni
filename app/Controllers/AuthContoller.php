<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        return view('Galeri_seni');
    }

    public function detail()
    {
        return view('detail');
    }

    
}