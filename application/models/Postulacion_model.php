<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getPostulacion($data){
		$sql = "SELECT * FROM app_vacante a,app_postulacion b
				WHERE a.idvac = b.idvac
				AND b.idusu = ? ORDER BY fechaPostulacion DESC";
		$query = $this->db->query($sql,array($data));

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}			
	}

	function getPostulacionVacante($data){
		$sql = "SELECT * FROM usuario_info WHERE idusu IN (SELECT idusu FROM app_postulacion WHERE idvac = ?)";

		$query = $this->db->query($sql,array($data));

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}		
	}

	function addPostulacion($data){
		$data = array(
			'idvac' => $data['idvac'],
			'idusu' => $data['idusu'],
			'fechaPostulacion' => $data['fechaPostulacion']
		);

		$this->db->insert('app_postulacion',$data);
	}	
}