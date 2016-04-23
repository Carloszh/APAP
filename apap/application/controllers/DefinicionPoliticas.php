<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class DefinicionPoliticas extends CI_Controller{

    public function __construct(){

     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
   }

   public function index(){

     $this->load->model('DefinicionPoliticasModel');
     $data['politicas'] =$this->DefinicionPoliticasModel->listar_politicas();
     $this->load->view('DefinicionPoliticas/Index',$data);
   }

   public function cargar_modal_definirPoliticas(){

     $this->load->model('DefinicionPoliticasModel');
     $data['asignaturas'] =$this->DefinicionPoliticasModel->cargarAsignaturas();
     $data['cuatrimestres'] =$this->DefinicionPoliticasModel->cargarCuatrimestres();
     $this->load->view('DefinicionPoliticas/DefinirPoliticasModal',$data);
   }

   public function verDefinicionPoliticas($idPolitica){

   }

   public function eliminarPolitica(){

     $idPolitica = $this->input->post('idPolitica');
     $this->load->model('DefinicionPoliticasModel');
     $data['politicas'] =$this->DefinicionPoliticasModel->eliminarPolitica($idPolitica);
     $this->load->view('DefinicionPoliticas/TablaPoliticasRedactadas',$data);
   }

   public function guardarPolitica(){

    $idAsignatura = $this->input->post('idAsignatura');
    $nombre = $this->input->post('nombre');
    $descripcion = $this->input->post('descripcion');

    $this->load->model('DefinicionPoliticasModel');

    $this->DefinicionPoliticasModel->guardarPolitica(
    $idAsignatura,
    $nombre,
    $descripcion
    );

    $data['politicas'] =$this->DefinicionPoliticasModel->listar_politicas();
    $this->load->view('DefinicionPoliticas/TablaPoliticasRedactadas',$data);

   }

   public function editarPolitica(){

     $idPolitica = $this->input->post('idPolitica');
     $nombre = $this->input->post('nombre');
     $descripcion = $this->input->post('descripcion');

     $this->load->model('DefinicionPoliticasModel');

     $data['politicas'] = $this->DefinicionPoliticasModel->editarPolitica($idPolitica);
     $this->load->view('DefinicionPoliticas/EditarPoliticasModal',$data);
   }

   public function actualizarPolitica(){

     $idPolitica = $this->input->post('idPolitica');
     $nombre = $this->input->post('nombre');
     $descripcion = $this->input->post('descripcion');

     $this->load->model('DefinicionPoliticasModel');
     $this->DefinicionPoliticasModel->actualizarPolitica($idPolitica,$nombre,$descripcion);

   }



}
