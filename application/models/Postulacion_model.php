<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postulacion_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Retorna postulacion
	function get($idpos){
		$this->db->where('idpos',$idpos);
		$query=$this->db->get('postulacion');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Agrega postulacion
	function add($data){
		$data = array(
			'idvac' => $data['idvac'],
			'idusu' => $data['idusu'],
			'estado' => $data['estado'],
			'fechaPostulacion' => $data['fechaPostulacion']
		);

		$this->db->insert('postulacion',$data);
	}

	// Edita postulacion
	function edit($idpos,$data){
		$data = array(
			'idvac' => $data['idvac'],
			'idusu' => $data['idusu'],
			'fechaPostulacion' => $data['fechaPostulacion']
		);

		$this->db->where('idpos',$idpos);
		$this->db->update('postulacion',$data);		
	}

	// Borra postulacion
	function del($idpos){
		$this->db->where('idpos', $idpos);
		$this->db->delete('postulacion');
	}

	//
	//
	// Retorna postulacion de Usuario o Vacante
	function getUsuario($idusu,$idvac){
		if ($idvac!=NULL){
			$this->db->where('idvac',$idvac);	
		}			
		
		$this->db->where('idusu',$idusu);		
		$query=$this->db->get('postulacion');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Retorna postulacion de Vacante
	function getVacante($idvac){
		$this->db->where('idvac',$idvac);
		$query=$this->db->get('postulacion');
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}
}