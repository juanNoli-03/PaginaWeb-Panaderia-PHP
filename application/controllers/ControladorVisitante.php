<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorVisitante extends CI_Controller {

	
	public function index()
	{
        
        $dato['conforme'] ="";
        

		$this->load->view('administrador/inicioVisitante',$dato);
	}
        
        

        public function GrabarCliente(){
            
            /*Recibe los datos de nombre, descripcion, precio y stock del articulo
            para insertarlos en la tabla articulo*/
            
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            
            
            echo("nombre ".$nombre."<br> pass ".$pass);
    
            $this->load->model('administrarClientes');
            $this->administrarClientes->guardarCliente($nombre,$pass);
            
    
        }
    
        public function agregar(){
            $this->load->view('logueo/registrarseVisitante');
        }

        public function GrabarClienteVisitante(){
            
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
    
            $this->load->model('administrarClientes');
            $this->administrarClientes->guardarCliente($usuario,$pass);

            $this->load->view ('administrador/postAccionVisitante');
            
    
        }

        public function cargarVistaArticulos () {

            $this->load->model('administrarArticulos');

            $data_art['artic']= $this->administrarArticulos->getArticulos();
            
            $this->load->view ('administrador/listaArticulosVisitante', $data_art);
    
        }
    
        public function cargarVistaInicio () {

            $this->load->view ('administrador/inicioVisitante');
        }
    
        
}