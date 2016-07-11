<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getVacantes($idvac,$idusu){
		//$sql = "SELECT * FROM app_vacante";
		$sql = "SELECT * FROM app_vacante WHERE idvac NOT IN (SELECT idvac FROM app_postulacion WHERE idusu = ?)";
		$data = $idusu;

		if ($idvac!=NULL){
			$sql = "SELECT * FROM app_vacante WHERE idvac = ?";
			$data = $idvac;
		}					

		$query = $this->db->query($sql,$data);
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
}