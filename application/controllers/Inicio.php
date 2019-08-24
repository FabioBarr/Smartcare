<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
        $this->load->model('refresh_model');
    }

	public function index()
	{
		$data['Dados'] = $this->refresh_model->refresh();
		$this->load->view('inicio', $data);
	}
}
