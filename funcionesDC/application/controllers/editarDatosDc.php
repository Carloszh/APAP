<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditarDatosDc extends CI_Controller {

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

		extract($_POST);
		$data = array('name' => $name,'apellidos' => $apellidos, 'matricula' => $matricula, 'correo' => $correo);
		$params['name'] = $name;
		$params['apellidos'] = $apellidos;
		$params['matricula'] = $matricula;
		$params['id'] = $id;//matricula vieja en dado caso se cambie
		$params['correo'] = $correo;
		//$params['password'] = $password;

		if(isset($submit1)){	
			$this->mod_DC->delete($data['matricula']);
			echo "<script>alert('Eliminado Con Exito')</script>";
			$this->load->view('consultarInfoPTC');
		}else if(isset($submit)){
			$this->mod_DC->update($params);
			echo "<script>alert('Actualizado Con Exito')</script>";
			$this->load->view('consultarInfoPTC');
				
		}else if(isset($submit3)){
			$this->load->view('consultarInfoPTC');
		}else{
			$this->load->view('editarDatosDc',$data);
		}
		

		
	}
}
