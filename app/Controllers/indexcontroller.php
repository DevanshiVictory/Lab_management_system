<?php

namespace App\Controllers;
use App\Models\modelindex;

class indexcontroller extends BaseController
{
    public function index()
    {
        // You can fetch stats or info from the model if needed
        $model = new modelindex();

        // Pass data if needed
        $data = [];

        return view('index', $data);
    }
}
