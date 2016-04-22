<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroHorarioPtcModel extends CI_Model{

  public function __construct(){
      parent::__construct();/*constructor de la clase padre Model*/
      $this->load->database();/*Permite accesos a la base de datos*/
  }

  public function guardarHorario($horas,$dias,$disponible){


    $_SESSION['usuario'] = 1;
    $usuario =(int)$_SESSION['usuario'];

    $data = array(

      'hora'=> $horas,
      'dia'=>$dias,
      'libre'=>$disponible,
      'idPtc' =>$usuario
    );

      $this->db->insert('horasptc', $data);

  }

}
