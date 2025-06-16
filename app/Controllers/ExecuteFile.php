<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ExecuteFile extends BaseController
{
     public function create()
    {
        $json = $this->request->getJSON();  // Accepts JSON input
        $Firstname = $json->Firstname ?? 'Unknown';
        $Lastname = $json->Lastname ?? 'Unknown';
        $Email = $json->Email ?? 'Unknown';
        $Password = $json->Password ?? 'Unknown';

        $data = [
            'id' => rand(100, 999),
            'Firstname' => $Firstname,
            'Lastname'=>$Lastname,'Email'=>$Email,'Password'=>$Password
        ];

        return $this->respond($data);
    }
}
