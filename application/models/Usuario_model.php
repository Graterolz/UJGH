<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public $rules_academico = array(
		'titulo' => array(
            'field' => 'titulo',
            'label' => 'titulo',
            'rules' => 'trim|required',
            ),
        'nivelEstudio' => array(
            'field' => 'nivelEstudio',
            'label' => 'nivelEstudio',
            'rules' => 'trim|required',
            ),
        'institucion' => array(
            'field' => 'institucion',
            'label' => 'institucion',
            'rules' => 'trim|required',
            ),
        'mesInicio' => array(
            'field' => 'mesInicio',
            'label' => 'mesInicio',
            'rules' => 'trim|required',        	
        	),
        'anioInicio' => array(
            'field' => 'anioInicio',
            'label' => 'anioInicio',
            'rules' => 'trim|required',
        	),
        'mesFin' => array(
            'field' => 'mesFin',
            'label' => 'mesFin',
            'rules' => 'trim|required',
        	),
        'anioFin' => array(
            'field' => 'anioFin',
            'label' => 'anioFin',
            'rules' => 'trim|required',
        	),        	        	        
	);

	
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
		/*$this->db->where('idusu',$idusu);
		$query = $this->db->get('usuario_academico');

		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}*/

		return $this->getUsuarioAcademicoV2($idusu,NULL);
	}

	function getUsuarioAcademicoV2($idusu,$idaca){

		/*echo $idusu."\n";
		echo $idaca."12"."\n";*/

		if ($idusu!=NULL){
			$this->db->where('idusu',$idusu);
		}

		if ($idaca!=NULL){
			$this->db->where('idaca',$idaca);	
		}

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

	function editUsuarioAcademico($idaca,$data){
		$data = array(
			'titulo' => $data['titulo'],
			'nivelEstudio' => $data['nivelEstudio'],
			'institucion' => $data['institucion'],
			'mesInicio' => $data['mesInicio'],
			'anioInicio' => $data['anioInicio'],
			'mesFin' => $data['mesFin'],
			'anioFin' => $data['anioFin']
		);

		$this->db->where('idaca',$idaca);
		$this->db->update('usuario_academico',$data);
	}
}