<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
        $this->load->model('refresh_model');
    }

	public function index()
	{
		if($this->session->userdata('logado') == TRUE){
		$data['Sensores'] = $this->refresh_model->refresh_sensores();
		$data['Ambientes'] = $this->refresh_model->refresh_ambientes();
		$data['User'] = $this->refresh_model->dados_usuario();
		$this->load->view('template', $data);
		} else {

		$this->load->view('login');
		}

	}
}
