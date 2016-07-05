<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getVacantes(){	
		$sql = "SELECT * FROM app_vacante";	
		$query = $this->db->query($sql);
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}	
}