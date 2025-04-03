<?php

namespace App\Controllers;

use App\Models\PatientModel;

class PatientDashboard extends BaseController
{
    public function index()
    {
        $patientModel = new PatientModel();

        // Fetch all records
        $data['patients'] = $patientModel->findAll();

        // Load the dashboard view
        return view('dashboard', $data);
    }
}