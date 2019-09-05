<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refresh extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
        $this->load->model('refresh_model');
    }

	public function index()
	{
		$data['Sensores'] = $this->refresh_model->refresh_sensores();
		$data['Ambientes'] = $this->refresh_model->refresh_ambientes();

		echo json_encode($data);
	}
}
