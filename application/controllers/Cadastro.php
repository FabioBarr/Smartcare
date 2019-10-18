<?php

class Cadastro extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('cadastro_model');
        
        }

    public function proposta() {

        $data = array(
            'nomePaciente' => $this->input->post('nomePaciente'),
            'CPFPaciente' => $this->input->post('CPFPaciente'),
            'nomeResponsavel' => $this->input->post('nomeResponsavel'),
            'emailResponsavel' => $this->input->post('emailResponsavel'),
            'telefoneResponsavel' => $this->input->post('telefoneResponsavel'),
            'CEP' => $this->input->post('CEP'),
            'Logradouro' => $this->input->post('Logradouro'),
            'Numero' => $this->input->post('Numero'),
            'Unidade' => $this->input->post('Unidade'),
            'Bairro' => $this->input->post('Bairro'),
            'Cidade' => $this->input->post('Cidade'),
            'UF' => $this->input->post('UF'),
            'Complemento' => $this->input->post('Complemento'),
          );

          $result = $this->cadastro_model->cadastra_proposta($data);

          if($result == 1){ //CPF já cadastrado

            $this->session->set_flashdata('erro', '
            <center><div class="alert alert-warning w-75 mt-4" role="alert"><strong>Ocorreu um erro. </strong>Já existe proposta feita por esse paciente.</div></center>');
            redirect(base_url());

          } else if ($result == 2){ //Proposta enviada com sucesso

            $this->session->set_flashdata('sucesso', '
            <center><div class="alert alert-success w-75 mt-4" role="alert"><strong>Proposta enviada com sucesso! </strong>Em breve um consultor entrará em contato, aguarde.</div></center>');
            redirect(base_url());
              
          } else {

            $this->session->set_flashdata('erro', '
            <center><div class="alert alert-warning w-75 mt-4" role="alert"><strong>Ocorreu um erro. </strong>Tente novamente.</div></center>');
            redirect(base_url());

          }

    }
}
