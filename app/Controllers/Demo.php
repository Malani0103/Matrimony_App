<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Demo extends BaseController
{
    public function my_function()
    {
        $a="malani";
        if($a=="malani")
        {
            echo "Its correct";
        }
        else
        {
            echo "Not correct";
        }
    }
}
