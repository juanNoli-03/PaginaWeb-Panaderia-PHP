<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorAdmin extends CI_Controller {

	
	public function index()
	{
        
        $dato['conforme'] ="";
        

		$this->load->view('logueo/inicioSesionAdmin',$dato);
	}
        
        public function validarUsuario(){

            $this->load->database ();
            
            $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS); 
            
            $pass = filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS);
           
            $this->load->model('LogueoAdmin');
            $valido=$this->LogueoAdmin->validarIngreso($usuario,$pass);

           
            if($valido != null){
                
                $this->load->view ('administrador/inicioAdmin');
            }
            else {               
                $dato['conforme']="No sos un Administrador! Clave y Usuario incorrectos!";
                $this->load->view('logueo/inicioSesionAdmin',$dato);
            }
        }

        public function cargarVistaInicio () {

            $this->load->view ('administrador/inicioAdmin');
        }

        public function cargarVistaArticulos () {

            $this->load->model('administrarArticulos');

            $data_art['artic']= $this->administrarArticulos->getArticulos();
            
            $this->load->view ('administrador/listaArticulos', $data_art);
    
        }

        public function cargarVistaClientes () {

            $this->load->model('administrarClientes');

            $data_cli['clien']= $this->administrarClientes->getClientes();
            
            $this->load->view ('administrador/listaClientes', $data_cli);
    
        }
    
        function postAccion(){

            $this->load->view("administrador/postAccionAdmin");
    
        }

}