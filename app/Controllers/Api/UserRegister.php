<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class UserRegister extends ResourceController
{
    protected $format = 'json';

    public function create()
    {
        $json = $this->request->getJSON();

        if (
            !$json || !isset($json->firstName) || !isset($json->lastName) ||
            !isset($json->username) || !isset($json->email) || !isset($json->password)
        ) {
            return $this->failValidationErrors("Missing required fields.");
        }
        echo "inside1 user model";
       // $userModel = new UserModel();
        echo "inside user model";

        // Insert data into database
        $data = [
            'firstName' => $json->firstName,
            'lastName'  => $json->lastName,
            'username'  => $json->username,
            'email'     => $json->email,
            'password'  => password_hash($json->password, PASSWORD_DEFAULT)
        ];

       
        return $this->respond([
            'status'  => 'success',
            'message' => 'User registered and stored successfully.',
            'data'    => [
                'firstName' => $json->firstName,
                'lastName'  => $json->lastName,
                'username'  => $json->username,
                'email'     => $json->email
            ]
        ]);
    }
}