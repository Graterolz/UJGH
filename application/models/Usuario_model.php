<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function getUsuarioInfo($data){
		$sql = "SELECT * FROM usuario_info WHERE idusu = ?";
		$query = $this->db->query($sql,array($data));
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	public function getUsuarioAcademico($data){
		$sql = "SELECT * FROM usuario_academico WHERE idusu = ? ORDER BY idaca DESC";
		$query = $this->db->query($sql,array($data));

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	public function getUsuarioLaboral($data){
		$sql = "SELECT * FROM usuario_laboral WHERE idusu = ? order by idlab DESC";
		$query = $this->db->query($sql,array($data));
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}
}