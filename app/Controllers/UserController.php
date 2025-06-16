<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function create()
    {
        $userModel = new UserModel();

        $data = [
            'firstName' => 'Malani',
            'lastName'  => 'M',
            'username'  => 'malanim',
            'email'     => 'malani@example.com',
            'password'  => password_hash('123456', PASSWORD_DEFAULT)
        ];

        if ($userModel->insert($data)) {
            return "User inserted successfully.";
        } else {
            return "Failed to insert user.";
        }
    }
}
