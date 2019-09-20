<?php
date_default_timezone_set('America/Sao_Paulo');

class Refresh_model extends CI_Model{

    function refresh_sensores(){

        $email = $this->input->post('email');
		$senha = $this->input->post('senha');
		
        //$this->load->database(); 
        //$this->db->reconnect();

        $query = $this->db->query("
            SELECT 
            pacientes.Nome as Paciente, pacientes.Idade, 
            ambientes.Nome as Ambiente, ambientes.idAmbiente,
            sensores.idSensor, sensores.Nome, leituras_sensores.Status, 
            leituras_sensores.AtivadoEm, leituras_sensores.DesativadoEm,
            leituras_sensores.LeituraEm, leituras_sensores.LeituraHumidade,
            leituras_sensores.LeituraTemperatura, leituras_sensores.LeituraPresenca, sensores.Tipo
            FROM pacientes, ambientes, sensores, leituras_sensores 
            WHERE pacientes.idPaciente = ambientes.idPaciente AND pacientes.idPaciente = 2
            AND ambientes.idAmbiente = sensores.idAmbiente AND sensores.idSensor = leituras_sensores.id_sensor
            ORDER BY Tipo ASC
        ");
        
        return $query->result();
    }

    function refresh_ambientes(){


        $now = date('Y-m-d H:i:s', time());
        
        $query = $this->db->query("SELECT leituras_sensores.idleitura_sensor, leituras_sensores.LeituraEm, leituras_sensores.Status FROM pacientes, ambientes, sensores, leituras_sensores 
        WHERE pacientes.idPaciente = ambientes.idPaciente AND pacientes.idPaciente = 2
        AND ambientes.idAmbiente = sensores.idAmbiente AND sensores.idSensor = leituras_sensores.id_sensor");
        
        foreach($query->result() as $row){

            $LeituraEm = $row->LeituraEm;
            $Agora = date("Y-m-d H:i:s");
            $_5MinutosAtras = date('Y-m-d H:i:s',strtotime('-5 minute',strtotime($Agora)));

                if($LeituraEm < $_5MinutosAtras && $row->Status == 1){
                    $this->db->query("UPDATE leituras_sensores SET leituras_sensores.Status = 0, leituras_sensores.DesativadoEm = '$now' WHERE leituras_sensores.idleitura_sensor = $row->idleitura_sensor");
                } else if ($LeituraEm > $_5MinutosAtras && $row->Status == 0){
                    $this->db->query("UPDATE leituras_sensores SET leituras_sensores.Status = 1, leituras_sensores.AtivadoEm = '$now' WHERE leituras_sensores.idleitura_sensor = $row->idleitura_sensor");
                }
        }

        $query = $this->db->query("
            SELECT DISTINCT
            ambientes.Nome as Ambiente, ambientes.idAmbiente
            FROM pacientes, ambientes, sensores 
            WHERE pacientes.idPaciente = ambientes.idPaciente 
            AND ambientes.idAmbiente = sensores.idAmbiente AND pacientes.idPaciente = 2
        ");
        
        return $query->result();
    }

    function entra_leitura_sensores($data){

        $this->db = $this->load->database('db', true);

        $now = date('Y-m-d H:i:s', time());
        
        $this->db->query("UPDATE leituras_sensores SET LeituraHumidade = $data[hum], LeituraTemperatura = $data[temp], LeituraPresenca = $data[presenca], LeituraEm = '$now' WHERE id_sensor = $data[id_sensor]");
        
    }
}