<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_academico_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Obtener informacion academica
	function get($idaca){
		if($idaca!=NULL){
			$this->db->where(IDACA,$idaca);
		}
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_USUARIO_ACADEMICO);
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Insertar informacion academica
	function add($data){
		$data=array(
			IDACA => NULL,
			IDUSU => $data[IDUSU],
			TITULO => $data[TITULO],
			NIVEL_ESTUDIO => $data[NIVEL_ESTUDIO],
			INSTITUCION => $data[INSTITUCION],
			MES_INICIO => $data[MES_INICIO],
			ANIO_INICIO => $data[ANIO_INICIO],
			MES_FIN => $data[MES_FIN],
			ANIO_FIN => $data[ANIO_FIN],
			FECHA_REGISTRO => date(FORMATO_FECHA),
			FECHA_EDICION => date(FORMATO_FECHA),
			ESTADO_REGISTRO => ESTADO_REGISTRO_ACTIVO
		);

		$query=$this->db->insert(TABLA_USUARIO_ACADEMICO,$data);
		return $query;
	}
	
	// Editar informacion academica
	function edit($idaca,$data){
		$data=array(
			TITULO => $data[TITULO],
			NIVEL_ESTUDIO => $data[NIVEL_ESTUDIO],
			INSTITUCION => $data[INSTITUCION],
			MES_INICIO => $data[MES_INICIO],
			ANIO_INICIO => $data[ANIO_INICIO],
			MES_FIN => $data[MES_FIN],
			ANIO_FIN => $data[ANIO_FIN],
			FECHA_EDICION => date(FORMATO_FECHA)
		);

		$this->db->where(IDACA,$idaca);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->update(TABLA_USUARIO_ACADEMICO,$data);
		return $query;
	}

	// Eliminar informacion academica
	function del($idaca){
		$data=array(
			ESTADO_REGISTRO => ESTADO_REGISTRO_ELIMINADO
		);

		$this->db->where(IDACA,$idaca);
		$query=$this->db->update(TABLA_USUARIO_ACADEMICO,$data);
		return $query;
	}

	// Obtener informacion academica por usuario
	function getAcademicoByUsuario($idusu){
		$this->db->where(IDUSU,$idusu);
		$this->db->where(ESTADO_REGISTRO,ESTADO_REGISTRO_ACTIVO);
		$query=$this->db->get(TABLA_USUARIO_ACADEMICO);
				
		if($query->num_rows()>0){
			return $query;
		}else{
			return false;
		}
	}

	// Reglas para formularios
	public $usuario_academico_rules = array(
		TITULO => array(
			'field' => TITULO,
			'for' => TITULO,
			'label' => 'Titulo',
			'rules' => 'trim|required'
		),
		NIVEL_ESTUDIO => array(
			'field' => NIVEL_ESTUDIO,
			'for' => NIVEL_ESTUDIO,
			'label' => 'Nivel de Estudio',
			'rules' => 'trim|required'
		),
		INSTITUCION => array(
			'field' => INSTITUCION,
			'for' => INSTITUCION,
			'label' => 'Institucion',
			'rules' => 'trim|required'
		),
		MES_INICIO => array(
			'field' => MES_INICIO,
			'for' => MES_INICIO,
			'label' => 'Mes Inicio',
			'rules' => 'trim|required'
		),
		ANIO_INICIO => array(
			'field' => ANIO_INICIO,
			'for' => ANIO_INICIO,
			'label' => 'Año Inicio',
			'rules' => 'trim|required'
		),
		MES_FIN => array(
			'field' => MES_FIN,
			'for' => MES_FIN,
			'label' => 'Mes Fin',
			'rules' => 'trim|required'
		),
		ANIO_FIN => array(
			'field' => ANIO_FIN,
			'for' => ANIO_FIN,
			'label' => 'Año Fin',
			'rules' => 'trim|required'			
		)
	);
}