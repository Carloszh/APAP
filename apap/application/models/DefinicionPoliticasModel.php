<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefinicionPoliticasModel extends CI_Model{

  public function __construct(){
      parent::__construct();/*constructor de la clase padre Model*/
      $this->load->database();/*Permite accesos a la base de datos*/
  }

  public function listar_politicas(){

    $_SESSION['usuario'] = 1;
    $usuario =(int)$_SESSION['usuario'];
    $query = $this->db->query("select p.id,m.nombre,m.grado from politicas as p inner join cursos as c on p.idCurso = c.id
    inner join materias as m on c.idMateria = m.id where c.idPTC =".$usuario);
    return $query->result_array();

  }

  public function eliminarPolitica($idPolitica){

      $this->db->delete('politicas', array('id' => $idPolitica));

      $_SESSION['usuario'] = 1;
      $usuario =(int)$_SESSION['usuario'];
      $query = $this->db->query("select p.id,m.nombre,m.grado from politicas as p inner join cursos as c on p.idCurso = c.id
      inner join materias as m on c.idMateria = m.id where c.idPTC =".$usuario);
      return $query->result_array();

  }

  public function cargarAsignaturas(){

        /*Campos a obtener*/
      $this->db->select('id,nombre');
        /*nombre de la tabla*/
      $query = $this->db->get('materias');
      return $query->result_array();
  }

  public function cargarCuatrimestres(){

        /*Campos a obtener*/
      $this->db->select('id,grado');
        /*nombre de la tabla*/
      $query = $this->db->get('materias');
      return $query->result_array();
  }

  public function guardarPolitica(
  $idAsignatura,
  $nombre,
  $descripcion){

    $query = $this->db->query("select id from cursos where idMateria =".$idAsignatura);
    $row = $query->row();
    $idCurso = $row->id;
    $fecha =  date("Y-m-d");
    $data = array(

      'nombre'=> $nombre,
      'idCurso'=>$idCurso,
      'descripcion'=>$descripcion,
      'fecha' =>$fecha
    );

      $this->db->insert('politicas', $data);

    }

    public function editarPolitica($idPolitica){

      $_SESSION['usuario'] = 1;
      $usuario =(int)$_SESSION['usuario'];

      $query = $this->db->query("select p.id,m.nombre as asignatura,m.grado,p.nombre as nombrepolitica, p.descripcion from politicas as p
      inner join cursos as c on p.idCurso = c.id
      inner join materias as m on c.idMateria = m.id
      where c.idPTC =".$usuario." and p.id=".$idPolitica);

      return $query->row();
    }

    public function actualizarPolitica($idPolitica,$nombre,$descripcion){

      $data = array(
               'nombre' => $nombre,
               'descripcion'=>$descripcion
            );
            $this->db->where('id', $idPolitica);
            $this->db->update('politicas', $data);
    }
}
