<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class mod_DC extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    protected $table = 'usuarios';
    public function update($params){

        $fields = array(
            'nombre' => $params['name'],
            'apellidos' => $params['apellidos'],
            'correo' => $params['correo'],
            'clave' => $params['matricula'],
            
        );
        $this->db->where("clave",$params['id']);
        $this->db->update($this->table,$fields); 
    }

    public function update_alumno($params){

        $fields = array(
            'nombre' => $params['name'],
            'apellidos' => $params['apellidos'],
            'correo' => $params['correo'],
            'clave' => $params['matricula'],
            
        );


        $this->db->where("clave",$params['id']);
        $this->db->where("tipo",0);
        $this->db->update('usuarios',$fields);

        $fields2 = array(
            'matricula' => $params['matricula'],
            'cuatrimestre' => $params['cuatrimestre'],
        ); 
        echo $params['cuatrimestre'];
        $this->db->where("matricula",$params['id']);
        $this->db->update('alumnos',$fields2);
      



    }

    public function delete($id){

     
        $this->db->where("clave",$id);
        $this->db->delete($this->table); 
    }

    function selectPTC($data){
        $query = $this->db->select('*');
        $query = $this->db->from('usuarios');
        $query = $this->db->where("clave",$data);
        $query = $this->db->where("tipo",1);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query;
        }else{
            return false;
        }
        //$this->db->insert('users',array('usr'=>$data['clave'],'pass'=>$data['pass']));
    }

    function selectAlumno($data){
       
        $query = $this->db->select('u.nombre,u.apellidos,u.correo,u.clave,a.matricula,a.cuatrimestre');
        $query = $this->db->from('usuarios u');
        $query = $this->db->join('alumnos a', 'u.id = a.idUsuario');
        $query = $this->db->where("a.matricula",$data);
        $query = $this->db->where("u.tipo",0);
        $query = $this->db->get();

        if($query->num_rows()>0){
            return $query;
        }else{
            return false;
        }
        //$this->db->insert('users',array('usr'=>$data['clave'],'pass'=>$data['pass']));
    }
 /*   function loginPtc($data){
        $query = $this->db->select('u.contrasenia,p.Clave');
        $query = $this->db->from('usuarios u');
        $query = $this->db->join('ptc p', 'u.id = p.idUsuario');
        $query = $this->db->where("u.contrasenia",$data['pass']);
        $query = $this->db->where("p.Clave",$data['clave']);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return true;
        }else{
            return false;
        }
        //$this->db->insert('users',array('usr'=>$data['clave'],'pass'=>$data['pass']));
    }
    
    
    function loginAlumno($data){
        $query = $this->db->select('u.contrasenia,a.matricula');
        $query = $this->db->from('usuarios u');
        $query = $this->db->join('alumnos a', 'u.id = a.idUsuario');
        $query = $this->db->where("u.contrasenia",$data['pass']);
        $query = $this->db->where("a.matricula",$data['clave']);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return true;
        }else{
            return false;
        }
        //$this->xdb->insert('users',array('usr'=>$data['clave'],'pass'=>$data['pass']));
    }*/
}

