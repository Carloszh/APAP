<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class consultarInfoAlumno extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model(array('mod_DC'));
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
	
	public function index()
	{

		$matricula = NULL;
		$submit = NULL;

		extract($_POST);

		$params['matricula'] = $matricula;
		

		if(isset($submit)){
			$result = $this->mod_DC->selectAlumno($matricula);
			if($result == false){
				echo "<script>alert('No se ha encontrado Usuario con esa Matricula')</script>";
				$this->load->view('consultarInfoAlumno');
			}else{
				$data = array('consulta' => $result);
				$this->load->view('consultarInfoAlumno2',$data);
			}
		}else{
			$this->load->view('consultarInfoAlumno');
		}

		


	}

}