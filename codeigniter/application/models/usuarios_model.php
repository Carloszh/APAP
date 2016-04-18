<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuarios_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function loginPtc($data){
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
    }
}

