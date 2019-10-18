<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
        $this->load->model('refresh_model');
    }

	public function retorno()
	{
		
		$data = array(
			'id_sensor' 	=> $this->input->post('id_sensor'),
			'hum' 			=> $this->input->post('hum'),
			'temp' 			=> $this->input->post('temp'),
			'presenca' 		=> $this->input->post('presenca'),
		  );

		$this->refresh_model->entra_leitura_sensores($data);
	}
}
