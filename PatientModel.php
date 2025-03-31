<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    protected $table = 'patients';  // Table name in database
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'age', 'gender', 'test_results', 'appointment_date'];
}
