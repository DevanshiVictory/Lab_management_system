<?php

namespace App\Models;
use CodeIgniter\Model;

class modelindex extends Model
{
    protected $table = 'tests'; // Just an example, change as per your database
    protected $primaryKey = 'id';
    protected $allowedFields = ['patient_name', 'status', 'test_type', 'created_at'];
}
