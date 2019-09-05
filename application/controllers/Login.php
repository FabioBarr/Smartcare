<?php

class Login extends CI_Controller {

    public function index() {

        $this->sqlite = $this->load->database('sqlite', true);

        $email = $this->input->post('email');
		$senha = $this->input->post('senha');
		
        $query = $this->sqlite->query("SELECT * FROM pacientes WHERE Email = '$email'");
        
		/*
		//INICIO GOOGLE RECAPTCHA V3
		$captcha = $this->input->post('captcha-response');
		$secretKey  = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
		$statusMsg = '';
        // Get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$captcha);
		$responseData = json_decode($verifyResponse);
        if($responseData->success){
			//NÃO É ROBÔ
        }else{
            $this->session->set_flashdata('erro', '<center><div class="alert alert-danger w-75 m-5" role="alert">Acesso negado, tente novamente mais tarde.</div></center>');
            redirect(base_url());
		}
		//FIM GOOGLE RECAPTCHA V3
        */
        if ($query->num_rows() != 1) {
            $this->session->set_flashdata('erro', '<div class="col-lg-12"><center><div class="alert alert-danger w-75 m-5" role="alert"><strong>Usuário ou senha incorreta! </strong>Tente novamente.</div></center></div>');
            redirect(base_url());
        } else if ($query->num_rows() == 1 && $query->row()->Verificado != 1) {
            $this->session->set_flashdata('erro', '<div class="col-lg-12"><center><div class="alert alert-danger w-75 m-5" role="alert">ATENCÃO!<br>A sua conta ainda não foi ativada! </strong>Acesse seu email e clique no link de ativação.<br>Não deixe de verificar a caixa <i>SPAM</i> de seu email!<br></div></center></div>');
            redirect(base_url());
        }
        $row = $query->row();
        if (!password_verify($senha, $row->Senha)) {
            // Senha Incorreta
            $this->session->set_flashdata('erro', '<div class="col-lg-12"><center><div class="alert alert-danger w-75 m-5" role="alert"><strong>Usuário ou senha incorreta! </strong>Tente novamente.</div></center></div>');
            redirect(base_url());
        } else {
            // Logado com sucesso
            $dadosSessao['logado'] = TRUE;
            $dadosSessao['email'] = $email;
            $dadosSessao['idPaciente'] = $row->idPaciente;
            $dadosSessao['usuario'] = $row->Nome;
            $this->session->set_userdata($dadosSessao);
            $referred_from = $this->session->userdata('referred_from');
            redirect($referred_from, 'refresh');
        }
    }

    public function deslogar() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
