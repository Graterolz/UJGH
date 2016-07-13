<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function getVacantes($idvac,$idusu){
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

	function getVacantesADM(){
		$sql = "SELECT 
					a.idvac,
					a.titulo,
					a.descripcion,
					count(b.idvac) postulaciones 
				FROM app_vacante a
				LEFT JOIN app_postulacion b ON a.idvac = b.idvac
				GROUP BY a.idvac,a.titulo,a.descripcion ORDER BY 4 DESC, 1";
		$query = $this->db->query($sql);
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
}