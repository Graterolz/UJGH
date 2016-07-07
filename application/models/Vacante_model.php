<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getVacantes($data){
		$sql = "SELECT * FROM app_vacante";

		if ($data!=NULL){
			$sql = "SELECT * FROM app_vacante WHERE idvac = ".$data;			
		}					

		$query = $this->db->query($sql);
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
}