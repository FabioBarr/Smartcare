<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atualiza extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('refresh_model');
    }

	public function index()
	{
		return $this->produtos_model->refresh_model();

		
	}
}
