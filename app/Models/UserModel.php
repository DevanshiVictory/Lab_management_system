<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'role'];

    public function getUser($username) {
        return $this->where('username', $username)->first();
    }
}
