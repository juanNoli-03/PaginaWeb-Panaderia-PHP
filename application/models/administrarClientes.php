<?php

class administrarClientes extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

public function guardarCliente($usuario,$pass){     

    $consulta = $this->db->query("INSERT INTO clientes (usuario, pass)   VALUES ('$usuario','$pass')");  
  
}

public function getClientes(){

    $query = $this->db->get('clientes');
    
    if($query->num_rows() > 0) {
        
        return $query;
    
    } else {

        return false;
    } 
}
function eliminarCliente($id){

    $consulta = $this->db->query("DELETE FROM clientes WHERE `clientes`.`idCliente` = $id");

}

function insertarCliente($data){
    if ($this->db->affected_row() >= 0){
        return true;
    }else{
        return false;
    }
}

function getCliente($id){

    $this->db->where('idCliente', $id);
    $query = $this->db->get('clientes');
    return $query->row();
}

function actualizarCliente($data, $id){

    $this->db->where('idCliente', $id);
    $this->db->update('clientes', $data);

    return false;
}
    
}
