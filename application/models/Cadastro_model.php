<?php
date_default_timezone_set('America/Sao_Paulo');

class Cadastro_model extends CI_Model{

    function cadastra_proposta($data){

        $verificaEmail = $this->db->query("SELECT * FROM propostas WHERE CPFPaciente = '$data[CPFPaciente]'")->row();
        if($verificaEmail){
            return 1;
        } else {
            $this->db->insert('propostas', $data);
            return 2;
        }

    }

    
    


    
    

}