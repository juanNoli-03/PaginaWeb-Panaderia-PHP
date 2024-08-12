<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorBienvenida extends CI_Controller {

    public function index()
	{   
		$this->load->view('inicio/bienvenida');
	}

	public function validarUsuario(){

		$this->load->database ();
		
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS); 
		
		$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
	   
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

}