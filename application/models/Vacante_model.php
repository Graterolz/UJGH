<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacante_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public $rules = array(
		'titulo' => array(
            'field' => 'titulo',
            'label' => 'titulo',
            'rules' => 'trim|required',
            ),
        'descripcion' => array(
            'field' => 'descripcion',
            'label' => 'descripcion',
            'rules' => 'trim|required',
            ),
        'beneficios' => array(
            'field' => 'beneficios',
            'label' => 'beneficios',
            'rules' => 'trim|required',
            ),
	);

	function getVacantes($idvac,$idusu){
		//$sql = "SELECT * FROM app_vacante";
		/*$sql = "SELECT * FROM app_vacante WHERE idvac NOT IN (SELECT idvac FROM app_postulacion WHERE idusu = ?)";
		$data = $idusu;

		if ($idvac!=NULL){
			$sql = "SELECT * FROM app_vacante WHERE idvac = ?";
			$data = $idvac;
		}

		$query = $this->db->query($sql,$data);

		echo "VAC: ".$idvac."<br>";
		echo "USU: ".$idusu."<br>";
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}*/
		//echo $idvac;

		return $this->gerVacanteV2($idvac,$idusu,NULL);
	}

	function getVacantesADM(){
		return $this->gerVacanteV2(NULL,NULL,'ADM');
	}
	
	//

	function gerVacanteV2($idvac,$idusu,$idrol){
		$data = NULL;
		//$sql = NULL;

		if ($idusu!=NULL){
			$sql = "SELECT * FROM app_vacante WHERE idvac NOT IN (SELECT idvac FROM app_postulacion WHERE idusu = ?)";
			$data = $idusu;
		}

		if ($idvac!=NULL){
			$sql = "SELECT * FROM app_vacante WHERE idvac = ?";
			$data = $idvac;
		}

		if($idrol=='ADM'){
			$sql = "SELECT a.idvac, a.titulo, a.descripcion, COUNT(b.idvac) postulaciones
					FROM app_vacante a 
					LEFT JOIN app_postulacion b ON a.idvac = b.idvac
					GROUP BY a.idvac,a.titulo,a.descripcion
					ORDER BY 4 DESC, 1";
		}
		//echo $sql;

		$query = $this->db->query($sql,$data);
		
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}	
	
	//
	function addVacante($data){
		$data = array(
			'idvac' => NULL,
			'titulo' => $data['titulo'],
			'descripcion' => $data['descripcion'],
			'beneficios' => $data['beneficios'],
			'requisitos' => $data['requisitos'],
			'salario' => $data['salario'],
			'fechaPublicacion' => $data['fechaPublicacion'],
			'tipo' => $data['tipo']
		);
		
		$this->db->insert('app_vacante',$data);
	}

	function editVacante($idvac,$data){
		$data = array(
			'titulo' => $data['titulo'],
			'descripcion' => $data['descripcion'],
			'beneficios' => $data['beneficios'],
			'requisitos' => $data['requisitos'],
			'salario' => $data['salario'],
			'fechaPublicacion' => $data['fechaPublicacion'],
			'tipo' => $data['tipo']
		);

		$this->db->where('idvac',$idvac);
		$this->db->update('app_vacante',$data);
	}

	function delVacante($idvac){
		$this->db->where('idvac', $idvac);
		$this->db->delete('app_vacante');
	}
}