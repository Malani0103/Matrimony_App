<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RegisterFile extends BaseController
{
    public function index(): string
    {
        return view('sample');
    }
}
