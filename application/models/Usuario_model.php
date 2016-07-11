<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function getUsuarioInfo($data){
		$sql = "SELECT * FROM usuario_info WHERE idusu = ?";
		$query = $this->db->query($sql,array($data));
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	function getUsuarioAcademico($data){
		$sql = "SELECT * FROM usuario_academico WHERE idusu = ? ORDER BY idaca DESC";
		$query = $this->db->query($sql,array($data));

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	function getUsuarioLaboral($data){
		$sql = "SELECT * FROM usuario_laboral WHERE idusu = ? order by idlab DESC";
		$query = $this->db->query($sql,array($data));

		/*
		$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_laboral');
		*/
		
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