<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pathologist extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the required model
        $this->load->model('Pathologist_model');
    }

    public function index() {
        // Fetch data from the model
        $data['patients'] = $this->Pathologist_model->get_patient_data();
        
        // Load the dashboard view
        $this->load->view('pathologist_dashboard', $data);

        
    }
}
?>