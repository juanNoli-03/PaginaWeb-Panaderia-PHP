<?php
class LogueoCliente extends CI_Model {

    function __construct() { 
        parent::__construct();
    }

    function validarIngreso ($usuario,$pass){        
        
        $consulta = $this->db->query("SELECT usuario,pass FROM clientes WHERE usuario ='" . $usuario. "' and pass='" . $pass."'");

        if ($consulta->num_rows () == 1) {

            return $consulta->row ();
            
        } else {
                
            return false;

        }
    }  
}