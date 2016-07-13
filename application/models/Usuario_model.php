<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function getUsuarioInfo($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_info');		
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	function getUsuarioAcademico($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_academico');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	function getUsuarioLaboral($idusu){
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_laboral');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}

	function getLoginUsuario($data){
		$this->db->select('idusu,idrol');
		$this->db->where('email',$data['user']);
		$this->db->where('contrasena',$data['pass']);
		$this->db->limit(1);

		$query = $this->db->get('usuario_info');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}
}