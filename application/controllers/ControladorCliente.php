<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorCliente extends CI_Controller {

	
	public function index()
	{
        
        $dato['conforme'] ="";
        

		$this->load->view('logueo/inicioSesionCliente',$dato);
	}
        
        public function validarUsuario(){

            $this->load->database ();
            
            $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS); 
            
            $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
           
            $this->load->model('LogueoCliente');
            $valido=$this->LogueoCliente->validarIngreso($usuario,$pass);

           
            if($valido != null){
                
                $this->load->view ('administrador/inicioCliente');
                
            }
            else {               
                $dato['conforme']="No sos un Cliente! Clave y Usuario incorrectos!";
                $this->load->view('logueo/inicioSesionCliente',$dato);
            }
            
        }

        

        public function GrabarCliente(){
            
            /*Recibe los datos de nombre, descripcion, precio y stock del articulo
            para insertarlos en la tabla articulo*/
            
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
    
            $this->load->model('administrarClientes');
            $this->administrarClientes->guardarCliente($usuario,$pass);
            $this->load->view('administrador/postAccionAdmin');
            
        }
    
        public function agregar(){
            $this->load->view('cabeceras/navAdmin');
            $this->load->view('administrador/agregarClientes');
        }
    
    
        function eliminar($id){
            
            $this->load->model('administrarClientes');
            $this->administrarClientes->eliminarCliente($id);
            $this->load->view('administrador/postAccionAdmin');
    
        }
    
    
        function modificar($id){
    
            $this->load->model("administrarClientes");
            $data['cliente'] = $this->administrarClientes->getCliente($id);
            $data['id'] = $id;
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
                $usuario =$this->input->post('usuario');
                $pass =$this->input->post('pass');
    
                $data = array(
    
                    'usuario' =>$usuario,
                    'pass' => $pass
        
                );
    
                $this->load->model("administrarClientes");
                $this->administrarClientes->actualizarCliente($data, $id);
            
                $usuario = $_POST['usuario'];
                $pass = $_POST['pass'];
                
                redirect(base_url('ControladorCliente/postModificar'));
    
            }
            
            $this->load->view('administrador/modificarClienteView', $data);
    
        }
    
        function postModificar(){
    
            $this->load->view('cabeceras/navAdmin');
            $this->load->view("administrador/articuloModificadoView");
            
        }

        public function cargarVistaArticulos () {

            $this->load->model('administrarArticulos');

            $data_art['artic']= $this->administrarArticulos->getArticulos();
            
            $this->load->view ('administrador/listaArticulosCliente', $data_art);
    
        }

        public function cargarVistaInicio () {

            $this->load->view ('administrador/inicioCliente');
        }
}