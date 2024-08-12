<?php

class administrarArticulos extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

public function guardarArticulo($nombre,$descripcion,$precio, $stock){     

    $consulta = $this->db->query("INSERT INTO articulos (nombre, descripcion, precio, stock)   VALUES ('$nombre','$descripcion','$precio','$stock')");  
  
}

public function getArticulos(){

    $query = $this->db->get('articulos');
    
    if($query->num_rows() > 0) {
        
        return $query;
    
    } else {

        return false;
    } 
}
function eliminarArticulo($id){

    $consulta = $this->db->query("UPDATE articulos SET `articulos`.`stock` = 0 WHERE `articulos`.`idArticulo` = $id");

}

function insertarArticulo($data){
    if ($this->db->affected_row() >= 0){
        return true;
    }else{
        return false;
    }
}

function getArticulosPost(){

    $query = $this->db->get('articulos');
    return $query->result_array();
}

function getArticulo($id){

    $this->db->where('idArticulo', $id);
    $query = $this->db->get('articulos');
    return $query->row();
}

function actualizarArticulo($data, $id){

    $this->db->where('idArticulo', $id);
    $this->db->update('articulos', $data);

}
    
}
