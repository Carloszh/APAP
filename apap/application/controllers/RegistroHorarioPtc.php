<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class RegistroHorarioPtc extends CI_Controller{

    public function __construct(){

     parent::__construct();
     $this->load->helper('url');
   }

   public function index(){

      $this->load->view('RegistroHorarioPtc/Index');
   }

   public function nuevoHorario(){

      $horas = $this->input->post('horas');
      $dias = $this->input->post('dias');
      $disponible= $this->input->post('disponible');

      $this->load->model('RegistroHorarioPtcModel');
      $this->RegistroHorarioPtcModel->guardarHorario($horas,$dias,$disponible);
   }

 }
