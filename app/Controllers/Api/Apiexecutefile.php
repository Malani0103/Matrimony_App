<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class ApiExecuteFile extends ResourceController
{
    protected $format = 'json';

    private $users = [
        ['id' => 1, 'name' => 'Malani'],
        ['id' => 2, 'name' => 'Priya'],
    ];

    // GET /api/user
    public function index()
    {
                return $this->respond($this->users);

    }

    // POST /api/user
    public function create()
    {
        $json = $this->request->getJSON();
        $newUser = [
            'id' => rand(100, 999),
            'name' => $json->name ?? 'Unknown'
        ];
        return $this->respondCreated($newUser);
    }

    // GET /api/user/{id}
    public function show($id = null)
    {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $this->respond($user);
            }
        }
        return $this->failNotFound("User not found");
    }

    // PUT /api/user/{id}
    public function update($id = null)
    {
        $json = $this->request->getJSON();
        return $this->respond([
            'id' => $id,
            'name' => $json->name ?? 'Updated name',
            'message' => 'User updated successfully'
        ]);
    }

    // DELETE /api/user/{id}
    public function delete($id = null)
    {
        return $this->respondDeleted([
            'id' => $id,
            'message' => 'User deleted'
        ]);
    }
}