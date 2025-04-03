<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pathologist_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database
    }
    public function index() {
        $data['p1'] = $this->Pathologist_model->get_patient_data();
        print_r($data['p1']); // Debug output
        exit;
    }
    // Function to fetch patient data
    public function get_patient_data() {
        $query = $this->db->get('p1'); // Assuming 'patients' is your table name
        return $query->result_array(); // Return data as an array
    }
}
?>
