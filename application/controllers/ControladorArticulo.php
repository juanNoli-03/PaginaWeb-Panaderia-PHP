<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorArticulo extends CI_Controller {

    public function GrabarArticulo(){
            
        /*Recibe los datos de nombre, descripcion, precio y stock del articulo
        para insertarlos en la tabla articulo*/
        
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        
        
        

        $this->load->model('administrarArticulos');
        $this->administrarArticulos->guardarArticulo($nombre,$descripcion,$precio, $stock);

        $this->load->view("administrador/postAccionAdmin");



    }

    public function agregar(){
        $this->load->view('cabeceras/navAdmin');
        $this->load->view('administrador/agregarArticulos');

    }


    function eliminar($id){
        
        $this->load->model("administrarArticulos");
        $this->administrarArticulos->eliminarArticulo($id);

        $this->load->view("administrador/postAccionAdmin");


    }


    function modificar($id){

        $this->load->model("administrarArticulos");
        $data['articulo'] = $this->administrarArticulos->getArticulo($id);
        $data['id'] = $id;
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $nombre =$this->input->post('nombre');
            $descripcion =$this->input->post('descripcion');
            $precio =$this->input->post('precio');
            $stock = $_POST['stock'];

            $data = array(

                'nombre' =>$nombre,
                'descripcion' => $descripcion,
                'precio' => $precio,
                'stock' => $stock
    
            );

            $this->load->model("administrarArticulos");
            $this->administrarArticulos->actualizarArticulo($data, $id);
        
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];

            $this->load->view("administrador/postAccionAdmin");

        }
        
        $this->load->view('administrador/modificarArticuloView', $data);



    }

 }

