<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sample extends BaseController
{
    public function index()
    {
        $a="malani";
        echo $a;
    }
}
