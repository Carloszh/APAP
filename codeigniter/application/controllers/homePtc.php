<?php

class homePtc extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index($info = '')
	{
		$data = array('title' => 'Home', 'mensaje' => 'Pagina de Inicio', 'info' => $info);
		$this->load->view('homePtc',$data);
	}
}
