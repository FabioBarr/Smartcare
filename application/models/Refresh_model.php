<?php

class Refresh_model extends CI_Model{

    function refresh_sensores(){

        //$this->load->database(); 
        //$this->db->reconnect();

        $query = $this->db->query("
            SELECT 
            pacientes.Nome as Paciente, pacientes.Idade, 
            ambientes.Nome as Ambiente, ambientes.idAmbiente,
            sensores.idSensor, sensores.Nome, sensores.Status, 
            sensores.AtivadoEm, sensores.DesativadoEm, sensores.Leitura 
            FROM pacientes, ambientes, sensores 
            WHERE pacientes.idPaciente = ambientes.idPaciente 
            AND ambientes.idAmbiente = sensores.idAmbiente
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
}