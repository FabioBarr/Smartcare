<?php

class Refresh_model extends CI_Model{
function __construct() {
parent::__construct();
}

    function refresh(){

        $query = $this->db->query("SELECT * FROM pacientes");
        return $query->result();
    }
}