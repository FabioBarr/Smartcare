<?php

class Refresh_model extends CI_Model{

    function refresh_sensores(){

        $this->db->reconnect();

        //$this->load->database(); 
        //$this->db->reconnect();

        $query = $this->db->query("
            SELECT 
            pacientes.Nome as Paciente, pacientes.Idade, 
            ambientes.Nome as Ambiente, ambientes.idAmbiente,
            sensores.idSensor, sensores.Nome, leituras_sensores.Status, 
            leituras_sensores.AtivadoEm, leituras_sensores.DesativadoEm, 
            CONVERT_TZ(leituras_sensores.LeituraEm,'+00:00','-03:00') as LeituraEm, leituras_sensores.LeituraHumidade,
            leituras_sensores.LeituraTemperatura, leituras_sensores.LeituraPresenca, sensores.Tipo
            FROM pacientes, ambientes, sensores, leituras_sensores 
            WHERE pacientes.idPaciente = ambientes.idPaciente 
            AND ambientes.idAmbiente = sensores.idAmbiente AND sensores.idSensor = leituras_sensores.id_sensor
            ORDER BY Tipo ASC
        ");
        
        return $query->result();
    }

    function refresh_ambientes(){

        $query = $this->db->query("
            SELECT DISTINCT
            ambientes.Nome as Ambiente, ambientes.idAmbiente
            FROM pacientes, ambientes, sensores 
            WHERE pacientes.idPaciente = ambientes.idPaciente 
            AND ambientes.idAmbiente = sensores.idAmbiente
        ");
        
        return $query->result();
    }

    function entra_leitura_sensores($data){                        
        
        $this->db->query("UPDATE leituras_sensores SET LeituraHumidade = $data[hum], LeituraTemperatura = $data[temp], LeituraPresenca = $data[presenca], LeituraEm = NOW() WHERE id_sensor = $data[id_sensor]");
        
    }
}