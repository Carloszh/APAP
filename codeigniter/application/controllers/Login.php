<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Arcos
 */
class Login extends CI_Controller  {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }
    public function index()
    {
            $this->load->view('Login');
    }
    
    public function loginPtc(){
        $this->form_validation->set_error_delimiters('<div class="alert-error">','</div>');
        $this->form_validation->set_rules('clave','Clave','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('Login');
        }else{
            $data = array(
            'clave' => $this->input->post('clave'),
            'pass' => $this->input->post('password')
            );
            $login = $this->usuarios_model->loginPtc($data);
            if($login){
                redirect('HomePtc', 'refresh');
            }else{
                redirect('accesoPtc', 'refresh');
            }
        }
        
    }
    
    
    
  
}
