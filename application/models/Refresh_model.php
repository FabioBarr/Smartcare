<?php

class Refresh_model extends CI_Model{
function __construct() {
parent::__construct();
}

    function refresh(){

        $query = $this->db->query("
            SELECT 
            pacientes.Nome as Paciente, pacientes.Idade, 
            ambientes.Nome as Ambiente, 
            sensores.idSensor, sensores.Nome, sensores.Status, sensores.AtivadoEm, sensores.DesativadoEm, sensores.Leitura 
            FROM pacientes, ambientes, sensores 
            WHERE pacientes.idPaciente = ambientes.idPaciente 
            AND ambientes.idAmbiente = sensores.idAmbiente
        ");
        return $query->result();
    }
}