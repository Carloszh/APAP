<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditarDatosAlumno extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model(array('mod_DC'));
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
	
	public function index()
	{
		
		
		$name = NULL;
		$apellidos = NULL;
		$matricula = NULL;
		$correo = NULL;
		//$password = NULL;
		$submit = NULL;
		$submit1 = NULL;
		$submit3 = NULL;
		$id = NULL;
		$cuatrimestre = NULL;

		extract($_POST);
		$data = array('name' => $name,'apellidos' => $apellidos, 'matricula' => $matricula, 'correo' => $correo, 'cuatrimestre' => $cuatrimestre);
		$params['name'] = $name;
		$params['apellidos'] = $apellidos;
		$params['matricula'] = $matricula;
		$params['id'] = $id;//matricula vieja en dado caso se cambie
		$params['correo'] = $correo;
		$params['cuatrimestre'] = $cuatrimestre;
		//$params['password'] = $password;

		if(isset($submit1)){	
			$this->mod_DC->delete($data['matricula']);
			echo "<script>alert('Eliminado Con Exito')</script>";
			$this->load->view('consultarInfoAlumno');
		}else if(isset($submit)){
			$this->mod_DC->update_alumno($params);
			echo "<script>alert('Actualizado Con Exito')</script>";
			$this->load->view('consultarInfoAlumno');
				
		}else if(isset($submit3)){
			$this->load->view('consultarInfoAlumno');
		}else{
			$this->load->view('editarDatosAlumno',$data);
		}
		

		
	}
}
