<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refresh extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
        $this->load->model('refresh_model');
    }

	public function index()
	{
		if($this->session->userdata('logado') == TRUE){ //COLOCAR AQUI O TOKEN DE SESSÃO DE USUÁRIO PARA PROTEGER OS DADOS DO JSON

		$sensores = $this->refresh_model->refresh_sensores();
		$data['Ambientes'] = $this->refresh_model->refresh_ambientes();

		echo json_encode($sensores);

		} else {return false;}
	}
}
