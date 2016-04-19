<?php

class Home extends CI_Controller {

	
	public function index($info = '')
	{
		$data = array('title' => 'Home', 'mensaje' => 'Pagina de Inicio', 'info' => $info);
		$this->load->view('home',$data);
	}
}
