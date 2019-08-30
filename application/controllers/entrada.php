<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
        //$this->load->model('refresh_model');
    }

	public function index()
	{
		$data = array(
			'Nome' => $this->input->post('Nome'),
			'Leitura' => $this->input->post('Nome'),
		  );

		//$this->refresh_model->refresh_sensores();
	}
}
